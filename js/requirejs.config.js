

(function () {
  "use strict";
  window.$data = {};
  fetch("/storage/data/main.json").then(res => res.json()).then(res => {
    // console.log(`fetch`, res['requirejs']);
    $data['main'] = res;
    requirejs.config(res['requirejs'] || {})

    for (let key in res['requirejs']['define'] || {}) {
      define('$' + key, res['requirejs']['define'][key], function (...args) {
        console.log(args);
        //       $("#app").html(`<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
        //   <div class="spinner-border" role="status" style="width: 5rem; height: 5rem;">
        //     <span class="sr-only">Loading...</span>
        //   </div>


        // </div>

        // <div class="progress" style="height:3rem;">
        //   <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
        // </div>
        // `);
        require([`css!${location.href}/../style.css`, `${location.href}/../script.js`])
        return [...args];
      })
    }


    const script = document.querySelector('script[data-main]');
    // console.log(script);
    // console.log(script.getAttribute('data-main'));
    const searchParams = new URLSearchParams(script.getAttribute('data-main').split('?')[1]);
    const params = {};

    for (let pair of searchParams.entries()) {
      const [key, value] = pair;
      params[key] = value;
    }
    // console.log(params)
    if (params['module']) {
      require(['$' + params['module']])
    }

  })

})()