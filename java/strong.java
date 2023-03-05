import java.util.Map;
import java.util.HashMap;

import com.google.gson.Gson;
import com.google.gson.JsonObject;

import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.RequestBody;
import okhttp3.MediaType;
import okhttp3.Response;
import okhttp3.Headers;

public class Strong {
    private String endpoint = "https://ws13.strongapp.co";
    private String strong_username = System.getenv("strong_username");
    private String strong_password = System.getenv("strong_password");
    private String strong_device_uuid = System.getenv("strong_device_uuid");
    private String strong_application_id = System.getenv("strong_application_id");
    private boolean debug = false;
    private String session_token;
    private String user_object_id;
    private OkHttpClient client;
    private Headers headers;

    public Strong() {
        if (strong_username == null) {
            System.out.println("Missing: strong_username");
            System.exit(1);
        }

        if (strong_password == null) {
            System.out.println("Missing: strong_password");
            System.exit(2);
        }

        if (strong_device_uuid == null) {
            System.out.println("Missing: strong_device_uuid");
            System.exit(3);
        }

        if (strong_application_id == null) {
            System.out.println("Missing: strong_application_id");
            System.exit(4);
        }

        this.headers = new Headers.Builder()
                .add("Host", "ws13.strongapp.co")
                .add("x-parse-application-id", strong_application_id)
                .add("x-parse-app-build-version", "257")
                .add("x-parse-app-display-version", "2.7.9")
                .add("x-parse-os-version", "13")
                .add("user-agent", "Parse Android SDK API Level 33")
                .add("x-parse-installation-id", strong_device_uuid)
                .add("content-type", "application/json")
                .add("pragma", "no-cache")
                .add("cache-control", "no-cache")
                .build();

        this.client = new OkHttpClient();
    }

    public void setDebug(boolean debug) {
        this.debug = debug;
    }

    private boolean webRequest(String method, String query, JsonObject data) {
        try {
            Request.Builder requestBuilder = new Request.Builder()
                    .url(endpoint + query)
                    .headers(this.headers);

            if (method.equals("POST")) {
                RequestBody body = RequestBody.create(MediaType.parse("application/json"), data.toString());
                requestBuilder.post(body);
            } else {
                requestBuilder.get();
            }

            Response response = this.client.newCall(requestBuilder.build()).execute();

            if (debug) {
                System.out.println(response.headers());
                System.out.println(response.code());
                System.out.println(response.body().string());
            }

            if (response.isSuccessful()) {
                return true;
            }

            return false;
        } catch (Exception e) {
            System.out.println(e.getMessage());
            return false;
        }
    }

    public boolean login() {
        try {
            JsonObject data = new JsonObject();
            data.addProperty("password", strong_password);
            data.addProperty("username", strong_username);
            data.addProperty("_method", "GET");

            boolean res = this.webRequest("POST", "/parse/login", data);

            Gson gson = new Gson();
            JsonObject responseJson = gson.fromJson(res, JsonObject.class);

            session_token = responseJson.get("sessionToken").getAsString();
            user_object_id = responseJson.get("objectId").getAsString();

            this.headers = this.headers.newBuilder().add("x-parse-session-token", session_token).build();

            return res;
        } catch (Exception e) {
            System.out.println(e.getMessage());
            return false;
        }
    }

    public boolean GetUser() {
        try {
            String path = "/parse/classes/_User/" + this.user_object_id;
            boolean res = this.WebRequest("GET", path);
            return res;
        } catch (Exception e) {
            System.out.println(e.toString());
            return false;
        }
    }

    public boolean GetWorkouts() {
        try {
            JSONObject where = new JSONObject();
            JSONObject user = new JSONObject();
            user.put("__type", "Pointer");
            user.put("className", "_User");
            user.put("objectId", this.user_object_id);
            where.put("user", user);
            JSONObject updatedAt = new JSONObject();
            JSONObject gt = new JSONObject();
            gt.put("__type", "Date");
            gt.put("iso", "1970-01-01T00:00:00.000Z");
            updatedAt.put("$gt", gt);
            where.put("updatedAt", updatedAt);

            JSONObject data = new JSONObject();
            data.put("include", "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise");
            data.put("limit", "200");
            data.put("where", where.toString());

            boolean res = this.WebRequest("POST", "/parse/classes/ParseWorkout", data.toString());

            return res;
        } catch (Exception e) {
            System.out.println(e.toString());
            return false;
        }
    }

    public boolean GetWorkOutsPerWeek() {
        try {
            JSONObject where = new JSONObject();
            JSONObject user = new JSONObject();
            user.put("__type", "Pointer");
            user.put("className", "_User");
            user.put("objectId", this.user_object_id);
            where.put("user", user);

            JSONObject data = new JSONObject();
            data.put("_method", "GET");
            data.put("where", where.toString());

            boolean res = this.WebRequest("POST", "/parse/classes/ParseWidget", data.toString());
            return res;
        } catch (Exception e) {
            System.out.println(e.toString());
            return false;
        }
    }

    public boolean GetWorkOutsCount() {
        try {
            JSONObject where = new JSONObject();
            JSONObject user = new JSONObject();
            user.put("__type", "Pointer");
            user.put("className", "_User");
            user.put("objectId", this.user_object_id);
            where.put("user", user);
            JSONObject updatedAt = new JSONObject();
            JSONObject gt = new JSONObject();
            gt.put("__type", "Date");
            gt.put("iso", "1970-01-01T00:00:00.000Z");
            updatedAt.put("$gt", gt);
            where.put("updatedAt", updatedAt);

            JSONObject data = new JSONObject();
            data.put("include", "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise");
            data.put("limit", "0");
            data.put("count", "1");
            data.put("where", where.toString());
            data.put("_method", "GET");

            boolean res = this.WebRequest("POST", "/parse/classes/ParseWorkout", data.toString());
            return res;
        } catch (Exception e) {
            System.out.println(e.toString());
            return false;
        }
    }

    public JSONObject GetJSON() {
        return this.response.getJSONObject();
    }

    public String GetText() {
        return this.response.toString();
    }

    public boolean SaveResponseToFile(String filename) {
        try {
            FileWriter save_file = new FileWriter(filename);
            save_file.write(this.response.toString());
            save_file.close();
            return true;
        } catch (Exception e) {
            System.out.println(e.toString());
            return false;
        }
    }
}