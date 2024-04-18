<template>
  <div>
    <LayoutSidebar />
    <LayoutHeader />
    <router-view />
  </div>
</template>

<script>
import LayoutHeader from "./header";
import LayoutSidebar from "./sidebar";
export default {
  name: "Layout",
  components: {
    LayoutHeader,
    LayoutSidebar,
  },
};
</script>
