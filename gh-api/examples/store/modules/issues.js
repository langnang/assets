export default {
  namespaced: true,
  state: {
    count: 1,
    repoList: [],
  },
  mutations: {
    SET_REPO_LIST(state, list) {
      state.repoList = list;
    },
    // _(state, payload) { }
  },
  getters: {
    // _: (state, getters) => { }
  },
  actions: {
    getRepoList({ commit, rootGetters }) {
      console.log(rootGetters);
      this._vm
        .$gh_api("GET /repos/{owner}/{repo}/issues", rootGetters.pathParams)
        .then((res) => {
          console.log(res);
          commit("SET_REPO_LIST", res);
        });
    },
    // _(context, payload) { },
    // _({state,commit,getters},payload){}
  },
};
