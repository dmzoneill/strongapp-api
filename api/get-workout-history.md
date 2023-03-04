
## Parse workouts

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2ce38xxxxxx0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1GNxxxxxT0XtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-ca92-xxxx-xxxx-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

data = '{"include":"parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise","limit":"200","where":"{\\user\\:{\\__type\\:\\Pointer\\,\\className\\:\\_User\\,\\objectId\\:\\NMmxxxxFZG\\},\\updatedAt\\:{\\$gt\\:{\\__type\\:\\Date\\,\\iso\\:\\1970-01-01T00:00:00.000Z\\}}}","_method":"GET"}'

response = requests.post('https://ws13.strongapp.co/parse/classes/ParseWorkout', headers=headers, data=data)
```
### response
```
{
	"results": [{
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a252",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.996Z",
				"updatedAt": "2017-12-15T07:31:15.989Z",
				"name": "Squat (Bodyweight)",
				"exerciseType": 3,
				"isGlobal": true,
				"bodyParts": 16,
				"uniqueId": "752349B3-8813-48D2-B315-6EF4D9B4F3CB",
				"instructions": "Standing with feed shoulder width apart, sit back with the hips while flexing hips and keeping knees pointed slightly outward.||Continue down to the bottom position, while making sure you are maintaining a straight back and keeping weight evenly distributed throughout the foot.||Exhale as you push upward from the bottom position, pushing the knees outward.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "bsnljXHBgr",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "c59b450d-2b52-450a-88e3-730eebad5172",
			"isHidden": 0,
			"createdAt": "2022-03-18T18:32:37.810Z",
			"updatedAt": "2022-03-18T18:32:37.810Z",
			"objectId": "MWanG144U7",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a252",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.977Z",
				"updatedAt": "2017-12-15T07:28:18.457Z",
				"name": "Push Up",
				"exerciseType": 3,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 8,
				"uniqueId": "F0F86563-85FC-49A8-9EC7-F95DDD318AB4",
				"instructions": "Lie prone on floor with hands slightly wider than shoulder width.||Raise body up off floor by extending arms with body straight.||Keeping body straight, lower body to floor by bending arms. Push body up until arms are extended.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "LDa0I05c38",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "918bde2a-c1cc-48c7-b596-d79191260a8c",
			"isHidden": 0,
			"createdAt": "2022-03-18T18:32:37.810Z",
			"updatedAt": "2022-03-18T18:32:37.810Z",
			"objectId": "nfx0ENb3wI",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"seconds": 15,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 6,
				"isChecked": true
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Elliptical Machine",
				"createdAt": "2018-04-27T07:05:25.460Z",
				"updatedAt": "2018-09-27T09:12:52.100Z",
				"uniqueId": "4464e3b1-c412-4047-a5b9-8cdb7c8fe7b3",
				"exerciseType": 6,
				"bodyParts": 512,
				"isHidden": false,
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "SuGuVl8OYz",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "63fe9351-e0ea-454b-921b-bc434e5d5b0c",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "EYPmI4MO2H",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 59,
				"isChecked": true,
				"expectedKilograms": 64
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 59,
				"isChecked": true,
				"expectedKilograms": 64
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": true,
				"expectedKilograms": 59
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": true,
				"expectedKilograms": 59
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": true,
				"expectedKilograms": 54
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": true,
				"expectedKilograms": 54
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.882Z",
				"updatedAt": "2018-09-21T09:45:38.674Z",
				"name": "Seated Row (Cable)",
				"exerciseType": 2,
				"isGlobal": true,
				"bodyParts": 4,
				"uniqueId": "143F848F-3A01-40BD-88D1-613C3A88309E",
				"instructions": "Grip the handle attachment with both hands and sit with chest upright and back straight.||With shoulders retracted, pull the handle towards the mid torso.||Squeeze the back muscles as the handle approaches the torso and hold before returning to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "hnhGpeIPU5",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "c430fce5-0d11-4c5b-9bf4-816bae6f4faa",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "z0dCeeaGiw",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 20,
				"isChecked": true,
				"expectedKilograms": 20
			}, {
				"isPersonalRecord": false,
				"reps": 4,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 35,
				"isChecked": true,
				"expectedKilograms": 37.5
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"personalRecords": "MAX_VOLUME",
				"exerciseTypeValue": 1,
				"kilograms": 35,
				"isChecked": true,
				"expectedKilograms": 35
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 35,
				"isChecked": true,
				"expectedKilograms": 32.5
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 32.5,
				"isChecked": true,
				"expectedKilograms": 30
			}, {
				"isPersonalRecord": false,
				"reps": 4,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 32.5,
				"isChecked": true,
				"expectedKilograms": 30
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Pullover (Dumbbell)",
				"createdAt": "2018-01-22T05:37:53.811Z",
				"updatedAt": "2018-09-20T08:27:09.667Z",
				"uniqueId": "1a9537c6-f56a-4d4e-a491-c5c172cfa5ed",
				"exerciseType": 1,
				"bodyParts": 8,
				"instructions": "Placing the upper back against the bench with a dumbbell placed on the chest.||Grasp the dumbbell with both hands pressing against one end and hold straight over the chest.||Lower the dumbbell in an arc above the head until you feel a stretch in the chest muscles.||Return to starting position while breathing out.||Repeat for reps.",
				"isHidden": false,
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "CnG27VmK9U",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "9071c2ee-5199-474a-9bc3-522b5fcc4a12",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "OZ604UX2m1",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 36,
				"isChecked": true,
				"expectedKilograms": 50
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 50
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 50
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 50
			}, {
				"isPersonalRecord": false,
				"reps": 7,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 50
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Hammer Curl (Cable)",
				"createdAt": "2018-01-22T05:34:01.598Z",
				"updatedAt": "2018-09-27T07:19:48.381Z",
				"uniqueId": "4a304d9a-9a7a-440f-bb9a-9fd5cde6b590",
				"exerciseType": 2,
				"bodyParts": 2,
				"instructions": "Stand facing machine with elbows touching the side of the torso. Grasp the handles with a palm in grip.||Using biceps, pull forearms and hands upward until fully contracted.||Squeeze biceps and slowly lower back to the starting position.||Repeat for reps.",
				"isHidden": false,
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "93H8TNQg4C",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "185a28d7-0da9-4f4b-b1c2-9e73e36dc6e5",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "pbefcWbY2A",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 68,
				"isChecked": true,
				"expectedKilograms": 68
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 68,
				"isChecked": true,
				"expectedKilograms": 64
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 64,
				"isChecked": true,
				"expectedKilograms": 64
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 4,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 59,
				"isChecked": true,
				"expectedKilograms": 59
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 54,
				"isChecked": true,
				"expectedKilograms": 59
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.859Z",
				"updatedAt": "2018-09-21T09:54:25.578Z",
				"exerciseType": 2,
				"name": "Lat Pulldown (Cable)",
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 4,
				"uniqueId": "B92AA3DD-98E1-4E99-A229-434BE54C1AE5",
				"instructions": "Sit on the pull down machine with knee pads adjusted to provide support, preventing your body from being pulled out of position.||Grip the pull down bar with a pronated grip slightly outside of shoulder width.||As you exhale, pull the bar down until it touches the upper chest.||Pause and squeeze the back muscles.||Slowly bring the bar back to the starting position with the lats fully stretched.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Da5swzH5xc",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "90d422c8-71fb-42ea-9cc8-fd87134240b6",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.810Z",
			"updatedAt": "2023-02-26T16:22:45.810Z",
			"objectId": "zkqvpGvyyK",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 60
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 60
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 60
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": true,
				"expectedKilograms": 55
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 45,
				"isChecked": true,
				"expectedKilograms": 50
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Incline Row (Dumbbell)",
				"createdAt": "2018-04-27T07:06:35.138Z",
				"updatedAt": "2018-10-15T06:32:22.125Z",
				"uniqueId": "ed06489a-f597-4cc1-81d0-eef7804f1fc5",
				"exerciseType": 1,
				"bodyParts": 4,
				"isHidden": false,
				"instructions": "NOTE: This exercise can be done one arm at a time or two arms at the same time.||Adjust the bench so that it's at a 30 to 45 degree angle and lean into it.||Hold a dumbbell on each hand and let your arms hang down. This is your starting position.||Row the dumbbells up to your side by retracting your shoulder blades and pulling at the elbows.||Pause at the top of the exercise, and then return to the starting position.||Repeat for reps.",
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "uAFBYeQy5e",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "9810fd56-6066-47de-8dea-ba73bdafd2a6",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.810Z",
			"updatedAt": "2023-02-26T16:22:45.810Z",
			"objectId": "8xT6nYc44P",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 16,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"kilograms": 0,
				"isChecked": true,
				"expectedKilograms": 0
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"kilograms": 15,
				"isChecked": true,
				"expectedKilograms": 0
			}, {
				"isPersonalRecord": false,
				"reps": 10,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"kilograms": 0,
				"isChecked": true,
				"expectedKilograms": 0
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.953Z",
				"updatedAt": "2017-12-15T07:15:58.468Z",
				"exerciseType": 3,
				"name": "Decline Crunch",
				"isGlobal": true,
				"bodyParts": 1,
				"uniqueId": "B17772DE-F3EC-471B-8485-08ECFFE4A595",
				"instructions": "Lie on a decline bench, securing legs on the end of the bench. Place fingers at the side of the head with shoulders lifted slightly above the bench.||Contract the abdominal muscles and raise the shoulders off the bench about 4 to 6 inches.||Hold the position at the top and slowly lower back to the starting position while breathing out.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "kHu0Bgp515",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "c389e007-71a3-4ade-b8ec-419c70a052c7",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "UPVJRQ2234",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 6,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 4,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"isChecked": true
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.958Z",
				"updatedAt": "2017-12-15T07:17:35.270Z",
				"exerciseType": 3,
				"name": "Hanging Leg Raise",
				"isGlobal": true,
				"bodyParts": 1,
				"uniqueId": "8EBA64E0-5E50-4F85-AD66-7FAEB87E5BB0",
				"instructions": "Hang from a bar with arms extended and legs straight down.||Contract abs and raise legs until torso creates a 90 degree angle with the thighs.||Hold position while keeping core tight, then return to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "6NQgjnb0vI",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "fb1a3c33-26f0-4a8b-bee4-9d960690227e",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "aUPEOMmu4T",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 42.5,
				"isChecked": true
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 42.5,
				"isChecked": true,
				"expectedKilograms": 42.5
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": true,
				"expectedKilograms": 42.5
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": true,
				"expectedKilograms": 42.5
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": true,
				"expectedKilograms": 40
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": true,
				"expectedKilograms": 40
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": true,
				"expectedKilograms": 40
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": true,
				"expectedKilograms": 40
			}],
			"completionDate": {
				"__type": "Date",
				"iso": "2023-02-26T11:25:40.845Z"
			},
			"startDate": {
				"__type": "Date",
				"iso": "2023-02-26T09:13:02.080Z"
			},
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Bent Over One Arm Row (Dumbbell)",
				"createdAt": "2018-04-27T07:01:46.786Z",
				"updatedAt": "2018-10-15T05:50:45.983Z",
				"uniqueId": "860bcb49-7f45-4212-9441-e9497e1220fc",
				"exerciseType": 1,
				"bodyParts": 4,
				"isHidden": false,
				"instructions": "Kneel over side of bench by placing knee and hand of supporting arm on bench.||Grab the dumbbell from the floor while keeping a straight back.||Flexing the core, keep head in neutral position and pull the dumbbell towards your stomach.||Squeeze your back as you breath out at the top position.||Lower the barbell to the starting position.||Repeat for reps.",
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Rkvrk4wzTd",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "0b2d97ee-8bdd-4914-a869-5b9e3209ede1",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "4hZVuPuoIg",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"completionDate": {
			"__type": "Date",
			"iso": "2023-02-26T11:25:40.845Z"
		},
		"startDate": {
			"__type": "Date",
			"iso": "2023-02-26T09:13:02.080Z"
		},
		"notes": "",
		"googleFitUUID": "f97ef74a-937f-4e4e-9ded-769bff1b3204",
		"isHidden": 0,
		"bodyWeightKilograms": 0,
		"build": "a257",
		"parseOriginRoutine": {
			"build": "a257",
			"isArchived": 0,
			"isGlobal": 0,
			"index": 5,
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"isHidden": 0,
			"createdAt": "2022-11-13T15:14:09.649Z",
			"updatedAt": "2023-02-26T16:22:45.827Z",
			"objectId": "1txowNsTAw",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"name": "1. Shoulders/Lats",
		"isGlobal": false,
		"timezoneId": "Europe/Dublin",
		"user": {
			"__type": "Pointer",
			"className": "_User",
			"objectId": "XXXXXXXX"
		},
		"uniqueId": "3cc44fb7-4d22-46ec-8bfa-dc960a7e3712",
		"createdAt": "2023-02-26T16:22:46.401Z",
		"updatedAt": "2023-02-26T16:22:46.401Z",
		"objectId": "X8mLZvHkcE"
	}, {
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"seconds": 15,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 6,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Elliptical Machine",
				"createdAt": "2018-04-27T07:05:25.460Z",
				"updatedAt": "2018-09-27T09:12:52.100Z",
				"uniqueId": "4464e3b1-c412-4047-a5b9-8cdb7c8fe7b3",
				"exerciseType": 6,
				"bodyParts": 512,
				"isHidden": false,
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "SuGuVl8OYz",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "4ea52fc2-ce64-4bc5-81c0-50e858b4622b",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.810Z",
			"updatedAt": "2023-02-26T16:22:45.810Z",
			"objectId": "ZmacnvD4fu",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 59,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 59,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 91,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.882Z",
				"updatedAt": "2018-09-21T09:45:38.674Z",
				"name": "Seated Row (Cable)",
				"exerciseType": 2,
				"isGlobal": true,
				"bodyParts": 4,
				"uniqueId": "143F848F-3A01-40BD-88D1-613C3A88309E",
				"instructions": "Grip the handle attachment with both hands and sit with chest upright and back straight.||With shoulders retracted, pull the handle towards the mid torso.||Squeeze the back muscles as the handle approaches the torso and hold before returning to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "hnhGpeIPU5",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "1d0e5861-b4b7-4cfa-abc0-b33ff1ed9a80",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "was9Orupvj",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 20,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 4,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 35,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 35,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 35,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 32.5,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 4,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 32.5,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Pullover (Dumbbell)",
				"createdAt": "2018-01-22T05:37:53.811Z",
				"updatedAt": "2018-09-20T08:27:09.667Z",
				"uniqueId": "1a9537c6-f56a-4d4e-a491-c5c172cfa5ed",
				"exerciseType": 1,
				"bodyParts": 8,
				"instructions": "Placing the upper back against the bench with a dumbbell placed on the chest.||Grasp the dumbbell with both hands pressing against one end and hold straight over the chest.||Lower the dumbbell in an arc above the head until you feel a stretch in the chest muscles.||Return to starting position while breathing out.||Repeat for reps.",
				"isHidden": false,
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "CnG27VmK9U",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "c751ac6b-53c0-4ff5-8a93-795eed1e024c",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "YD1knBax4U",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 36,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 7,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 50,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Hammer Curl (Cable)",
				"createdAt": "2018-01-22T05:34:01.598Z",
				"updatedAt": "2018-09-27T07:19:48.381Z",
				"uniqueId": "4a304d9a-9a7a-440f-bb9a-9fd5cde6b590",
				"exerciseType": 2,
				"bodyParts": 2,
				"instructions": "Stand facing machine with elbows touching the side of the torso. Grasp the handles with a palm in grip.||Using biceps, pull forearms and hands upward until fully contracted.||Squeeze biceps and slowly lower back to the starting position.||Repeat for reps.",
				"isHidden": false,
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "93H8TNQg4C",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "00271a6f-e8d5-4fb4-a6ec-dce3c0fddb6b",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "WD1CB8tBzY",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 68,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 68,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 64,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 4,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 59,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 2,
				"kilograms": 54,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.859Z",
				"updatedAt": "2018-09-21T09:54:25.578Z",
				"exerciseType": 2,
				"name": "Lat Pulldown (Cable)",
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 4,
				"uniqueId": "B92AA3DD-98E1-4E99-A229-434BE54C1AE5",
				"instructions": "Sit on the pull down machine with knee pads adjusted to provide support, preventing your body from being pulled out of position.||Grip the pull down bar with a pronated grip slightly outside of shoulder width.||As you exhale, pull the bar down until it touches the upper chest.||Pause and squeeze the back muscles.||Slowly bring the bar back to the starting position with the lats fully stretched.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Da5swzH5xc",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "c07ca347-f7be-4d57-af88-ce71ac405a2d",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "Z4QrvAx0uE",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 50,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 45,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Incline Row (Dumbbell)",
				"createdAt": "2018-04-27T07:06:35.138Z",
				"updatedAt": "2018-10-15T06:32:22.125Z",
				"uniqueId": "ed06489a-f597-4cc1-81d0-eef7804f1fc5",
				"exerciseType": 1,
				"bodyParts": 4,
				"isHidden": false,
				"instructions": "NOTE: This exercise can be done one arm at a time or two arms at the same time.||Adjust the bench so that it's at a 30 to 45 degree angle and lean into it.||Hold a dumbbell on each hand and let your arms hang down. This is your starting position.||Row the dumbbells up to your side by retracting your shoulder blades and pulling at the elbows.||Pause at the top of the exercise, and then return to the starting position.||Repeat for reps.",
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "uAFBYeQy5e",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "034d7b41-01f7-4caa-93e6-d4bc36344a32",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.810Z",
			"updatedAt": "2023-02-26T16:22:45.810Z",
			"objectId": "PPyoP9nwf3",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 16,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"kilograms": 0,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"kilograms": 15,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 10,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"kilograms": 0,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.953Z",
				"updatedAt": "2017-12-15T07:15:58.468Z",
				"exerciseType": 3,
				"name": "Decline Crunch",
				"isGlobal": true,
				"bodyParts": 1,
				"uniqueId": "B17772DE-F3EC-471B-8485-08ECFFE4A595",
				"instructions": "Lie on a decline bench, securing legs on the end of the bench. Place fingers at the side of the head with shoulders lifted slightly above the bench.||Contract the abdominal muscles and raise the shoulders off the bench about 4 to 6 inches.||Hold the position at the top and slowly lower back to the starting position while breathing out.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "kHu0Bgp515",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "94a635c1-84ce-43d4-8002-0669f0638309",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "epdldPwD8h",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 6,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 4,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 3,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.958Z",
				"updatedAt": "2017-12-15T07:17:35.270Z",
				"exerciseType": 3,
				"name": "Hanging Leg Raise",
				"isGlobal": true,
				"bodyParts": 1,
				"uniqueId": "8EBA64E0-5E50-4F85-AD66-7FAEB87E5BB0",
				"instructions": "Hang from a bar with arms extended and legs straight down.||Contract abs and raise legs until torso creates a 90 degree angle with the thighs.||Hold position while keeping core tight, then return to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "6NQgjnb0vI",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "373d0660-415a-43f9-882b-4980cf4fcb72",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "fqFPmNu0nx",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 42.5,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 42.5,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": false
			}, {
				"isPersonalRecord": false,
				"reps": 8,
				"tagsValue": 0,
				"rpe": 0,
				"exerciseTypeValue": 1,
				"kilograms": 40,
				"isChecked": false
			}],
			"superSetOrder": null,
			"notes": "",
			"build": "a257",
			"parseExercise": {
				"name": "Bent Over One Arm Row (Dumbbell)",
				"createdAt": "2018-04-27T07:01:46.786Z",
				"updatedAt": "2018-10-15T05:50:45.983Z",
				"uniqueId": "860bcb49-7f45-4212-9441-e9497e1220fc",
				"exerciseType": 1,
				"bodyParts": 4,
				"isHidden": false,
				"instructions": "Kneel over side of bench by placing knee and hand of supporting arm on bench.||Grab the dumbbell from the floor while keeping a straight back.||Flexing the core, keep head in neutral position and pull the dumbbell towards your stomach.||Squeeze your back as you breath out at the top position.||Lower the barbell to the starting position.||Repeat for reps.",
				"isGlobal": true,
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Rkvrk4wzTd",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"uniqueId": "5f22f5a7-91c4-4449-b6d6-4e8ad9227c49",
			"isHidden": 0,
			"createdAt": "2023-02-26T16:22:45.809Z",
			"updatedAt": "2023-02-26T16:22:45.809Z",
			"objectId": "Cq79ffqWE8",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"bodyWeightKilograms": 0,
		"notes": "",
		"build": "a257",
		"name": "1. Shoulders/Lats",
		"isGlobal": false,
		"parseRoutine": {
			"build": "a257",
			"isArchived": 0,
			"isGlobal": 0,
			"index": 5,
			"user": {
				"__type": "Pointer",
				"className": "_User",
				"objectId": "XXXXXXXX"
			},
			"isHidden": 0,
			"createdAt": "2022-11-13T15:14:09.649Z",
			"updatedAt": "2023-02-26T16:22:45.827Z",
			"objectId": "1txowNsTAw",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"user": {
			"__type": "Pointer",
			"className": "_User",
			"objectId": "XXXXXXXX"
		},
		"uniqueId": "597efd79-0758-4a2a-8350-b6fcbe6d112a",
		"isHidden": 0,
		"createdAt": "2022-11-13T15:14:09.797Z",
		"updatedAt": "2023-02-26T16:22:46.404Z",
		"objectId": "3rYbX4nogp"
	},
    .............
    ,
    ................
    ,
    ...........]
}
```
