export default {
  namespaced: true,
  state: {
    count: 1,
    list: {},
  },
  mutations: {
    SET_EMOJIS(state, list) {
      state.list = list;
    },
    // _(state, payload) { }
  },
  getters: {
    // _: (state, getters) => { }
  },
  actions: {
    getEmojis({ commit }) {
      this._vm.$gh_api("GET /emojis").then((res) => {
        commit("SET_EMOJIS", res);
      });
    },
  },
};
