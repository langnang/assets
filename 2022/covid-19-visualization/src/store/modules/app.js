import { get_163_covid, get_sina_covid, get_qq_covid } from "../../apis";

export default {
  namespaced: true,
  state: {
    count: 1,
    sina: {},
    163: {},
    qq: {}
  },
  mutations: {
    SET_COUNT(state, payload) {
      state.count = payload;
    },
    SET_163(state, payload) {
      state["163"] = payload;
    },
    SET_SINA(state, payload) {
      state.sina = payload;
    },
    SET_QQ(state, payload) {
      console.log(payload);
      state.qq = payload;
    }
  },
  actions: {
    getCount() {},
    getData({ commit }) {
      get_163_covid().then(res => {
        commit("SET_163", res.data);
      });
      get_sina_covid().then(res => {
        commit("SET_SINA", res.data);
      });
      get_qq_covid().then(res => {
        commit("SET_QQ", JSON.parse(res.data));
      });
    }
  }
};
