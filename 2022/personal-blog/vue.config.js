module.exports = {
  outputDir: "dist",
  publicPath:
    process.env.NODE_ENV === "production" ? "/langnang.github.io/" : "/",
  devServer: {
    port: 8080, // 自定义端口
    proxy: {
      "/github-api": {
        target: "https://api.github.com/",
        pathRewrite: {
          "^/github-api": "",
        },
      },
    },
  },
  chainWebpack: (config) => {
    config.plugin("html").tap((args) => {
      args[0].title = "Langnang"; // 自定义标题
      return args;
    });
  },
};
