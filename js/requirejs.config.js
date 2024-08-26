

(function () {
  "use strict";
  fetch("/storage/data/dependency.json").then(res => res.json()).then(res => {
    console.log(`fetch`, res['npmjs.com']);
  })
  requirejs.config({
    baseUrl: "https://unpkg.com/",
    path: {
      "jquery": "jquery@",
      "bootstrap": "",
      "bootstrap@3": "",
      "bootstrap@4": "",
      "bootstrap@5": "",
    },
  })
})()