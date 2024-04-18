import Vue from "vue";
import VueRouter from "vue-router";

import Layout from "@/layout/index.vue";

import ErrorRoute from "./../views/error.vue";

Vue.use(VueRouter);
const router = new VueRouter({
  routes: [
    {
      path: "/",
      component: Layout,
      meta: {
        title: "Home",
      },
      children: [
        {
          path: "/",
          component: () => import("@/views/home.vue"),
          meta: {
            title: "Home",
          },
        },
        {
          path: "blog/:id",
          component: () => import("@/views/issue.vue"),
        },
        {
          path: "/contact",
          component: () => import("@/views/contact.vue"),
          meta: { title: "Concat" },
        },
        {
          path: "/projects",
          component: () => import("@/views/projects.vue"),
          meta: { title: "Projects" },
        },
        {
          path: "/resume",
          component: () => import("@/views/resume.vue"),
          meta: { title: "Resume" },
        },
      ],
    },
    {
      path: "*",
      component: ErrorRoute,
      meta: {
        title: "Home",
      },
    },
  ],
});
router.beforeEach((to, from, next) => {
  to.meta.title += " · Langnang";
  next();
});

export default router;
