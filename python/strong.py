"""Minimal client for the Strong app's Parse backend (ws13.strongapp.co)."""

import json
import os
import sys
from pprint import pprint

import requests
from requests_toolbelt.utils import dump

# Environment variables that must be set. A missing one exits with its
# 1-based position in this tuple (username=1 ... application id=4).
REQUIRED_SETTINGS = (
    "strong_username",
    "strong_password",
    "strong_device_uuid",
    "strong_application_id",
)

WORKOUT_INCLUDE = "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise"
EPOCH = "1970-01-01T00:00:00.000Z"
REQUEST_TIMEOUT = 60
REQUEST_ERRORS = (requests.RequestException, ValueError, KeyError, TypeError)


class Strong:
    """Wraps login and the workout queries used by the samples."""

    def __init__(self):
        self.endpoint = "https://ws13.strongapp.co"
        self.credentials = {}
        for exit_code, name in enumerate(REQUIRED_SETTINGS, start=1):
            value = os.environ.get(name)
            if value is None:
                print("Missing: " + name)
                sys.exit(exit_code)
            self.credentials[name] = value
        self.debug = False
        self.response = None
        self.session_token = None
        self.user_object_id = None

        self.headers = {
            "Host": "ws13.strongapp.co",
            "x-parse-application-id": self.credentials["strong_application_id"],
            "x-parse-app-build-version": "257",
            "x-parse-app-display-version": "2.7.9",
            "x-parse-os-version": "13",
            "user-agent": "Parse Android SDK API Level 33",
            "x-parse-installation-id": self.credentials["strong_device_uuid"],
            "content-type": "application/json",
            "pragma": "no-cache",
            "cache-control": "no-cache",
        }

    def web_request(self, method, query, data=None):
        """Send a request; True when the server answered with a 2xx status."""
        try:
            url = self.endpoint + query
            headers, timeout = self.headers, REQUEST_TIMEOUT
            if method == "POST":
                resp = requests.post(url, json=data, headers=headers, timeout=timeout)
            else:
                resp = requests.get(url, headers=headers, timeout=timeout)
            self.response = resp

            if self.debug:
                print(dump.dump_all(self.response).decode("utf-8"))
                print(self.response.status_code)
                pprint(self.response.text)

            return bool(self.response.ok)
        except REQUEST_ERRORS as e:
            print(str(e))
            return False

    def _user_query(self, since_epoch, **extra):
        """POST a Parse "GET" query filtered to this user's objects."""
        where = {
            "user": {
                "__type": "Pointer",
                "className": "_User",
                "objectId": self.user_object_id,
            }
        }
        if since_epoch:
            where["updatedAt"] = {"$gt": {"__type": "Date", "iso": EPOCH}}
        data = dict(extra)
        data["where"] = json.dumps(where)
        data["_method"] = "GET"
        return data

    def login(self):
        """Log in and keep the session token for the following requests."""
        try:
            data = {
                "password": self.credentials["strong_password"],
                "username": self.credentials["strong_username"],
                "_method": "GET",
            }
            res = self.web_request("POST", "/parse/login", data)

            js = self.response.json()
            self.session_token = js["sessionToken"]
            self.user_object_id = js["objectId"]

            self.headers["x-parse-session-token"] = self.session_token
            return res
        except REQUEST_ERRORS as e:
            print(str(e))
            return False

    def get_user(self):
        """Fetch the logged-in user's record."""
        try:
            path = "/parse/classes/_User/" + self.user_object_id
            return self.web_request("GET", path)
        except REQUEST_ERRORS as e:
            print(str(e))
            return False

    def get_workouts(self):
        """Fetch up to 200 workouts with their routines and exercises."""
        data = self._user_query(True, include=WORKOUT_INCLUDE, limit="200")
        return self.web_request("POST", "/parse/classes/ParseWorkout", data)

    def get_workouts_per_week(self):
        """Fetch the workouts-per-week widget data."""
        data = self._user_query(False)
        return self.web_request("POST", "/parse/classes/ParseWidget", data)

    def get_workouts_count(self):
        """Fetch only the number of workouts."""
        data = self._user_query(True, include=WORKOUT_INCLUDE, limit="0", count="1")
        return self.web_request("POST", "/parse/classes/ParseWorkout", data)

    def get_json(self):
        """The last response body, decoded from JSON."""
        return self.response.json()

    def get_text(self):
        """The last response body as text."""
        return self.response.text

    def save_response_to_file(self, filename):
        """Write the last response body to filename."""
        try:
            with open(filename, "w", encoding="utf-8") as save_file:
                save_file.write(self.response.text)
            return True
        except (OSError, AttributeError) as e:
            print(str(e))
            return False

    # Original method names, kept so existing callers keep working.
    WebRequest = web_request
    Login = login
    GetUser = get_user
    GetWorkouts = get_workouts
    GetWorkOutsPerWeek = get_workouts_per_week
    GetWorkOutsCount = get_workouts_count
    GetJSON = get_json
    GetText = get_text
    SaveResponseToFile = save_response_to_file
