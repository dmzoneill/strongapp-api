import { env } from 'process';
import request from 'request';

class Strong {
    constructor() {
        this.endpoint = "https://ws13.strongapp.co";
        this.strong_username = env.strong_username;
        this.strong_password = env.strong_password;
        this.strong_device_uuid = env.strong_device_uuid;
        this.strong_application_id = env.strong_application_id;
        this.debug = false;

        if (!this.strong_username) {
            console.log("Missing: strong_username");
            process.exit(1);
        }

        if (!this.strong_password) {
            console.log("Missing: strong_password");
            process.exit(2);
        }

        if (!this.strong_device_uuid) {
            console.log("Missing: strong_device_uuid");
            process.exit(3);
        }

        if (!this.strong_application_id) {
            console.log("Missing: strong_application_id");
            process.exit(4);
        }

        this.headers = {
            'Host': 'ws13.strongapp.co',
            'x-parse-application-id': this.strong_application_id,
            'x-parse-app-build-version': '257',
            'x-parse-app-display-version': '2.7.9',
            'x-parse-os-version': '13',
            'user-agent': 'Parse Android SDK API Level 33',
            'x-parse-installation-id': this.strong_device_uuid,
            'content-type': 'application/json',
            'pragma': 'no-cache',
            'cache-control': 'no-cache'
        };
    }

    async WebRequest(method, query, data = null) {
        try {
            if (method === "POST") {
                this.response = await request.post({
                    url: this.endpoint + query,
                    json: data,
                    headers: this.headers
                });
            } else {
                this.response = await request.get({
                    url: this.endpoint + query,
                    headers: this.headers
                });
            }

            if (this.debug) {
                const data = this.response.toJSON();
                console.log(data.body);
                console.log(this.response.statusCode);
                console.log(this.response.text);
            }

            if (this.response.ok) {
                return true;
            }

            return false;
        } catch (e) {
            console.log(e.toString());
            return false;
        }
    }

    async Login() {
        try {
            const data = {};
            data["password"] = this.strong_password;
            data["username"] = this.strong_username;
            data["_method"] = "GET";

            const res = await this.WebRequest("POST", "/parse/login", data);

            const js = this.response.json();
            this.session_token = js["sessionToken"];
            this.user_object_id = js["objectId"];

            this.headers['x-parse-session-token'] = this.session_token;
            return res;
        } catch (e) {
            console.log(e.toString());
            return false;
        }
    }

    async GetUser() {
        try {
            var res = WebRequest("GET", "/parse/classes/_User/" + this.user_object_id);
            return res;
        } catch (e) {
            console.log(e.toString());
            return false;
        }
    }

    async GetWorkouts() {
        try {
            var where = {};
            where["user"] = {};
            where["user"]["__type"] = "Pointer";
            where["user"]["className"] = "_User";
            where["user"]["objectId"] = this.user_object_id;
            where["updatedAt"] = {};
            where["updatedAt"]["$gt"] = {};
            where["updatedAt"]["$gt"]["__type"] = "Date";
            where["updatedAt"]["$gt"]["iso"] = "1970-01-01T00:00:00.000Z";

            var data = {};
            data["include"] = "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise";
            data["limit"] = "200";
            data["where"] = JSON.stringify(where).replace('"', '\"');
            data["_method"] = "GET";

            var res = WebRequest("POST", "/parse/classes/ParseWorkout", data);

            return res;
        } catch (e) {
            console.log(e.toString());
            return false;
        }
    }

    async GetWorkOutsPerWeek() {
        try {
            var where = {};
            where["user"] = {};
            where["user"]["__type"] = "Pointer";
            where["user"]["className"] = "_User";
            where["user"]["objectId"] = this.user_object_id;

            var data = {};
            data["_method"] = "GET";
            data["where"] = JSON.stringify(where).replace('"', '\"');

            var res = WebRequest("POST", "/parse/classes/ParseWidget", data);
            return res;
        } catch (e) {
            console.log(e.toString());
            return false;
        }
    }

    async GetWorkOutsCount() {
        try {
            let where = {};
            where.user = {};
            where.user.__type = "Pointer";
            where.user.className = "_User";
            where.user.objectId = this.user_object_id;
            where.updatedAt = {};
            where.updatedAt.$gt = {};
            where.updatedAt.$gt.__type = "Date";
            where.updatedAt.$gt.iso = "1970-01-01T00:00:00.000Z";

            let data = {};
            data.include = "parseOriginRoutine,parseRoutine,parseSetGroups.parseExercise";
            data.limit = "0";
            data.count = "1";
            data.where = JSON.stringify(where);

            let options = {};
            options.method = "POST";
            options.body = JSON.stringify(data);

            let res = await this.WebRequest("/parse/classes/ParseWorkout", options);
            return res;
        } catch (e) {
            console.log(e);
            return false;
        }
    }

    async GetJSON() {
        return this.response.json();
    }

    async GetText() {
        return this.response.text;
    }

    async SaveResponseToFile(filename) {
        try {
            let save_file = fs.createWriteStream(filename);
            save_file.write(this.response.text);
            save_file.close();
            return true;
        } catch (e) {
            console.log(e);
            return false;
        }
    }
}

export default Strong;