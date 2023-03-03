
## Parse Widget
### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2cexxxxxxxxx5e0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1GxxxxxxxT0XtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-ca92-xxxx-xxxx-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

data = '{"where":"{\\user\\:{\\__type\\:\\Pointer\\,\\className\\:\\_User\\,\\objectId\\:\\NMmPxxxxxFZG\\}}","_method":"GET"}'

response = requests.post('https://ws13.strongapp.co/parse/classes/ParseWidget', headers=headers, data=data)
```

### Response
```
{
	"results": [{
		"index": 0,
		"type": "WORKOUTS_PER_WEEK",
		"user": {
			"__type": "Pointer",
			"className": "_User",
			"objectId": "NMmxxxxx7FZG"
		},
		"parameters": "{}",
		"uniqueId": "60318bb8-2dd5-xxxx-xxxx-b95273c5d392",
		"isHidden": false,
		"createdAt": "2022-03-16T10:43:35.270Z",
		"updatedAt": "2022-03-16T10:43:35.270Z",
		"objectId": "8wxxxx44d0"
	}]
}
```
