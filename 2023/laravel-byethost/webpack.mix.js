const mix = require('laravel-mix');
const { isString, isEmpty } = require('lodash');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
const copyDirectories = {
  'animejs': 'node_modules\\animejs\\lib',
  'autosize': 'node_modules\\autosize\\dist',
  'axios': 'node_modules\\axios\\dist',
  'bootstrap': 'node_modules\\bootstrap\\dist',
  'bootstrap-icons': 'node_modules\\bootstrap-icons\\font',
  'd3': 'node_modules\\d3\\dist',
  'dplayer': 'node_modules\\dplayer\\dist',
  'echarts': 'node_modules\\echarts\\dist',
  'fontawesome': { 'css': 'node_modules\\@fortawesome\\fontawesome-free\\css', 'webfonts': 'node_modules\\@fortawesome\\fontawesome-free\\webfonts' },
  'holderjs': '',
  'iconify': '',
  'jquery': 'node_modules\\jquery\\dist',
  'jquery.quicksearch': 'node_modules\\jquery.quicksearch\\dist',
  'lodash': '',
  'lozad': '',
  'markdown-it': 'node_modules\\markdown-it\\dist',
  'masonry-layout': 'node_modules\\masonry-layout\\dist',
  'monaco-editor': { 'min': 'node_modules/monaco-editor/min', 'min-maps': 'node_modules/monaco-editor/min-maps' },
  'normalize.css': '',
  'perfect-scrollbar': 'node_modules\\perfect-scrollbar\\dist',
};
// for (let key in copyDirectories) {
//   const path = copyDirectories[key]
//   // 路径字符串
//   if (isString(path)) {
//     if (isEmpty(path)) continue;
//     mix.copyDirectory(path, `public/vendor/${key}`);
//   }
//   // 路径对象
//   else {
//     for (let dir in path) {
//       if (isEmpty(path[dir])) continue;
//       mix.copyDirectory(path[dir], `public/vendor/${key}/${dir}`);
//     }
//   }
//   console.log(key, path)
// }
// copyDirectories.forEach(v => {
//   mix.copyDirectory(v[0], v[1]);
// })
// const copyFiles = {
//   'require.js': ['node_modules\\require.js\\require.js', 'node_modules\\require.js\\require.min.js']
// };
// for (let key in copyFiles) {
//   const path = copyFiles[key]
//   // 路径字符串
//   if (isString(path)) {
//     if (isEmpty(path)) continue;
//     mix.copyFiles(path, `public/vendor/${key}`);
//   }
//   // 路径对象
//   else {
//     for (let dir in path) {
//       if (isEmpty(path[dir])) continue;
//       mix.copyDirectory(path[dir], `public/vendor/${key}/${dir}`);
//     }
//   }
//   console.log(key, path)
// }
// copyFiles.forEach(v => {
//   mix.copyFiles(v[0], v[1]);
// })

// mix.scripts(['resources/js/app.js'], 'public/js/app.js')
//   .styles(['resources/css/app.css'], 'public/css/app.css', [
//     //
//   ]);

mix
  .scripts(['resources/js/app.js'], 'public/js/app.js')
  .sass('resources/sass/app.sass', 'public/css');

mix
  .scripts(['resources/js/home.js'], 'public/js/home.js')
  .styles(['resources/css/home.css'], 'public/css/home.css', [
    //
  ]);
mix
  .scripts(['resources/js/webstack.js'], 'public/js/webstack.js')
  .styles(['resources/css/webstack.css'], 'public/css/webstack.css', [
    //
  ]);
mix
  .scripts(['resources/js/webshell.js'], 'public/js/webshell.js');
