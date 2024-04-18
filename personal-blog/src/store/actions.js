export default {
  // _(context, payload) { },
  // _({state,commit,getters},payload){}

  getBlog({ commit }) {
    const axios = this._vm.$axios;
    axios({
      url: "/github-api/users/langnang/repos",
    }).then((res) => {
      commit("project/SET_LIST", res);
    });
  },
};
