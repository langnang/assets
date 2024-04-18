import axios from "./../../plugins/axios";
export default {
  // Get emojis
  "GET /emojis": () =>
    axios({
      url: "/emojis",
      method: "get",
      header: {
        accept: "application/vnd.github.v3+json",
      },
    }),
};
