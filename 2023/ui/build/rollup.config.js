// rollup.config.js
import cleanup from 'rollup-plugin-cleanup';
import typescript from '@rollup/plugin-typescript';
import scss from 'rollup-plugin-scss'

import "./buildEntry";
export default [{
  // 核心选项
  /**
   * 输入(input -i/--input)
   * String 这个包的入口点 (例如：你的 main.js 或者 app.js 或者 index.js)
   */
  input: "src/main.ts",     // 必须
  // external,
  plugins: [
    cleanup(),
    typescript(),
    scss({
      output: true,

      // Filename to write all styles to
      output: './dist/css/ln.css',
    }),
  ],

  // // 额外选项
  // onwarn,

  // // danger zone
  // acorn,
  // context,
  // moduleContext,
  // legacy,
  output: [
    ...[
      {
        file: './dist/js/ln.js',
        format: 'umd',
      },
      {
        file: './dist/js/ln.amd.js',
        format: 'amd',
      },
      {
        file: './dist/js/ln.cjs.js',
        format: 'cjs',
      },
      {
        file: './dist/js/ln.es.js',
        format: 'es',
      }
    ].map(v => {
      return {
        ...v,
        name: 'ln',
        // String 是要使用的缩进字符串，对于需要缩进代码的格式（amd，iife，umd）。也可以是false（无缩进）或true（默认 - 自动缩进）
        indent: false,
        // true或false（默认为true） - 是否在生成的非ES6软件包的顶部包含'use strict'pragma。严格来说（geddit？），ES6模块始终都是严格模式，所以你应该没有很好的理由来禁用它。
        strict: true,
      }
    }),
  ],
  // output: {  // 必须 (如果要输出多个，可以是一个数组)
  //   // 核心选项
  //   file,    // 必须
  //   format,  // 必须
  //   name,
  //   globals,

  //   // 额外选项
  //   paths,
  //   banner,
  //   footer,
  //   intro,
  //   outro,
  //   sourcemap,
  //   sourcemapFile,
  //   interop,

  //   // 高危选项
  //   exports,
  //   amd,
  //   indent,
  //   strict
  // },
  watch: {
    exclude: 'node_modules/**'
  }
}, {
  input: "src/js/index.docs.ts",     // 必须
  // external,
  plugins: [
    cleanup(),
    typescript(),
  ],
  output: [
    ...[
      {
        file: './dist/js/ln.docs.js',
        format: 'umd',
      },
      {
        file: './dist/js/ln.amd.docs.js',
        format: 'amd',
      },
      {
        file: './dist/js/ln.cjs.docs.js',
        format: 'cjs',
      },
      {
        file: './dist/js/ln.es.docs.js',
        format: 'es',
      }
    ].map(v => {
      return {
        ...v,
        name: '__ln__',
        // String 是要使用的缩进字符串，对于需要缩进代码的格式（amd，iife，umd）。也可以是false（无缩进）或true（默认 - 自动缩进）
        indent: false,
        // true或false（默认为true） - 是否在生成的非ES6软件包的顶部包含'use strict'pragma。严格来说（geddit？），ES6模块始终都是严格模式，所以你应该没有很好的理由来禁用它。
        strict: true,
      }
    })
  ],
  watch: {
    exclude: 'node_modules/**'
  }
}];