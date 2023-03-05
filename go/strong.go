package strong

import (
	"encoding/json"
	"fmt"
	"net/http"
	"os"
	"strings"
)

type Strong struct {
	endpoint            string
	strongUsername      string
	strongPassword      string
	strongDeviceUUID    string
	strongApplicationID string
	debug               bool
	headers             http.Header
	response            *http.Response
	sessionToken        string
	userObjectID        string
}

func NewStrong() (*Strong, error) {
	s := &Strong{}
	s.endpoint = "https://ws13.strongapp.co"
	s.strongUsername = os.Getenv("strong_username")
	s.strongPassword = os.Getenv("strong_password")
	s.strongDeviceUUID = os.Getenv("strong_device_uuid")
	s.strongApplicationID = os.Getenv("strong_application_id")
	s.debug = false

	if s.strongUsername == "" {
		return nil, fmt.Errorf("Missing: strong_username")
	}

	if s.strongPassword == "" {
		return nil, fmt.Errorf("Missing: strong_password")
	}

	if s.strongDeviceUUID == "" {
		return nil, fmt.Errorf("Missing: strong_device_uuid")
	}

	if s.strongApplicationID == "" {
		return nil, fmt.Errorf("Missing: strong_application_id")
	}

	s.headers = make(http.Header)
	s.headers.Add("Host", "ws13.strongapp.co")
	s.headers.Add("x-parse-application-id", s.strongApplicationID)
	s.headers.Add("x-parse-app-build-version", "257")
	s.headers.Add("x-parse-app-display-version", "2.7.9")
	s.headers.Add("x-parse-os-version", "13")
	s.headers.Add("user-agent", "Parse Android SDK API Level 33")
	s.headers.Add("x-parse-installation-id", s.strongDeviceUUID)
	s.headers.Add("content-type", "application/json")
	s.headers.Add("pragma", "no-cache")
	s.headers.Add("cache-control", "no-cache")

	return s, nil
}

func (s *Strong) WebRequest(method, query string, data interface{}) bool {
	var req *http.Request
	var err error
	if data != nil {
		reqBody, err := json.Marshal(data)
		if err != nil {
			fmt.Println(err)
			return false
		}
		req, err = http.NewRequest(strings.ToUpper(method), s.endpoint+query, strings.NewReader(string(reqBody)))
		if err != nil {
			fmt.Println(err)
			return false
		}
	} else {
		req, err = http.NewRequest(strings.ToUpper(method), s.endpoint+query, nil)
		if err != nil {
			fmt.Println(err)
			return false
		}
	}

	req.Header = s.headers

	client := &http.Client{}
	s.response, err = client.Do(req)
	if err != nil {
		fmt.Println(err)
		return false
	}

	defer s.response.Body.Close()

	if s.debug {
		// d, err := dumpResponse(s.response)
		// if err != nil {
		// 	fmt.Println(err)
		// 	return false
		// }
		// fmt.Println(d)
		fmt.Println(s.response.StatusCode)
		fmt.Println(s.response.Body)
	}

	if s.response.StatusCode >= 200 && s.response.StatusCode < 300 {
		return true
	}

	return false

}

func (s *Strong) Login() bool {
	data := map[string]string{
		"password": s.strongPassword,
		"username": s.strongUsername,
		"_method":  "GET",
	}

	if !s.WebRequest("POST", "/parse/login", data) {
		return false
	}

	var js map[string]interface{}
	err := json.NewDecoder(s.response.Body).Decode(&js)
	if err != nil {
		fmt.Println(err)
		return false
	}

	return true
}

func (s *Strong) GetUser() bool {
	res := s.WebRequest("GET", "/parse/classes/_User/"+s.userObjectID, nil)
	return res
}

func (s *Strong) GetWorkouts() bool {
	where := make(map[string]interface{})
	where["user"] = make(map[string]interface{})
	where["user"]["__type"] = "Pointer"
	where["user"]["className"] = "_User"
	where["user"]["objectId"] = s.userObjectID
	where["updatedAt"] = make(map[string]interface{})
	where["updatedAt"]["$gt"] = make(map[string]interface{})
	where["updatedAt"]["$gt"]["__type"] = "Date"
	where["updatedAt"]["$gt"]["iso"] = "1970-01-01T00:00:00.000Z"

	data := make(map[string]interface{})
	data["include"] = "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise"
	data["limit"] = "200"
	data["where"] = strings.ReplaceAll(json.Marshal(where), "\"", "\\\"")
	data["_method"] = "GET"

	res := s.WebRequest("POST", "/parse/classes/ParseWorkout", data)
	return res
}

func (s *Strong) GetWorkOutsPerWeek() bool {
	where := make(map[string]interface{})
	where["user"] = make(map[string]interface{})
	where["user"]["__type"] = "Pointer"
	where["user"]["className"] = "_User"
	where["user"]["objectId"] = s.userObjectID

	data := make(map[string]interface{})
	data["_method"] = "GET"
	data["where"] = strings.ReplaceAll(json.Marshal(where), "\"", "\\\"")

	res := s.WebRequest("POST", "/parse/classes/ParseWidget", data)
	return res
}
