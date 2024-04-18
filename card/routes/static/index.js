"use strict";
// 静态页面
(function (define) {
  define(function (require, exports, module) {
    module.exports = {
      name: "static",
      path: "/static",
      proxyPath: "/",
      component: "views/home/index",
      children: [
        {
          name: "Home",
          path: "/",
        },
        {
          children: [
            {
              name: "希腊字母",
              description: "希腊字母",
              path: "/greek",
              component: "views/text/index",
              children: "αβγδεϵϝζηθικλμνξοπρσςτυφϕχψω".split("").map((v) => {
                return {name: v};
              }),
            },
            {
              name: "英文字母",
              description: "英文字母",
              path: "/english",
              component: "views/text/index",
              children: "ABCDEFGHIJKLMNOPQRSTUVWXYZ".split("").map((v) => {
                return {name: v.toLocaleLowerCase() + "/" + v};
              }),
            },
            {
              name: "Bilibili Tarot",
              description: "哔哩哔哩塔罗牌",
              path: "/bilibili-tarot",
              component: "views/bilibili-tarot/index",
            },
            {
              name: "Yu-Gi-Oh",
              description: "游戏王",
              path: "/yu-gi-oh",
              component: "views/yu-gi-oh/index",
            },
            {
              name: "Decade",
              description: "假面骑士-帝骑",
              path: "/decade",
              component: "views/decade/index",
            },
            {
              name: "Hearthstone",
              description: "炉石传说",
              path:"/hearthstone",
              component: "views/hearthstone/index",

            }
          ],
        },
      ],
    };
  });
})(define);
