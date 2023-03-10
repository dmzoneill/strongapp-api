# strong-api

I'm not currently developing this any more.  I leave this here for reference purposes only.  
This should not be used unless you plan on getting your account terminated or other possible consequences.  
Unlawful use of an API could be determined illegal depending on your durisdiction, like unlawful entery into a house with an open door.  

Since strong don't want me making this public, I've decided to move on to a competitor app and accept the termination.  
I've cancelled my subscription with strong and I've switched to using hevy.  
I'm no longer using the strong service and only used this for a short period of time.  
At the time of writing the API, there was no expressed defintion of access to their API or otherwise, in their terms of service.  
As per my email below to Cameron.  

Since i've switched to using Hevy, i may do some work over there.  
[https://github.com/dmzoneill/hevyapp-api](https://github.com/dmzoneill/hevyapp-api)

Adios!

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

## Strong conversation
![image](https://user-images.githubusercontent.com/15192260/223532596-83b5856b-a620-41e5-aa61-ed257e9ab939.png)
