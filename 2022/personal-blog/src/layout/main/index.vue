<template>
  <div class="layout-main__container">
    <keep-alive>
      <router-view></router-view>
    </keep-alive>
  </div>
</template>

<script>
export default {
  name: "LayoutMain",
};
</script>

<style scoped>
.layout-main__container {
  min-height: calc(100vh - 245px);
  width: 1200px;
  margin: 0 auto;
  margin-top: 50px;
}
</style>
