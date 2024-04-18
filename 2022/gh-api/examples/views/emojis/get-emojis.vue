<template>
  <div>
    <h1>Get emjios</h1>
    <el-row>
      <el-col :span="4" v-for="(emoji, key) in emojis" :key="key">
        {{ key }}
        <el-image :src="emoji" lazy></el-image>
      </el-col>
    </el-row>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters(["emojis"]),
  },
  created() {
    this.$store.dispatch("emojis/getEmojis");
  },
};
</script>
