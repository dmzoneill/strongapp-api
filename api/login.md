## login

### request

```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-application-id': 'QbtVgYzi9iU1GNBFaGs6rPT0XtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-ca92-4df5-80b4-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

data = '{"password":".....,"username":"bitwiseshift","_method":"GET"} --compressed'

response = requests.post('https://ws13.strongapp.co/parse/login', headers=headers, data=data)
```

### response
```
{
	"objectId": "NMmxxxxFZG",
	"lastVersion": "2.7.9 (257)",
	"hasPurchasedUnlockStrong": false,
	"distanceUnitValue": 14,
	"firstWeekday": 2,
	"hasPurchasedComboPack": false,
	"timerDuration": 120,
	"lengthUnitValue": 9,
	"build": "a257",
	"lastOSVersion": "Android 12",
	"hasPurchasedPowerPack": false,
	"email": "dmz.oneill@gmail.com",
	"uniqueId": "44fbba75-8d0f-xxx-xxxx-1f0b33b20bd6",
	"username": "bitwiseshift",
	"weightUnitValue": 14,
	"createdAt": "2022-03-16T08:46:26.354Z",
	"updatedAt": "2023-02-26T16:22:45.823Z",
	"exerciseBars": {
		"pTV7Q84sJW": "our_little_un-deletable_no_weight_bar",
		"EWm19pmMjX": "our_little_un-deletable_no_weight_bar",
		"uodPjbv9AD": "our_little_un-deletable_no_weight_bar",
...
		"qg1ric4s1t": "our_little_un-deletable_no_weight_bar",
		"8UKC0MjWJ0": "our_little_un-deletable_no_weight_bar"
	},
	"exerciseWeightUnitValues": {},
	"goals": "{}",
	"hasPurchasedPROForever": false,
	"image": {
		"__type": "File",
		"name": "a4b91159cb04fd89d698b634c0d578f8_avatar.jpg",
		"url": "https://strong-prod.s3.amazonaws.com/a4b91159cb04fd89d698b634c0d578f8_avatar.jpg"
	},
	"persistentNotes": {},
	"workoutsPerWeekGoal": 0,
	"proExpirationDate": {
		"__type": "Date",
		"iso": "2023-04-17T14:02:11.173Z"
	},
	"name": "",
	"ACL": {
		"NMmPxxxFZG": {
			"read": true,
			"write": true
		},
		"*": {
			"read": true
		}
	},
	"sessionToken": "r:jjjjjjjjjjjjjjjjj"
}
```