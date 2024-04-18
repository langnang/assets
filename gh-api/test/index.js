import gh_api from "./../lib/gh-api.umd.min";

gh_api({
  path: "", // 请求路径
  pathParams: {
    client_id: "",
    client_secret: "",
    code: "",
    comment_id: "",
    issue_number: "",
    org: "",
    owner: "",
    project_id: "",
    repo: "",
  }, // 请求参数
  oauth: {}, // GitHub 令牌
});
