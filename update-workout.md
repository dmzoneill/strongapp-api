## Update workout

### request
```
import requests

headers = {
    'Host': 'ws13.strongapp.co',
    'x-parse-session-token': 'r:8fc69c9a2cexxxxxxxxxx0adef26d6f27',
    'x-parse-application-id': 'QbtVgYzi9iU1GNBxxxxxxxxxxtvRKMajvuYLLmTW',
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
    'requests': [
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseWorkout/8KrMJWiWdf',
            'body': {
                'bodyWeightKilograms': 0,
                'notes': '',
                'build': 'a257',
                'name': '6. Shoulders/Arms',
                'isGlobal': False,
                'parseSetGroups': [
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': 'HFJNuTnwrU',
                    },
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': '2aFGyMtOGr',
                    },
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': 'O1eZqPKw6K',
                    },
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': 'wOZiv671pu',
                    },
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': 'lRrh4IVXgn',
                    },
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': '0SRAApZvQJ',
                    },
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': 'xQA6HVV1yF',
                    },
                    {
                        '__type': 'Pointer',
                        'className': 'ParseSetGroup',
                        'objectId': 'ViDoOCx7YG',
                    },
                ],
                'parseRoutine': {
                    '__type': 'Pointer',
                    'className': 'ParseRoutine',
                    'objectId': 'gMBFTfTU1K',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': '4874e63b-4177-4edc-9e84-d50fb7412692',
                'isHidden': 0,
                'objectId': '8KrMJWiWdf',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/O1eZqPKw6K',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 20,
                        'isChecked': False,
                        'expectedKilograms': 20,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 25,
                        'isChecked': False,
                        'expectedKilograms': 25,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 25,
                        'isChecked': False,
                        'expectedKilograms': 30,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': 'gmuuQgiVFC',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': '39d2ddd0-0dfa-406f-aa17-3520daad4165',
                'isHidden': 0,
                'objectId': 'O1eZqPKw6K',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseRoutine/gMBFTfTU1K',
            'body': {
                'build': 'a257',
                'isArchived': 0,
                'isGlobal': 0,
                'index': 0,
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'isHidden': 0,
                'objectId': 'gMBFTfTU1K',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/0SRAApZvQJ',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 3,
                        'kilograms': 20,
                        'isChecked': False,
                        'expectedKilograms': 10,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 3,
                        'kilograms': 20,
                        'isChecked': False,
                        'expectedKilograms': 10,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 3,
                        'kilograms': 20,
                        'isChecked': False,
                        'expectedKilograms': 10,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': 'kHu0Bgp515',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': 'ffd55399-5bdc-4009-960e-f69dbdeaa2e7',
                'isHidden': 0,
                'objectId': '0SRAApZvQJ',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/wOZiv671pu',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 1,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 36,
                        'isChecked': False,
                        'expectedKilograms': 36,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 46,
                        'isChecked': False,
                        'expectedKilograms': 45,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 50,
                        'isChecked': False,
                        'expectedKilograms': 41,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 50,
                        'isChecked': False,
                        'expectedKilograms': 41,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 4,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 50,
                        'isChecked': False,
                        'expectedKilograms': 41,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': 'RemEUYjkoZ',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': '94e48277-ef3b-4a98-b7e4-d4859d1d7936',
                'isHidden': 0,
                'objectId': 'wOZiv671pu',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/ViDoOCx7YG',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'reps': 6,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 3,
                        'isChecked': False,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 6,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 3,
                        'isChecked': False,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 6,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 3,
                        'isChecked': False,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 6,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 3,
                        'isChecked': False,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': '6NQgjnb0vI',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': '5e5375dc-d1f2-4a65-a9df-81976d7e088b',
                'isHidden': 0,
                'objectId': 'ViDoOCx7YG',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/lRrh4IVXgn',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 54,
                        'isChecked': False,
                        'expectedKilograms': 64,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 64,
                        'isChecked': False,
                        'expectedKilograms': 64,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 1,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 72,
                        'isChecked': False,
                        'expectedKilograms': 59,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 7,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 2,
                        'kilograms': 55,
                        'isChecked': False,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': 'tklNHrWzOF',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': 'b3502172-c9a8-4fb0-83dd-f14f3154a63c',
                'isHidden': 0,
                'objectId': 'lRrh4IVXgn',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/2aFGyMtOGr',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 1,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 30,
                        'isChecked': False,
                        'expectedKilograms': 30,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 40,
                        'isChecked': False,
                        'expectedKilograms': 40,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 40,
                        'isChecked': False,
                        'expectedKilograms': 40,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 40,
                        'isChecked': False,
                        'expectedKilograms': 40,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 1,
                        'kilograms': 40,
                        'isChecked': False,
                        'expectedKilograms': 35,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': 'qIo8zgd0EA',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': '709e1f4d-6a3c-4aae-9240-2c7139c4562b',
                'isHidden': 0,
                'objectId': '2aFGyMtOGr',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/xQA6HVV1yF',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'reps': 4,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 5,
                        'isChecked': False,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 5,
                        'isChecked': False,
                    },
                    {
                        'isPersonalRecord': False,
                        'reps': 8,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 5,
                        'isChecked': False,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': 'hp9cgKc7nt',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': '9e44cee3-b12e-46e9-8bbd-6643ac46d65c',
                'isHidden': 0,
                'objectId': 'xQA6HVV1yF',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/_User/NMmP317FZG',
            'body': {
                'lastVersion': '2.7.9 (257)',
                'persistentNotes': {},
                'hasPurchasedUnlockStrong': False,
                'ACL': {
                    'NMmP317FZG': {
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
                    'jKzMeLT1MI': 'our_little_un-deletable_no_weight_bar',
                    'Fr5Z4hQjuj': 'our_little_un-deletable_no_weight_bar',
                    'KIr1hSNTNF': 'our_little_un-deletable_no_weight_bar',
                    '100TqWO3tI': 'our_little_un-deletable_no_weight_bar',
                    'NF7ZnLEaCo': 'our_little_un-deletable_no_weight_bar',
                    'wfCkYtT3FK': 'our_little_un-deletable_no_weight_bar',
                    '8i5WGtS0oO': 'our_little_un-deletable_no_weight_bar',
                    'Da5swzH5xc': 'our_little_un-deletable_no_weight_bar',
                    'KRODWQlTsz': 'our_little_un-deletable_no_weight_bar',
                    'NyW1k6j3hV': 'our_little_un-deletable_no_weight_bar',
                    'FLkiUDr4re': 'our_little_un-deletable_no_weight_bar',
                    'egksi44eRc': 'our_little_un-deletable_no_weight_bar',
                    'oENANmzmDz': 'our_little_un-deletable_no_weight_bar',
                    'ON6HTP38c8': 'our_little_un-deletable_no_weight_bar',
                    'rzZXMmjXrg': 'our_little_un-deletable_no_weight_bar',
                    'RemEUYjkoZ': 'our_little_un-deletable_no_weight_bar',
                    '5QD729I5Fc': 'our_little_un-deletable_no_weight_bar',
                    'eCtchyihUy': 'our_little_un-deletable_no_weight_bar',
                    'nDh8Us74T8': 'our_little_un-deletable_no_weight_bar',
                    '949NJCigex': 'our_little_un-deletable_no_weight_bar',
                    'EtNiOHW0ra': 'our_little_un-deletable_no_weight_bar',
                    'ZrU2uhPxBU': 'our_little_un-deletable_no_weight_bar',
                    'BwAaRYiaI1': 'our_little_un-deletable_no_weight_bar',
                    'SPZT7Bbm4I': 'our_little_un-deletable_no_weight_bar',
                    'IsQD1RLCAw': 'our_little_un-deletable_no_weight_bar',
                    'wXGOcAHqfS': 'our_little_un-deletable_no_weight_bar',
                    'f9oYdoIaWy': 'our_little_un-deletable_no_weight_bar',
                    '4389vcZicE': 'our_little_un-deletable_no_weight_bar',
                    'GBVEhxLCp8': 'our_little_un-deletable_no_weight_bar',
                    'uLlUVLylTn': 'our_little_un-deletable_no_weight_bar',
                    '93H8TNQg4C': 'our_little_un-deletable_no_weight_bar',
                    'zlMK4Z3iT2': 'our_little_un-deletable_no_weight_bar',
                    'ssAHfgQRgf': 'our_little_un-deletable_no_weight_bar',
                    'ioCO1kXB9v': 'our_little_un-deletable_no_weight_bar',
                    'khcDDtHI64': 'our_little_un-deletable_no_weight_bar',
                    'F0pHgvERle': 'our_little_un-deletable_no_weight_bar',
                    'uEMx4aDD3G': 'our_little_un-deletable_no_weight_bar',
                    '4sfUiNyZEv': 'our_little_un-deletable_no_weight_bar',
                    'vt2ZDMDLZG': 'our_little_un-deletable_no_weight_bar',
                    '4RNzidD7Vp': 'our_little_un-deletable_no_weight_bar',
                    'lhcK0ygXoJ': 'our_little_un-deletable_no_weight_bar',
                    'lEoprkFYZo': 'our_little_un-deletable_no_weight_bar',
                    '3oL8QpU0W8': 'our_little_un-deletable_no_weight_bar',
                    'tklNHrWzOF': 'our_little_un-deletable_no_weight_bar',
                    'nljfNLqe2S': 'our_little_un-deletable_no_weight_bar',
                    'hYfjsSriQD': 'our_little_un-deletable_no_weight_bar',
                    'ZYLas8lazD': 'our_little_un-deletable_no_weight_bar',
                    'ENycNTGojT': 'our_little_un-deletable_no_weight_bar',
                    'opctrOWR15': 'our_little_un-deletable_no_weight_bar',
                    'XxhrxlBEsp': 'our_little_un-deletable_no_weight_bar',
                    'C3J3MzGLLv': 'our_little_un-deletable_no_weight_bar',
                    'pTOKLwUGZP': 'our_little_un-deletable_no_weight_bar',
                    'mdGvg7lBkt': 'our_little_un-deletable_no_weight_bar',
                    'A02el3s1qm': 'our_little_un-deletable_no_weight_bar',
                    'nPSMbunT1f': 'our_little_un-deletable_no_weight_bar',
                    'VrNwEmBTP0': 'our_little_un-deletable_no_weight_bar',
                    'c134qTzvU7': 'our_little_un-deletable_no_weight_bar',
                    'IyDTukznLV': 'our_little_un-deletable_no_weight_bar',
                    'SMTIowUBKy': 'our_little_un-deletable_no_weight_bar',
                    'yw5V7e2goL': 'our_little_un-deletable_no_weight_bar',
                    '6fU6TC4mgC': 'our_little_un-deletable_no_weight_bar',
                    'hnhGpeIPU5': 'our_little_un-deletable_no_weight_bar',
                    'G4mxCu6iaZ': 'our_little_un-deletable_no_weight_bar',
                    '98OBEiUvrk': 'our_little_un-deletable_no_weight_bar',
                    'ARFhriXsPy': 'our_little_un-deletable_no_weight_bar',
                    'SQD7WLePEq': 'our_little_un-deletable_no_weight_bar',
                    'VD2qcujHDC': 'our_little_un-deletable_no_weight_bar',
                    '9qJYWokfTb': 'our_little_un-deletable_no_weight_bar',
                    'ufcBWkr5Bg': 'our_little_un-deletable_no_weight_bar',
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
                'uniqueId': '44fbba75-8d0f-44fd-8902-1f0b33b20bd6',
                'weightUnitValue': 14,
                'username': 'bitwiseshift',
                'goals': '{}',
                'objectId': 'NMmP317FZG',
            },
        },
        {
            'method': 'PUT',
            'path': '/parse/classes/ParseSetGroup/HFJNuTnwrU',
            'body': {
                'parseSetsDictionary': [
                    {
                        'isPersonalRecord': False,
                        'seconds': 16,
                        'tagsValue': 0,
                        'rpe': 0,
                        'exerciseTypeValue': 6,
                        'isChecked': True,
                    },
                ],
                'superSetOrder': None,
                'notes': '',
                'build': 'a257',
                'parseExercise': {
                    '__type': 'Pointer',
                    'className': 'ParseExercise',
                    'objectId': 'SuGuVl8OYz',
                },
                'user': {
                    '__type': 'Pointer',
                    'className': '_User',
                    'objectId': 'NMmP317FZG',
                },
                'uniqueId': 'fd61b7e0-e6cb-4e6e-ab45-a8454fb8fb37',
                'isHidden': 0,
                'objectId': 'HFJNuTnwrU',
            },
        },
    ],
}

response = requests.post('https://ws13.strongapp.co/parse/batch', headers=headers, json=json_data)
```

### Reponse
```
[{
	"success": {
		"updatedAt": "2023-02-27T18:11:47.557Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.559Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.556Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.564Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.560Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.562Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.558Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.563Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.561Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.555Z"
	}
}, {
	"success": {
		"updatedAt": "2023-02-27T18:11:47.561Z"
	}
}]
```