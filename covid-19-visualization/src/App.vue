<template>
  <div id="app">
    <Map ref="map" />
    <div style="position:absolute;top:0;z-index:999;width:380px;">
      <NewTrend />
      <OtherTrend />
      <TopConfirm />
    </div>
    <MainInfo
      style="position:absolute;top:0;left:390px;z-index:999;width:calc(100vw - 770px);"
    />
    <div style="position:absolute;top:0;right:0;z-index:999;width:380px;">
      <ConfirmRate />
    </div>
  </div>
</template>

<script>
import Map from "@/components/Map";
import NewTrend from "@/components/NewTrend";
import OtherTrend from "@/components/OtherTrend";
import TopConfirm from "@/components/TopConfirm";
import ConfirmRate from "@/components/ConfirmRate";
import MainInfo from "@/components/MainInfo";
export default {
  name: "App",
  components: { Map, NewTrend, OtherTrend, ConfirmRate, MainInfo, TopConfirm },
  created() {
    this.$store.dispatch("app/getData");
  }
};
</script>

<style>
* {
  padding: 0;
  margin: 0;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  height: 100vh;
}
.draw {
  border: 1px solid #000;
}
</style>
