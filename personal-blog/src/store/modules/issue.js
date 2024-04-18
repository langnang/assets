export default {
  namespaced: true,
  state: {
    count: 1,
    list: [],
  },
  mutations: {
    SET_LIST(state, list) {
      state.list = list;
    },
    // _(state, payload) { }
  },
  getters: {
    // _: (state, getters) => { }
  },
  actions: {
    getList({ commit }) {
      this._vm
        .$axios({
          url:
            "https://api.github.com/repos/langnang/list-of-knowledge-and-skills/issues?state=closed",
        })
        .then((res) => {
          commit("SET_LIST", res);
        });
    },
    // _(context, payload) { },
    // _({state,commit,getters},payload){}
  },
};
