# strong-api

## Samples

- [Samples](https://github.com/dmzoneill/strongapp-api/tree/main/sample)
- [Python pyplot example](https://dmzoneill.github.io/strongapp-api/sample/chart.html)
- [Chart js example](https://dmzoneill.github.io/strongapp-api/sample/chart.html)

![Bench press](https://github.com/dmzoneill/strongapp-api/blob/main/img/sample.png?raw=true)

## Overviews

- [create-workout.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/create-workout.md)
- [delete-workout.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/delete-workout.md)
- [get-total-workouts.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/get-total-workouts.md)
- [get-workout.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/get-workout.md)
- [login.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/login.md)
- [parsewidget.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/parsewidget.md)
- [update-workout.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/update-workout.md)
- [delete-session.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/delete-session.md)
- [get-exercises.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/get-exercises.md)
- [get-workout-history.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/get-workout-history.md)
- [log-session.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/log-session.md)
- [update-user.md](https://github.com/dmzoneill/strongapp-api/blob/main/api/update-user.md)

## How to dissect https calls for yourself

Download

 - Android studio
 - [Charles proxy](https://www.charlesproxy.com/)
 - [apk-mitm](https://www.npmjs.com/package/apk-mitm/)
 - [io.strongapp.strong apk](https://m.apkpure.com/strong-workout-tracker-gym-log/io.strongapp.strong)

Setup

 - Open android studio
 - Create an android virtual device
 - Boot the device
 - Download the strong app apk
 - Download apk-mitm
 - Patch the apk as described on [apk-mitm](https://www.npmjs.com/package/apk-mitm/)
 - Install charles proxy
 - Install the certificate and setup the proxy on the android device as described here:
 https://blog.logrocket.com/test-debug-android-apps-with-charles-web-proxy/
  - Using androind studio upload the patched APK to the android device and then install it
  - open strong app and login

Strong should use the proxy with the previously installed certificate and in charles you can now see the decrypted https requests.