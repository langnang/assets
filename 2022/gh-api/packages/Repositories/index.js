import axios from "./../../plugins/axios";

export default {
  // List repositories for a user
  "GET /users/{username}/repos": ({ username, params }) =>
    axios({
      url: `/users/${username}/repos`,
      method: "GET",
      headers: {
        accept: "application/vnd.github.v3+json",
      },
      params,
    }),
};
