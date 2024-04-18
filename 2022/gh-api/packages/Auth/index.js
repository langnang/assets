import axios from "../plugins/axios";

const gh_auth_login = (config) =>
  axios({
    url: "https://github.com/login/oauth/access_token",
    method: "post",
    data: {
      client_id: config.data.client_id,
      client_secret: config.data.client_secret,
      code: config.data.code,
    },
    headers: {
      accept: "application/json",
    },
  });

const gh_auth = () => {
  return {
    login: (config) => gh_auth_login(config),
  };
};
export default gh_auth;
