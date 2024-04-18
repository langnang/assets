"use strict";
(function (define) {
  define(function (require, exports, module) {
    module.exports = {
      template: require("text!./../../views/index.hbs"),
      run: function ({ render, route, template }) {
        console.log(route);
        route.children = route.children.filter(
          (item) =>
            item.path !== "/dev" && item.children && item.children.length > 0
        );

        render(route);
      },
    };
  });
})(define);
