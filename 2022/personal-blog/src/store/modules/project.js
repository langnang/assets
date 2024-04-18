import { columns_list, projects_list } from "@/api/project";

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
    getColumnsList() {
      columns_list();
      projects_list();
    },
    // _(context, payload) { },
    // _({state,commit,getters},payload){}
  },
};
