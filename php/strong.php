<?php

declare(strict_types=1);

namespace Dmzoneill\StrongApp;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

final class Strong
{
    private string $endpoint;
    private string $strong_username;
    private string $strong_password;
    private string $strong_device_uuid;
    private string $strong_application_id;
    private bool $debug;

    /** @var array<string, string> */
    private array $headers;
    private string $response = '';
    private ?string $session_token = null;
    private ?string $user_object_id = null;

    public function __construct()
    {
        $this->endpoint = 'https://ws13.strongapp.co';
        $this->strong_username = (string) getenv('strong_username');
        $this->strong_password = (string) getenv('strong_password');
        $this->strong_device_uuid = (string) getenv('strong_device_uuid');
        $this->strong_application_id = (string) getenv('strong_application_id');
        $this->debug = false;

        if ($this->strong_username === '') {
            echo 'Missing: strong_username';
            exit(1);
        }

        if ($this->strong_password === '') {
            echo 'Missing: strong_password';
            exit(2);
        }

        if ($this->strong_device_uuid === '') {
            echo 'Missing: strong_device_uuid';
            exit(3);
        }

        if ($this->strong_application_id === '') {
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

    /**
     * @param array<string, mixed>|null $data
     */
    public function webRequest(string $method, string $query, ?array $data = null): bool
    {
        try {
            $client = new Client(['base_uri' => $this->endpoint]);
            $options = [
                'headers' => $this->headers,
                'http_errors' => false
            ];

            if ($method === 'POST') {
                $options['json'] = $data;
                $result = $client->post($query, $options);
            } else {
                $result = $client->get($query, $options);
            }

            $this->response = (string) $result->getBody();
            $statusCode = $result->getStatusCode();

            if ($this->debug === true) {
                error_log((string) $statusCode);
                error_log($this->response);
            }

            return $statusCode >= 200 && $statusCode < 300;
        } catch (GuzzleException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function login(): bool
    {
        try {
            $data = array();
            $data["password"] = $this->strong_password;
            $data["username"] = $this->strong_username;
            $data["_method"] = "GET";

            $res = $this->webRequest("POST", "/parse/login", $data);

            $js = $this->getJson();
            $this->session_token = null;
            if (isset($js["sessionToken"]) === true && is_string($js["sessionToken"]) === true) {
                $this->session_token = $js["sessionToken"];
            }
            $this->user_object_id = null;
            if (isset($js["objectId"]) === true && is_string($js["objectId"]) === true) {
                $this->user_object_id = $js["objectId"];
            }

            $this->headers['x-parse-session-token'] = (string) $this->session_token;
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUser(): bool
    {
        try {
            $res = $this->webRequest("GET", "/parse/classes/_User/" . (string) $this->user_object_id);
            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getWorkouts(): bool
    {
        try {
            $where = array();
            $where["user"] = array();
            $where["user"]["__type"] = "Pointer";
            $where["user"]["className"] = "_User";
            $where["user"]["objectId"] = $this->user_object_id;
            $where["updatedAt"] = array();
            $where["updatedAt"]['$gt'] = array();
            $where["updatedAt"]['$gt']["__type"] = "Date";
            $where["updatedAt"]['$gt']["iso"] = "1970-01-01T00:00:00.000Z";

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

    public function getWorkoutsPerWeek(): bool
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

    public function getWorkoutsCount(): bool
    {
        try {
            $where = array(
                "user" => array(
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => $this->user_object_id
                ),
                "updatedAt" => array(
                    '$gt' => array(
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

            $res = $this->webRequest("POST", "/parse/classes/ParseWorkout", $data);

            return $res;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * @return array<array-key, mixed>
     */
    public function getJson(): array
    {
        /** @var array<array-key, mixed>|scalar|null $decoded */
        $decoded = json_decode($this->response, true);
        return is_array($decoded) === true ? $decoded : [];
    }

    public function getText(): string
    {
        return $this->response;
    }

    public function saveResponseToFile(string $filename): bool
    {
        try {
            $save_file = fopen($filename, "w");
            if ($save_file === false) {
                return false;
            }
            fwrite($save_file, $this->response);
            fclose($save_file);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
