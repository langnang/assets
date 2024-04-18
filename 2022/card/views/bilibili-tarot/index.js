"use strict";
(function (define) {
  define(function (require, exports, module) {
    const echo = require("echo-js");
    module.exports = {
      template: require("text!./../../views/index.hbs"),
      run: function ({ render, route, template }) {
        const cards = [
          "./views/bilibili-tarot/img/8ef262b59e981c55e9a2e3830687b9c8331f875f.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/994873577f88483c1f31b71b8b53491be80aadfb.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/0f11d20001170e758a428514583ec0b6aa5478c4.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/98cf40b39057d470fe5715c6fcdfc3c8c7582000.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/28bcd40ac463f97174f4ccf32ed57c313f0fba5d.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/7f4a6893370afac5bbcb462d478aa9556f77a862.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/ec1033a3ec42072a02a2297dad253c83708af84f.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/cc552220e63c6291206a6dc08033d1c9beb3a864.jpg_942w_1889h_progressive.jpg",
          "./views/bilibili-tarot/img/444225d30bae9b0dd76f96f639c26820b20ed824.jpg_942w_1889h_progressive.jpg",
        ].map((v) => {
          return { name: "...", img: v };
        });
        console.log(cards);
        render({ children: [{ children: cards }] });
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
