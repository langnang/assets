export default {
  // Request a user's GitHub identity
  "GET /login/oauth/authorize": (config) =>
    window.axios({
      url: "https://github.com/login/oauth/authorize",
      ...config,
    }),
};
