<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Strong
{
    private $endpoint;
    private $strong_username;
    private $strong_password;
    private $strong_device_uuid;
    private $strong_application_id;
    private $debug;

    private $headers;
    private $response;
    private $session_token;
    private $user_object_id;

    public function __construct()
    {
        $this->endpoint = 'https://ws13.strongapp.co';
        $this->strong_username = getenv('strong_username');
        $this->strong_password = getenv('strong_password');
        $this->strong_device_uuid = getenv('strong_device_uuid');
        $this->strong_application_id = getenv('strong_application_id');
        $this->debug = false;

        if (!$this->strong_username) {
            echo 'Missing: strong_username';
            exit(1);
        }

        if (!$this->strong_password) {
            echo 'Missing: strong_password';
            exit(2);
        }

        if (!$this->strong_device_uuid) {
            echo 'Missing: strong_device_uuid';
            exit(3);
        }

        if (!$this->strong_application_id) {
            echo 'Missing: strong_application_id';
            exit(4);
        }

        $this->headers = [
            'Host' => 'ws13.strongapp.co',
            'x-parse-application-id' => $this->strong_application_id,
            'x-parse-app-build-version' => '257',
            'x-parse-app-display-version' => '2.7.9',
            'x-parse-os-version' => '13',
            'user-agent' => 'Parse Android SDK API Level 33',
            'x-parse-installation-id' => $this->strong_device_uuid,
            'content-type' => 'application/json',
            'pragma' => 'no-cache',
            'cache-control' => 'no-cache'
        ];
    }

    public function WebRequest($method, $query, $data = null)
    {
        try {
            $client = new Client(['base_uri' => $this->endpoint]);
            $options = [
                'headers' => $this->headers,
                'http_errors' => false
            ];

            if ($method === 'POST') {
                $options['json'] = $data;
                $this->response = $client->post($query, $options);
            } else {
                $this->response = $client->get($query, $options);
            }

            if ($this->debug) {
                $body = (string) $this->response->getBody();
                $statusCode = $this->response->getStatusCode();
                var_dump($statusCode);
                var_dump($body);
            }

            if ($this->response->getStatusCode() >= 200 && $this->response->getStatusCode() < 300) {
                return true;
            }

            return false;
        } catch (ClientException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function login()
    {
        try {
            $data = array();
            $data["password"] = $this->strong_password;
            $data["username"] = $this->strong_username;
            $data["_method"] = "GET";

            $res = $this->webRequest("POST", "/parse/login", $data);

            $js = json_decode($this->response, true);
            $this->session_token = $js["sessionToken"];
            $this->user_object_id = $js["objectId"];

            $this->headers['x-parse-session-token'] = $this->session_token;
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUser()
    {
        try {
            $res = $this->webRequest("GET", "/parse/classes/_User/" . $this->user_object_id);
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getWorkouts()
    {
        try {
            $where = array();
            $where["user"] = array();
            $where["user"]["__type"] = "Pointer";
            $where["user"]["className"] = "_User";
            $where["user"]["objectId"] = $this->user_object_id;
            $where["updatedAt"] = array();
            $where["updatedAt"]["$gt"] = array();
            $where["updatedAt"]["$gt"]["__type"] = "Date";
            $where["updatedAt"]["$gt"]["iso"] = "1970-01-01T00:00:00.000Z";

            $data = array();
            $data["include"] = "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise";
            $data["limit"] = "200";
            $data["where"] = json_encode($where);

            $res = $this->webRequest("POST", "/parse/classes/ParseWorkout", $data);
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getWorkoutsPerWeek()
    {
        try {
            $where = array();
            $where["user"] = array();
            $where["user"]["__type"] = "Pointer";
            $where["user"]["className"] = "_User";
            $where["user"]["objectId"] = $this->user_object_id;

            $data = array();
            $data["_method"] = "GET";
            $data["where"] = json_encode($where);

            $res = $this->webRequest("POST", "/parse/classes/ParseWidget", $data);
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function GetWorkOutsCount()
    {
        try {
            $where = array(
                "user" => array(
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => $this->user_object_id
                ),
                "updatedAt" => array(
                    "$gt" => array(
                        "__type" => "Date",
                        "iso" => "1970-01-01T00:00:00.000Z"
                    )
                )
            );

            $data = array(
                "include" => "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise",
                "limit" => "0",
                "count" => "1",
                "where" => json_encode($where)
            );

            $data["_method"] = "GET";

            $res = $this->WebRequest("POST", "/parse/classes/ParseWorkout", $data);

            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function GetJSON()
    {
        return json_decode($this->response, true);
    }

    public function GetText()
    {
        return $this->response;
    }

    public function SaveResponseToFile($filename)
    {
        try {
            $save_file = fopen($filename, "w");
            fwrite($save_file, $this->response);
            fclose($save_file);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}