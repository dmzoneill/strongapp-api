## Get total workouts

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2cxxxxxxxef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1GNxxxxxxT0XtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-xxxxx-4df5-xxxx-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

data = '{"include":"parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise","limit":"0","count":"1","where":"{\\user\\:{\\__type\\:\\Pointer\\,\\className\\:\\_User\\,\\objectId\\:\\NMmP317FZG\\},\\updatedAt\\:{\\$gt\\:{\\__type\\:\\Date\\,\\iso\\:\\1970-01-01T00:00:00.000Z\\}}}","_method":"GET"}'

response = requests.post('https://ws13.strongapp.co/parse/classes/ParseWorkout', headers=headers, data=data)
```

### Reponse
```
{
	"results": [],
	"count": 183
}
```