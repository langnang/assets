<template>
  <div class="layout__container">
    <LayoutHeader />
    <el-scrollbar style="">
      <LayoutMain />
      <LayoutFooter />
    </el-scrollbar>
  </div>
</template>

<script>
import LayoutHeader from "./header";
import LayoutMain from "./main";
import LayoutFooter from "./footer";

export default {
  name: "Layout",
  components: {
    LayoutHeader,
    LayoutMain,
    LayoutFooter,
  },
};
</script>

<style lang="scss" scoped>
::v-deep .el-scrollbar__wrap {
  height: calc(100vh - 57px);
}
</style>
