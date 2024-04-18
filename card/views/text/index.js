"use strict";
(function (define) {
  define(function (require, exports, module) {
    const echo = require("echo-js");
    module.exports = {
      template: require("text!./../../views/index.hbs"),
      run: function ({ render, route, template }) {
        render({ children: [{ children: route.children }] });
      },
    };
  });
})(define);
