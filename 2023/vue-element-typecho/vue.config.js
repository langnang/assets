module.exports = {
  outputDir: "dist",
  publicPath: process.env.NODE_ENV === "production" ? "/typecho-web/" : "/",
  devServer: {},
  chainWebpack: function(config) {
    config.plugin("html").tap(function(args) {
      args[0].title = "Web Typecho - Langnang"; // 自定义标题
      return args;
    });
  }
};
