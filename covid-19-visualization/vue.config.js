module.exports = {
  outputDir: "dist",
  publicPath:
    process.env.NODE_ENV === "production" ? "/covid-19-visualization/" : "/",
  devServer: {
    port: 8080, // 自定义端口
    proxy: {
      "/sina": {
        target: "https://interface.sina.cn",
        pathRewrite: {
          "^/sina": ""
        }
      },
      "/163": {
        target: "https://c.m.163.com",
        pathRewrite: {
          "^/163": ""
        }
      },
      "/qq": {
        target: "https://view.inews.qq.com/",
        pathRewrite: {
          "^/qq": ""
        }
      }
    }
  },
  pluginOptions: {
    i18n: {
      locale: "zh-CN",
      fallbackLocale: "zh-CN",
      localeDir: "locales",
      enableInSFC: false
    }
  }
};
