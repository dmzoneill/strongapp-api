from pprint import pprint
import requests
from requests_toolbelt.utils import dump
import os
import sys
import json


class Strong:
    def __init__(self):
        self.endpoint = "https://ws13.strongapp.co"
        self.strong_username = os.environ.get('strong_username')
        self.strong_password = os.environ.get('strong_password')
        self.strong_device_uuid = os.environ.get('strong_device_uuid')
        self.strong_application_id = os.environ.get('strong_application_id')
        self.debug = False

        if self.strong_username is None:
            print("Missing: strong_username")
            sys.exit(1)

        if self.strong_password is None:
            print("Missing: strong_password")
            sys.exit(2)

        if self.strong_device_uuid is None:
            print("Missing: strong_device_uuid")
            sys.exit(3)

        if self.strong_application_id is None:
            print("Missing: strong_application_id")
            sys.exit(4)

        self.headers = {
            'Host': 'ws13.strongapp.co',
            'x-parse-application-id': self.strong_application_id,
            'x-parse-app-build-version': '257',
            'x-parse-app-display-version': '2.7.9',
            'x-parse-os-version': '13',
            'user-agent': 'Parse Android SDK API Level 33',
            'x-parse-installation-id': self.strong_device_uuid,
            'content-type': 'application/json',
            'pragma': 'no-cache',
            'cache-control': 'no-cache'
        }

    def WebRequest(self, method, query, data=None):
        try:
            if method == "POST":
                self.response = requests.post(
                    self.endpoint + query, json=data, headers=self.headers)
            else:
                self.response = requests.get(
                    self.endpoint + query, headers=self.headers)

            if self.debug:
                data = dump.dump_all(self.response)
                print(data.decode('utf-8'))
                print(self.response.status_code)
                pprint(self.response.text)

            if self.response.ok:
                return True

            return False
        except Exception as e:
            print(str(e))
            return False

    def Login(self):
        try:
            data = {}
            data["password"] = self.strong_password
            data["username"] = self.strong_username
            data["_method"] = "GET"

            res = self.WebRequest("POST", "/parse/login", data)

            js = self.response.json()
            self.session_token = js["sessionToken"]
            self.user_object_id = js["objectId"]

            self.headers['x-parse-session-token'] = self.session_token
            return res
        except Exception as e:
            print(str(e))
            return False

    def GetUser(self):
        try:
            res = self.WebRequest(
                "GET", "/parse/classes/_User/" + self.user_object_id)
            return res
        except Exception as e:
            print(str(e))
            return False

    def GetWorkouts(self):
        try:
            where = {}
            where["user"] = {}
            where["user"]["__type"] = "Pointer"
            where["user"]["className"] = "_User"
            where["user"]["objectId"] = self.user_object_id
            where["updatedAt"] = {}
            where["updatedAt"]["$gt"] = {}
            where["updatedAt"]["$gt"]["__type"] = "Date"
            where["updatedAt"]["$gt"]["iso"] = "1970-01-01T00:00:00.000Z"

            data = {}
            data["include"] = "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise"
            data["limit"] = "200"
            data["where"] = json.dumps(where).replace('"', '\"')
            data["_method"] = "GET"

            res = self.WebRequest("POST", "/parse/classes/ParseWorkout", data)

            return res
        except Exception as e:
            print(str(e))
            return False

    def GetWorkOutsPerWeek(self):
        try:
            where = {}
            where["user"] = {}
            where["user"]["__type"] = "Pointer"
            where["user"]["className"] = "_User"
            where["user"]["objectId"] = self.user_object_id

            data = {}
            data["_method"] = "GET"
            data["where"] = json.dumps(where).replace('"', '\"')

            res = self.WebRequest("POST", "/parse/classes/ParseWidget", data)
            return res
        except Exception as e:
            print(str(e))
            return False

    def GetWorkOutsCount(self):
        try:
            where = {}
            where["user"] = {}
            where["user"]["__type"] = "Pointer"
            where["user"]["className"] = "_User"
            where["user"]["objectId"] = self.user_object_id
            where["updatedAt"] = {}
            where["updatedAt"]["$gt"] = {}
            where["updatedAt"]["$gt"]["__type"] = "Date"
            where["updatedAt"]["$gt"]["iso"] = "1970-01-01T00:00:00.000Z"

            data = {}
            data["include"] = "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise"
            data["limit"] = "0"
            data["count"] = "1"
            data["where"] = json.dumps(where).replace('"', '\"')
            data["_method"] = "GET"

            res = self.WebRequest("POST", "/parse/classes/ParseWorkout", data)
            return res
        except Exception as e:
            print(str(e))
            return False

    def GetJSON(self):
        return self.response.json()

    def GetText(self):
        return self.response.text

    def SaveResponseToFile(self, filename):
        try:
            save_file = open(filename, "w")
            save_file.write(self.response.text)
            save_file.close()
            return True
        except Exception as e:
            print(str(e))
            return False
