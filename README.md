# strong-api

I'm not currently developing this any more.  I leave this here for reference purposes only.
This should not be used unless you plan on getting your account terminated.
Since strong don't want me making this public, I've decided to move on to a competitor app and accept the termination.
I've switched to using hevy and may do some work over there.
[https://github.com/dmzoneill/hevyapp-api][https://github.com/dmzoneill/hevyapp-api]

Adios!

![image](https://user-images.githubusercontent.com/15192260/223525656-8b9007ea-f496-4626-9101-572153b5549d.png)


![Bench press](https://github.com/dmzoneill/strongapp-api/blob/main/img/sample.png?raw=true)

## Samples

- [Samples](https://github.com/dmzoneill/strongapp-api/tree/main/sample)
- [Python pyplot example](https://dmzoneill.github.io/strongapp-api/sample/chart.html)
- [Chart js example](https://dmzoneill.github.io/strongapp-api/sample/5.chart.html)

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

### Download

 - Android studio
 - [Charles proxy](https://www.charlesproxy.com/)
 - [apk-mitm](https://www.npmjs.com/package/apk-mitm/)
 - [io.strongapp.strong apk](https://m.apkpure.com/strong-workout-tracker-gym-log/io.strongapp.strong)

### Setup

1. Open android studio
2. Create an android virtual device
3. Boot the device
4. Download the strong app apk
5. Download apk-mitm
6. Patch the apk as described on [apk-mitm](https://www.npmjs.com/package/apk-mitm/)
7. Install charles proxy
8. Install the certificate and setup the proxy on the android device as described here:
 https://blog.logrocket.com/test-debug-android-apps-with-charles-web-proxy/
9. Using androind studio upload the patched APK to the android device and then install it
10. open strong app and login

Strong should use the proxy with the previously installed certificate and in charles you can now see the decrypted https requests.
