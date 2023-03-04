## log session

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2xxxxxxxxxe0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iUxxxxxxxxxXtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-ca92-xxxx-xxxx-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

json_data = {
    'notes': '',
    'isHidden': 0,
    'bodyWeightKilograms': 0,
    'build': 'a257',
    'parseOriginRoutine': {
        '__type': 'Pointer',
        'className': 'ParseRoutine',
        'objectId': 'd7wTyA1uX0',
    },
    'name': '5. Hamstrings/Glutes',
    'isGlobal': False,
    'parseSetGroups': [
        {
            '__type': 'Pointer',
            'className': 'ParseSetGroup',
            'objectId': 'wYW4GH5uUG',
        },
    ],
    'timezoneId': 'Europe/Dublin',
    'completionDate': {
        '__type': 'Date',
        'iso': '2023-02-27T17:54:03.409Z',
    },
    'user': {
        '__type': 'Pointer',
        'className': '_User',
        'objectId': 'XXXXXXXX',
    },
    'uniqueId': '022fca24-9fde-4a00-8ee7-7fff510cc5ad',
    'startDate': {
        '__type': 'Date',
        'iso': '2023-02-27T17:51:08.931Z',
    },
}

response = requests.post('https://ws13.strongapp.co/parse/classes/ParseWorkout', headers=headers, json=json_data)

```

### Reponse
```
{
	"objectId": "tRIg9CdQ3B",
	"createdAt": "2023-02-27T17:54:12.144Z"
}
```