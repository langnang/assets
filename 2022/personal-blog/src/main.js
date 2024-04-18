import Vue from "vue";
import App from "./App.vue";
import router from "./routes";
import store from "./store";
// import particlesData from "./particles.json";
import "./plugins/axios";
import "./plugins/element";
import "./plugins/fontawesome";
import "./plugins/moment";
import "./plugins/vue-wechat-title";
// import "particles.js";
import "./styles/index.scss";

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  render: (h) => h(App),
}).$mount("#app");

// window.particlesJS("app", particlesData);
