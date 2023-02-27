## Update user

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2ce38exxxxe0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1GNBFxxxxtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-ca92-4df5-80b4-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

json_data = {
    'lastVersion': '2.7.9 (257)',
    'persistentNotes': {},
    'hasPurchasedUnlockStrong': False,
    'ACL': {
        'NMmxxxxFZG': {
            'read': True,
            'write': True,
        },
        '*': {
            'read': True,
        },
    },
    'workoutsPerWeekGoal': 0,
    'distanceUnitValue': 14,
    'firstWeekday': 2,
    'hasPurchasedComboPack': False,
    'exerciseWeightUnitValues': {},
    'exerciseBars': {
        'pTV7Q84sJW': 'our_little_un-deletable_no_weight_bar',
        'EWm19pmMjX': 'our_little_un-deletable_no_weight_bar',
        'uodPjbv9AD': 'our_little_un-deletable_no_weight_bar',
....
        'fXW7WHcUn8': 'our_little_un-deletable_no_weight_bar',
        'qg1ric4s1t': 'our_little_un-deletable_no_weight_bar',
        '8UKC0MjWJ0': 'our_little_un-deletable_no_weight_bar',
    },
    'timerDuration': 120,
    'lengthUnitValue': 9,
    'build': 'a257',
    'proExpirationDate': {
        '__type': 'Date',
        'iso': '2023-04-17T14:02:11.173Z',
    },
    'lastOSVersion': 'Android 13',
    'hasPurchasedPowerPack': False,
    'hasPurchasedPROForever': False,
    'uniqueId': '44fbba75-8d0f-xxx-xxx-1f0b33b20bd6',
    'weightUnitValue': 14,
    'username': 'bitwiseshift',
    'goals': '{}',
    'objectId': 'NMmPxxxFZG',
}

response = requests.put('https://ws13.strongapp.co/parse/classes/_User/NMmPxxxFZG', headers=headers, json=json_data)
```

### response
```
{
	"updatedAt": "2023-02-26T22:16:53.074Z"
}
```