<template>
  <div>
    <h1>List repository issues</h1>
    <el-card>
      <div slot="header">
        <el-alert title="GET" type="success" effect="dark" :closable="false" />
        <el-alert
          title="/repos/{owner}/{repo}/issues"
          type="info"
          :closable="false"
        />
        <span class="el-card__header--title">
          卡片名称
        </span>
        <el-button-group class="el-card__header--right">
          <el-button type="text" icon="el-icon-refresh"></el-button>
          <el-button type="text" icon="el-icon-close"></el-button>
        </el-button-group>
      </div>
      <el-collapse accordion>
        <el-collapse-item v-for="issue in repoIssues" :key="issue.node_id">
          <template slot="title">
            {{ issue.title }}
          </template>
          <div>
            {{ issue.body }}
          </div>
        </el-collapse-item>
      </el-collapse>
    </el-card>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters(["repoIssues"]),
  },
  created() {
    this.$store.dispatch("issues/getRepoList");
  },
};
</script>
