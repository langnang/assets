import axios from "./../../plugins/axios";

import Assignees from "./Assignees";

export default {
  // List repository issues
  "GET /repos/{owner}/{repo}/issues": ({ owner, repo, params }) => {
    return axios({
      url: `/repos/${owner}/${repo}/issues`,
      method: "GET",
      header: {
        accept: "application/vnd.github.v3+json",
      },
      params,
    });
  },
  // Get an issue
  "GET /repos/{owner}/{repo}/issues/{issue_number}": ({
    owner,
    repo,
    issue_number,
    params,
  }) =>
    axios({
      url: `/repos/${owner}/${repo}/issues/${issue_number}`,
      method: "GET",
      header: {
        accept: "application/vnd.github.v3+json",
      },
      params,
    }),
  ...Assignees,
};
