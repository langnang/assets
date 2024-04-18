import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    meta: {
      title: "首页"
    },
    component: () => import(/* webpackChunkName: "about" */ "../views/home")
  }
];

const router = new VueRouter({
  routes
});

export default router;
