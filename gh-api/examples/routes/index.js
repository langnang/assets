import Vue from "vue";
import VueRouter from "vue-router";

import Layout from "./../layout";

import ErrorRoute from "./../views/error.vue";
import issuesRoutes from "./modules/issues";

Vue.use(VueRouter);
const router = new VueRouter({
  mode: "hash",
  routes: [
    {
      path: "/",
      component: Layout,
      children: [
        {
          path: "/",
          component: () => import("./../views/home.vue"),
          meta: { title: "Home" },
        },
      ],
    },
    {
      path: "/emojis",
      component: Layout,
      children: [
        {
          path: "get-emojis",
          component: () => import("./../views/emojis/get-emojis.vue"),
          meta: { title: "Get emojis" },
        },
      ],
    },
    ...issuesRoutes,
    {
      path: "*",
      component: ErrorRoute,
      meta: {
        title: "Error",
      },
    },
  ],
});
router.beforeEach((to, from, next) => {
  to.meta.title += " | GitHub API";
  next();
});

export default router;
