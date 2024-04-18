import Vue from "vue";
import Vuex from "vuex";
import store from "./modules/store";
import getters from "./getters";
import emojis from "./modules/emojis";
import issues from "./modules/issues";

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    store,
    emojis,
    issues,
  },
  state: {
    pathParams: {
      owner: "langnang",
      repo: "gh-api",
    },
  },
  getters,
});
