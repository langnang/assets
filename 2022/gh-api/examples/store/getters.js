export default {
  // _: (state, getters) => { }
  pathParams: (state) => state.pathParams,
  ghApiConfig: (state) => {
    return {
      owner: state.pathParams.owner,
      repo: state.pathParams.repo,
    };
  },
  emojis: (state) => state.emojis.list,
  repoIssues: (state) => state.issues.repoList,
};
