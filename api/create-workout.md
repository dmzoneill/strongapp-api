## Create workout

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2cxxxxxxxxe0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1GNxxxxxxxxT0XtvRKMajvuYLLmTW',
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
    'bodyWeightKilograms': 0,
    'notes': '',
    'build': 'a257',
    'name': 'Delete this',
    'isGlobal': False,
    'parseSetGroups': [
        {
            '__type': 'Pointer',
            'className': 'ParseSetGroup',
            'objectId': '1zZDNFzDnD',
        },
        {
            '__type': 'Pointer',
            'className': 'ParseSetGroup',
            'objectId': 'Rg0QpEiinw',
        },
    ],
    'parseRoutine': {
        '__type': 'Pointer',
        'className': 'ParseRoutine',
        'objectId': '9OqRnExHuJ',
    },
    'user': {
        '__type': 'Pointer',
        'className': '_User',
        'objectId': 'NMmP317FZG',
    },
    'uniqueId': '9d7f1579-a591-46b8-be65-58c1daa76fdd',
    'isHidden': 0,
}

response = requests.post('https://ws13.strongapp.co/parse/classes/ParseWorkout', headers=headers, json=json_data)

```

### Reponse
```
{
	"objectId": "MjzqRbuLH5",
	"createdAt": "2023-02-27T17:26:20.536Z"
}
```