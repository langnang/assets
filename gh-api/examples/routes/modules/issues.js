import Layout from "./../../layout";

export default [
  {
    path: "/issues",
    component: Layout,
    children: [
      {
        path: "list-repository-issues",
        component: () =>
          import("./../../views/issues/list-repository-issues.vue"),
        meta: { title: "List repository issues" },
      },
    ],
  },
];
