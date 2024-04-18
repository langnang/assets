import Vue from "vue";
import App from "./App.vue";
import router from "./routes";
import store from "./store";
import "./plugins/element";
import "./plugins/vue-wechat-title";
import "./plugins/gh-api";
import "./styles/index.scss";

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");
