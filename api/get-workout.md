## Parse routine

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2ce38xxxe0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1Gxxxxxs6rPT0XtvRKMajvuYLLmTW',
    'x-parse-app-build-version': '257',
    'x-parse-app-display-version': '2.7.9',
    'x-parse-os-version': '13',
    'user-agent': 'Parse Android SDK API Level 33',
    'x-parse-installation-id': '0767c726-ca92-xxxx-xxxx-554119d22e1c',
    'content-type': 'application/json',
    'pragma': 'no-cache',
    'cache-control': 'no-cache',
}

data = '{"include":"parseRoutine,parseSetGroups.parseExercise,parseSetGroups.parseSets","limit":"1000","where":"{\\isGlobal\\:true,\\parseRoutine\\:{\\$exists\\:true},\\user\\:{\\$exists\\:false}}","_method":"GET"}'

response = requests.post('https://ws13.strongapp.co/parse/classes/ParseWorkout', headers=headers, data=data)
```

### response
```
{
	"results": [{
		"isHidden": 0,
		"uniqueId": "840AECEE-767A-41A7-9A11-C581066C34B6",
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"exerciseType": 0,
				"name": "Deadlift (Barbell)",
				"createdAt": "2016-02-19T05:42:34.525Z",
				"updatedAt": "2018-09-21T10:32:32.069Z",
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 4,
				"uniqueId": "B748103D-3014-4CAE-A349-CEC433528C3A",
				"instructions": "Approach the bar so it is positioned across the center of the foot.||Place feet shoulder width apart (note this is for the conventional deadlift) and grip the bar at shoulder width apart.||Lower hips and bend knees to bring shins into the bar. Lift the chest and take a deep breath to brace the core (should be braced the entire movement). Retract shoulder blades to take the slack out of the bar. ||Pull bar upward extending hips and straightening the torso.||Return weight to the floor in a controlled motion by breaking at the hips and bending the legs.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "bHaZQC7kR5",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:07:07.575Z",
			"createdAt": "2017-01-02T11:30:52.396Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "yFkAIwggAR",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
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
			"updatedAt": "2017-12-05T13:07:29.110Z",
			"createdAt": "2017-01-02T11:30:52.397Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "oPuQDSD9jl",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
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
			"updatedAt": "2017-12-05T13:07:43.768Z",
			"createdAt": "2017-01-02T11:30:52.396Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "bEnwPf7XHb",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.496Z",
				"updatedAt": "2018-09-21T09:48:38.345Z",
				"name": "Bicep Curl (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": false,
				"bodyParts": 2,
				"uniqueId": "5819ECDC-A430-47FD-984D-9B221BB337EA",
				"instructions": "Stand while holding the barbell at shoulder width with an underhand grip and elbows touching the side of the torso.||Holding the upper arm stationary, curl barbell up with palm facing forward. Lift the bar towards the shoulder until the bicep is fully contracted. Hold this position for a second and squeeze the bicep.||Lower the bar to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "6uYZdo8BWV",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:07:56.194Z",
			"createdAt": "2017-01-02T11:30:52.397Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "yQLouj6esJ",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"image": null,
		"parseRoutine": {
			"index": 2,
			"isArchived": 0,
			"isHidden": 0,
			"updatedAt": "2017-12-02T11:09:22.293Z",
			"createdAt": "2017-01-02T11:30:52.397Z",
			"isGlobal": 1,
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "FPtdaNfIcK",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"name": "Back and Biceps",
		"updatedAt": "2017-12-05T07:53:07.595Z",
		"createdAt": "2017-01-02T11:30:52.736Z",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "fNM1IX2Rc7"
	}, {
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}],
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.696Z",
				"updatedAt": "2018-09-21T10:33:27.180Z",
				"name": "Squat (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 16,
				"uniqueId": "B2F5A2DE-C684-4E94-A6E5-581E0695FCAC",
				"instructions": "Place the bar between the traps and the upper back, with the hands shoulder width apart.||Place feet shoulder width apart and descend by breaking at the hips and sitting backwards.||Keep the head in a neutral position, back and spine in a straight and neutral position, the core flexed and knees pushed slightly outwards.||Descend to the bottom where thighs are parallel to the floor.||Push through the heel and middle foot to bring yourself back to starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Vwv1kbEexo",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:13:15.228Z",
			"createdAt": "2016-08-06T10:09:21.696Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "kPJTREunRh",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}],
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.479Z",
				"updatedAt": "2018-09-21T10:33:08.206Z",
				"name": "Bench Press (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 8,
				"uniqueId": "CA9EE259-A69F-4839-BBF9-46BA8CF0D7D6",
				"instructions": "Lie flat on the bench holding the barbell with a shoulder width pronated grip.||Retract scapula and have elbows between 45 to 90 degree angle. An advanced tip is to tuck the shoulders down into the sockets and driven back.||Lift bar from the rack and hold above the chest with arms extended.||Breathe in and lower bar to the middle chest.||After pausing at the bottom, push the bar towards the starting position squeezing the chest.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "4xifFGB0Wa",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:13:28.062Z",
			"createdAt": "2016-08-06T10:09:21.695Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "ALRNK8C12V",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"kilograms": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false,
				"exerciseTypeValue": 3
			}, {
				"kilograms": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false,
				"exerciseTypeValue": 3
			}, {
				"kilograms": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false,
				"exerciseTypeValue": 3
			}, {
				"kilograms": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false,
				"exerciseTypeValue": 3
			}, {
				"kilograms": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false,
				"exerciseTypeValue": 3
			}],
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.971Z",
				"updatedAt": "2017-12-15T07:28:01.874Z",
				"name": "Pull Up",
				"exerciseType": 3,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 4,
				"uniqueId": "ADB75E5A-C873-4F57-BDF0-0043710BA90D",
				"instructions": "Hold the pull up bar with a neutral grip with arms fully extended.||Retract scapula and pull upward by bringing chest to the bar.||Pause at the top and squeeze the back before lowering slowly to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "h5Wv2QILsj",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:13:38.563Z",
			"createdAt": "2016-08-06T10:09:21.696Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "Hcz7DhFf79",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"parseRoutine": {
			"index": 1,
			"isHidden": 1,
			"isArchived": 0,
			"updatedAt": "2017-12-02T11:11:18.759Z",
			"createdAt": "2016-08-06T10:09:21.696Z",
			"isGlobal": 1,
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "PYOqZW0kGi",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"isHidden": 0,
		"name": "Strength 101",
		"uniqueId": "C6E357F5-F8EE-4C3C-8EEB-80C1B3EBA5A3",
		"image": null,
		"updatedAt": "2017-12-05T13:10:17.621Z",
		"createdAt": "2016-08-06T10:09:21.917Z",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "ioFyTD5SGA"
	}, {
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}],
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
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:13:50.993Z",
			"createdAt": "2016-08-06T10:02:23.786Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "ksC4WoGGYZ",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 20,
				"isPersonalRecord": false
			}],
			"parseExercise": {
				"updatedAt": "2017-12-15T07:15:33.936Z",
				"name": "Crunch",
				"exerciseType": 3,
				"createdAt": "2016-02-19T05:42:34.948Z",
				"isGlobal": true,
				"bodyParts": 1,
				"uniqueId": "2DC47F38-396C-492A-94E2-F4AA9D012308",
				"instructions": "Lie flat on a mat with knees bent at a 90 degree angle. Place fingers at the side of the head with shoulders lifted slightly above the floor.||Contract the abdominal muscles and raise the shoulders off the floor about 4 to 6 inches.||Hold the position at the top and slowly lower back to the starting position while breathing out.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "SnsuHH0yLm",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:14:02.364Z",
			"createdAt": "2016-08-06T10:02:23.787Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "NKZQjyWn7p",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 15,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 15,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 15,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 15,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 3,
				"tagsValue": 0,
				"reps": 15,
				"isPersonalRecord": false
			}],
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
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:14:15.524Z",
			"createdAt": "2016-08-06T10:02:23.786Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "89WgE3nB2i",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"parseRoutine": {
			"index": 1,
			"isHidden": 1,
			"isArchived": 0,
			"updatedAt": "2017-12-02T11:11:31.895Z",
			"createdAt": "2016-08-06T10:02:23.786Z",
			"isGlobal": 1,
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "PhsojHGTWO",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"isHidden": 0,
		"name": "Bodyweight 101",
		"uniqueId": "038DD384-57B0-4B42-BC10-125BAF41A565",
		"image": null,
		"updatedAt": "2017-12-05T13:10:35.415Z",
		"createdAt": "2016-08-06T10:02:24.021Z",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "Bh4AsKMfbY"
	}, {
		"isHidden": 0,
		"uniqueId": "DD0A1356-7F3B-45B2-A2EF-1DD6FC0B245A",
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.479Z",
				"updatedAt": "2018-09-21T10:33:08.206Z",
				"name": "Bench Press (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 8,
				"uniqueId": "CA9EE259-A69F-4839-BBF9-46BA8CF0D7D6",
				"instructions": "Lie flat on the bench holding the barbell with a shoulder width pronated grip.||Retract scapula and have elbows between 45 to 90 degree angle. An advanced tip is to tuck the shoulders down into the sockets and driven back.||Lift bar from the rack and hold above the chest with arms extended.||Breathe in and lower bar to the middle chest.||After pausing at the bottom, push the bar towards the starting position squeezing the chest.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "4xifFGB0Wa",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:05:49.802Z",
			"createdAt": "2017-01-02T11:33:19.494Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "Q10lY5sStP",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"exerciseType": 0,
				"createdAt": "2016-02-19T05:42:34.579Z",
				"updatedAt": "2018-09-21T10:29:54.566Z",
				"name": "Incline Bench Press (Barbell)",
				"isGlobal": true,
				"bodyParts": 8,
				"uniqueId": "63D3C1B2-26B5-49BC-9ED9-3EA000E5768D",
				"instructions": "Lie flat on the incline bench holding the barbell with a shoulder width pronated grip.||Retract scapula and have elbows between 45 to 90 degree angle. An advanced tip is to tuck the shoulders down into the sockets and driven back.||Lift bar from the rack and hold above the chest with arms extended.||Breathe in and lower bar to the middle chest.||After pausing at the bottom, push the bar towards the starting position squeezing the chest.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "4sJye8S2vl",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:06:05.076Z",
			"createdAt": "2017-01-02T11:33:19.494Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "dB4fXLc6tS",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"name": "Strict Military Press (Barbell)",
				"exerciseType": 0,
				"createdAt": "2016-02-19T05:42:34.608Z",
				"updatedAt": "2018-09-21T10:22:49.149Z",
				"isGlobal": true,
				"isPopular": false,
				"bodyParts": 32,
				"uniqueId": "5974B925-FF0F-40DE-9385-E6CCAC763DDD",
				"instructions": "Start with barbell at slightly below chest level.||With arms at shoulder width, unrack the bar and step backward.||Flexing the glutes and keeping the core tight, push the barbell upwards over the head as you exhale. Be sure that knees remain locked in place.||Lower the bar towards the starting position as you inhale.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "230KENplun",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:06:18.187Z",
			"createdAt": "2017-01-02T11:33:19.494Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "chkXJTkXhH",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 1,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 1,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 1,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.778Z",
				"updatedAt": "2018-09-21T10:01:24.564Z",
				"name": "Lateral Raise (Dumbbell)",
				"exerciseType": 1,
				"isGlobal": true,
				"bodyParts": 32,
				"uniqueId": "AE345023-155F-4C14-B6E9-FCAFC87619E3",
				"instructions": "Start with the dumbbells resting on the side of the thigh. The arm should be slightly bent.||Using your shoulder, lift the arm in a semi-circular motion until slightly above parallel.||Return to the starting position slowly while maintaining a tight core.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "unfNmkoIdI",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:06:36.591Z",
			"createdAt": "2017-01-02T11:33:19.495Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "QcP5vVwNgv",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.678Z",
				"updatedAt": "2018-09-21T09:40:09.095Z",
				"exerciseType": 0,
				"name": "Skullcrusher (Barbell)",
				"isGlobal": true,
				"bodyParts": 2,
				"uniqueId": "E5FA68C3-8F89-4FB8-A8B6-907C1FEACEAE",
				"instructions": "Sit down on a flat bench with the barbell on your lap.||Raise the bar up to shoulder height by kicking your knees up.||While holding the barbell in place, lie down on the bench with your arms fully extended and the weight directly above your shoulders.||Lower the bar to your forehead by bending your elbows. Make sure your elbows stay in place and that you slow your descent as the weight approaches your forehead.||Push the bar back up to starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Og1P7G2yLd",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:06:52.304Z",
			"createdAt": "2017-01-02T11:33:19.494Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "1VrPBYSBzK",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"image": null,
		"parseRoutine": {
			"index": 1,
			"isArchived": 0,
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:31:20.901Z",
			"createdAt": "2017-01-02T11:31:52.027Z",
			"isGlobal": 1,
			"build": "",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "WKbfDp9mTv",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"name": "Chest and Triceps",
		"updatedAt": "2017-12-05T07:50:13.314Z",
		"createdAt": "2017-01-02T11:31:52.477Z",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "OHZRtfrXmH"
	}, {
		"isHidden": 0,
		"uniqueId": "8F931692-9D13-4D70-96BB-5AEBFE4C05CA",
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.696Z",
				"updatedAt": "2018-09-21T10:33:27.180Z",
				"name": "Squat (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 16,
				"uniqueId": "B2F5A2DE-C684-4E94-A6E5-581E0695FCAC",
				"instructions": "Place the bar between the traps and the upper back, with the hands shoulder width apart.||Place feet shoulder width apart and descend by breaking at the hips and sitting backwards.||Keep the head in a neutral position, back and spine in a straight and neutral position, the core flexed and knees pushed slightly outwards.||Descend to the bottom where thighs are parallel to the floor.||Push through the heel and middle foot to bring yourself back to starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Vwv1kbEexo",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:00:44.133Z",
			"createdAt": "2017-01-02T11:43:29.114Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "nKMrRWHRku",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"updatedAt": "2018-09-21T10:18:32.974Z",
				"name": "Leg Extension (Machine)",
				"exerciseType": 2,
				"createdAt": "2016-02-19T05:42:34.872Z",
				"isGlobal": true,
				"bodyParts": 16,
				"uniqueId": "7D1DF88E-8610-495B-83A3-D68AABBFEE8A",
				"instructions": "Sit on the machine with pads and back rest is appropriately adjusted with the legs under the pad.||Using the quads, extend the legs as you exhale.||Pause at the top and squeeze the quads and lower slowly back to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "oENANmzmDz",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:05:00.295Z",
			"createdAt": "2017-01-02T11:43:29.114Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "aeIWVBBPsg",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 5,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 5,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 5,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"exerciseType": 5,
				"createdAt": "2016-02-19T05:42:35.031Z",
				"updatedAt": "2018-09-21T10:15:48.890Z",
				"name": "Flat Leg Raise",
				"isGlobal": true,
				"bodyParts": 1,
				"uniqueId": "C331AE12-B44A-426F-AC97-4C5169C0A74F",
				"instructions": "Lie on a mat with legs extended in front, place hands under your glutes.||Exhale, keeping the core tight as you lift legs until they are perpendicular with the floor.||Lower legs back to the mat without touching the floor, keeping the core braced.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "hp9cgKc7nt",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:05:16.546Z",
			"createdAt": "2017-01-02T11:43:29.114Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "4MfnIp2oAl",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 10,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"updatedAt": "2018-09-21T10:24:27.353Z",
				"name": "Standing Calf Raise (Dumbbell)",
				"exerciseType": 0,
				"createdAt": "2016-02-19T05:42:34.701Z",
				"isGlobal": true,
				"bodyParts": 16,
				"uniqueId": "AE9F2BEE-8C45-4257-B7F2-DA345CBF950C",
				"instructions": "Stand upright with a dumbbell held by your side.||Stand with the ball of the foot on a platform 2 to 3 inches from the floor.||Start with the heel touching the floor, flexing the calf.||Raise the heels off the floor and exhale as you contract the calves.||Inhale and return to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "MjX4y1Urnb",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:05:35.341Z",
			"createdAt": "2017-01-02T11:43:29.114Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "ZLcOEMJQVQ",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"image": null,
		"parseRoutine": {
			"index": 0,
			"isArchived": 0,
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:28:31.397Z",
			"createdAt": "2017-01-02T11:43:29.114Z",
			"isGlobal": 1,
			"build": "",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "cAfA2tEJwx",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"name": "Legs",
		"updatedAt": "2019-05-29T14:28:47.017Z",
		"createdAt": "2017-01-02T11:43:29.482Z",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "oLCbRxMo9O"
	}, {
		"isHidden": 0,
		"uniqueId": "C01D6229-BCF4-484A-A28B-19872CE7838C",
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.696Z",
				"updatedAt": "2018-09-21T10:33:27.180Z",
				"name": "Squat (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 16,
				"uniqueId": "B2F5A2DE-C684-4E94-A6E5-581E0695FCAC",
				"instructions": "Place the bar between the traps and the upper back, with the hands shoulder width apart.||Place feet shoulder width apart and descend by breaking at the hips and sitting backwards.||Keep the head in a neutral position, back and spine in a straight and neutral position, the core flexed and knees pushed slightly outwards.||Descend to the bottom where thighs are parallel to the floor.||Push through the heel and middle foot to bring yourself back to starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Vwv1kbEexo",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:11:02.388Z",
			"createdAt": "2017-01-02T11:27:16.556Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "eNASX2qLeh",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"updatedAt": "2018-09-21T10:36:38.263Z",
				"name": "Overhead Press (Barbell)",
				"exerciseType": 0,
				"createdAt": "2016-02-19T05:42:34.667Z",
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 32,
				"uniqueId": "4D563338-F2ED-430D-AE12-EC45482EDF20",
				"instructions": "Start with barbell at slightly below chest level.||With arms at shoulder width, unrack the bar and step backward.||Flexing the glutes and keeping the core tight, push the barbell upwards over the head as you exhale.||Lower the bar towards the starting position as you inhale.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "eIgr8TfYYv",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:11:16.103Z",
			"createdAt": "2017-01-02T11:27:16.556Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "tlK2XZYlzI",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"exerciseType": 0,
				"name": "Deadlift (Barbell)",
				"createdAt": "2016-02-19T05:42:34.525Z",
				"updatedAt": "2018-09-21T10:32:32.069Z",
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 4,
				"uniqueId": "B748103D-3014-4CAE-A349-CEC433528C3A",
				"instructions": "Approach the bar so it is positioned across the center of the foot.||Place feet shoulder width apart (note this is for the conventional deadlift) and grip the bar at shoulder width apart.||Lower hips and bend knees to bring shins into the bar. Lift the chest and take a deep breath to brace the core (should be braced the entire movement). Retract shoulder blades to take the slack out of the bar. ||Pull bar upward extending hips and straightening the torso.||Return weight to the floor in a controlled motion by breaking at the hips and bending the legs.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "bHaZQC7kR5",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:11:29.202Z",
			"createdAt": "2017-01-02T11:27:16.556Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "hCeJtiuYUE",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"image": null,
		"parseRoutine": {
			"index": 4,
			"isArchived": 0,
			"isHidden": 0,
			"updatedAt": "2017-12-02T11:09:39.886Z",
			"createdAt": "2017-01-02T11:27:16.555Z",
			"isGlobal": 1,
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "g33h7drF5H",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"name": "Strong 5x5 - Workout B",
		"updatedAt": "2019-05-29T14:30:56.489Z",
		"createdAt": "2017-01-02T11:27:16.879Z",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "LZt41b941z"
	}, {
		"isHidden": 0,
		"uniqueId": "4AF63D92-425F-4ED2-AE12-AA1D9A758881",
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.696Z",
				"updatedAt": "2018-09-21T10:33:27.180Z",
				"name": "Squat (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 16,
				"uniqueId": "B2F5A2DE-C684-4E94-A6E5-581E0695FCAC",
				"instructions": "Place the bar between the traps and the upper back, with the hands shoulder width apart.||Place feet shoulder width apart and descend by breaking at the hips and sitting backwards.||Keep the head in a neutral position, back and spine in a straight and neutral position, the core flexed and knees pushed slightly outwards.||Descend to the bottom where thighs are parallel to the floor.||Push through the heel and middle foot to bring yourself back to starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Vwv1kbEexo",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:11:43.082Z",
			"createdAt": "2017-01-02T11:24:13.752Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "fKhXytuBGp",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"createdAt": "2016-02-19T05:42:34.479Z",
				"updatedAt": "2018-09-21T10:33:08.206Z",
				"name": "Bench Press (Barbell)",
				"exerciseType": 0,
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 8,
				"uniqueId": "CA9EE259-A69F-4839-BBF9-46BA8CF0D7D6",
				"instructions": "Lie flat on the bench holding the barbell with a shoulder width pronated grip.||Retract scapula and have elbows between 45 to 90 degree angle. An advanced tip is to tuck the shoulders down into the sockets and driven back.||Lift bar from the rack and hold above the chest with arms extended.||Breathe in and lower bar to the middle chest.||After pausing at the bottom, push the bar towards the starting position squeezing the chest.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "4xifFGB0Wa",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:11:57.822Z",
			"createdAt": "2017-01-02T11:24:13.752Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "VyIAIHFLG8",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isChecked": false,
				"isPersonalRecord": false
			}],
			"isHidden": 0,
			"parseExercise": {
				"name": "Bent Over Row (Barbell)",
				"exerciseType": 0,
				"createdAt": "2016-02-19T05:42:34.490Z",
				"updatedAt": "2018-09-21T10:14:14.686Z",
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 4,
				"uniqueId": "2CA2B6D5-F16D-4EAC-89A2-05E1BE0CEEE7",
				"instructions": "Holding the barbell with a pronated grip, bend the legs and tilt the torso with a straight back.||Flexing the core, keep head in neutral position, pull the barbell towards your stomach.||Squeeze your back as you breath out at the top position.||Inhale and lower the barbell to the starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "BHVw5nbLQ8",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"updatedAt": "2017-12-05T13:12:13.363Z",
			"createdAt": "2017-01-02T15:15:50.581Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "WfaE13uTom",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"image": null,
		"parseRoutine": {
			"index": 3,
			"isArchived": 0,
			"isHidden": 0,
			"updatedAt": "2017-12-02T11:10:50.088Z",
			"createdAt": "2017-01-02T11:24:13.751Z",
			"isGlobal": 1,
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "iA8tOJVBbl",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"name": "Strong 5x5 - Workout A",
		"updatedAt": "2017-12-05T13:09:30.400Z",
		"createdAt": "2017-01-02T11:24:14.036Z",
		"notes": "",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "RcDWOqYHxx"
	}, {
		"parseSetGroups": [{
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}],
			"parseExercise": {
				"exerciseType": 0,
				"name": "Deadlift (Barbell)",
				"createdAt": "2016-02-19T05:42:34.525Z",
				"updatedAt": "2018-09-21T10:32:32.069Z",
				"isGlobal": true,
				"isPopular": true,
				"bodyParts": 4,
				"uniqueId": "B748103D-3014-4CAE-A349-CEC433528C3A",
				"instructions": "Approach the bar so it is positioned across the center of the foot.||Place feet shoulder width apart (note this is for the conventional deadlift) and grip the bar at shoulder width apart.||Lower hips and bend knees to bring shins into the bar. Lift the chest and take a deep breath to brace the core (should be braced the entire movement). Retract shoulder blades to take the slack out of the bar. ||Pull bar upward extending hips and straightening the torso.||Return weight to the floor in a controlled motion by breaking at the hips and bending the legs.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "bHaZQC7kR5",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:12:24.689Z",
			"createdAt": "2016-08-06T10:11:38.605Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "KQ8yBhctG7",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 0,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}],
			"parseExercise": {
				"exerciseType": 0,
				"name": "Upright Row (Barbell)",
				"createdAt": "2016-02-19T05:42:34.726Z",
				"updatedAt": "2018-09-21T09:34:20.302Z",
				"isGlobal": true,
				"bodyParts": 4,
				"uniqueId": "45A0A30B-FFB7-4722-A0CF-2889BAA7FF9A",
				"instructions": "Hold barbell with arms shoulder width and grip with a pronated grip.||Use shoulders to lift the barbell as you exhale.||Elbows should lead movement and the bar should be close to the body as it is elevated.||Continue to lift until bar is chin level. Hold at this position as you contract the shoulder muscles.||Lower to starting position.||Repeat for reps.",
				"ACL": {
					"*": {
						"read": true
					}
				},
				"objectId": "Wije88fsbG",
				"__type": "Object",
				"className": "ParseExercise"
			},
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:12:49.118Z",
			"createdAt": "2016-08-06T10:11:38.604Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "Ldlxm7vfvq",
			"__type": "Object",
			"className": "ParseSetGroup"
		}, {
			"parseSetsDictionary": [{
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}, {
				"exerciseTypeValue": 2,
				"tagsValue": 0,
				"reps": 5,
				"isPersonalRecord": false
			}],
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
			"isHidden": 0,
			"updatedAt": "2017-12-05T13:13:01.626Z",
			"createdAt": "2016-08-06T10:11:38.604Z",
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "zqSywPFeGD",
			"__type": "Object",
			"className": "ParseSetGroup"
		}],
		"parseRoutine": {
			"index": 2,
			"isHidden": 1,
			"isArchived": 0,
			"updatedAt": "2017-12-02T11:11:06.462Z",
			"createdAt": "2016-08-06T10:11:38.604Z",
			"isGlobal": 1,
			"ACL": {
				"*": {
					"read": true
				}
			},
			"objectId": "qcxqqh31YG",
			"__type": "Object",
			"className": "ParseRoutine"
		},
		"isHidden": 0,
		"name": "Pull Workout",
		"uniqueId": "7AAB118E-7358-42FE-A926-4B64C2FBB5E5",
		"image": null,
		"updatedAt": "2017-12-05T13:09:53.879Z",
		"createdAt": "2016-08-06T10:11:38.867Z",
		"isGlobal": true,
		"ACL": {
			"*": {
				"read": true
			}
		},
		"objectId": "wHJQzzF2Pv"
	}]
}
```
