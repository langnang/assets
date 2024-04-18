<template>
  <div id="app">
    <router-view v-wechat-title="$route.meta.title"></router-view>
  </div>
</template>

<script>
export default {
  name: "App",
  components: {},
  mounted() {
    this.$store.dispatch("getBlog");
  },
};
</script>

<style lang="scss">
html,
body {
  margin: 0;
  padding: 0;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background: url(~@/assets/tile.png);
}
.particles-js-canvas-el {
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
  background: url(~@/assets/tile.png);
}
</style>
