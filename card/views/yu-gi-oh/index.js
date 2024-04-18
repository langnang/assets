"use strict";
(function (define) {
  define(function (require, exports, module) {
    const echo = require("echo-js");
    const cards = require("json!./card.json");
    module.exports = {
      template: require("text!./../../views/index.hbs"),
      run: function ({render, route, template}) {
        render({
          children: [{
            children: cards.map((v) => {
              return {name: "...", img: "http://img-onedrive.langnang.ml/%E6%B8%B8%E6%88%8F%E7%8E%8B/484x700/" + v.img};
            })
          }]
        });
        echo.init({
          offset: 100,
          throttle: 150,
          unload: false,
          callback: function (element, op) {
            // console.log(element, "has been", op + "ed");
          },
        });
      },
    };
  });
})(define);
