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
            children: cards
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
