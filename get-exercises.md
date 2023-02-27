## Get exercises

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2cexxxxxx465e0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1GNxxxxxxxrPT0XtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-ca92-xxxx-xxxx-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

data = '{"limit":"1000","where":"{\\isGlobal\\:true,\\user\\:{\\$exists\\:false}}","_method":"GET"}'

response = requests.post('https://ws13.strongapp.co/parse/classes/ParseExercise', headers=headers, data=data)
```

### response
```
{
	"results": [{
		"name": "Side Bend (Band)",
		"createdAt": "2018-05-02T08:34:36.034Z",
		"updatedAt": "2018-06-20T06:29:28.172Z",
		"exerciseType": 5,
		"bodyParts": 1,
		"uniqueId": "3b8b97d5-57eb-427c-85b1-4e9222593a97",
		"instructions": "Secure band to an elevated object so that it is taunt at shoulder level and hold the handle in the left hand.||Bend the torso and contract the obliques while exhaling.||Return slowly to the starting position while inhaling.||Repeat for reps.",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "1vZhW35Igd"
	}, {
		"name": "Toes To Bar",
		"createdAt": "2018-04-27T09:35:34.207Z",
		"updatedAt": "2018-10-15T06:17:06.884Z",
		"exerciseType": 5,
		"bodyParts": 1,
		"uniqueId": "e0b1aa09-f4c5-4ead-95de-03a2f7530c87",
		"isHidden": false,
		"instructions": "NOTE: You can perform this with your knees bent or your legs straight, but use the latter for better core activation.||Grasp the pull up bar with a shoulder-width grip. You can perform this movement with your palms facing away from you or towards you. This is your starting position.||From the hanging position, bring both of your feet up so your toes make contact with the bar.||Lower yourself down to the starting position.||Repeat for reps.",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "ZVwtvLdWzZ"
	},
	.......
	]
}
```