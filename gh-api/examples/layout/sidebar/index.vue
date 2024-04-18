<template>
  <div style="width:240px;float:left;">
    <el-menu
      default-active="2"
      class="el-menu-vertical-demo"
      background-color="#545c64"
      text-color="#fff"
      active-text-color="#ffd04b"
      :router="true"
      @open="handleOpen"
      @close="handleClose"
    >
      <el-submenu
        v-for="item in routesList"
        :key="item.title"
        :index="item.title"
      >
        <template slot="title">
          <span>{{ item.title }}</span>
        </template>
        <el-menu-item
          v-for="i in item.children"
          :key="i.title"
          :index="item.path + '/' + i.path"
        >
          {{ i.title }}
        </el-menu-item>
      </el-submenu>
      <el-submenu index="1">
        <template slot="title">
          <i class="el-icon-location"></i>
          <span>导航一</span>
        </template>
        <el-menu-item-group>
          <template slot="title">分组一</template>
          <el-menu-item index="1-1">选项1</el-menu-item>
          <el-menu-item index="1-2">选项2</el-menu-item>
        </el-menu-item-group>
        <el-menu-item-group title="分组2">
          <el-menu-item index="1-3">选项3</el-menu-item>
        </el-menu-item-group>
        <el-submenu index="1-4">
          <template slot="title">选项4</template>
          <el-menu-item index="1-4-1">选项1</el-menu-item>
        </el-submenu>
      </el-submenu>
      <el-menu-item index="2">
        <i class="el-icon-menu"></i>
        <span slot="title">导航二</span>
      </el-menu-item>
      <el-menu-item index="3" disabled>
        <i class="el-icon-document"></i>
        <span slot="title">导航三</span>
      </el-menu-item>
      <el-menu-item index="4">
        <i class="el-icon-setting"></i>
        <span slot="title">导航四</span>
      </el-menu-item>
    </el-menu>
  </div>
</template>
<script>
export default {
  name: "LayoutSidebar",
  data() {
    return {
      routesList: [
        { title: "Actions" },
        { title: "Activity" },
        { title: "Apps" },
        { title: "Billing" },
        { title: "Checks" },
        { title: "Code scanning" },
        { title: "Codes of conduct" },
        {
          title: "Emojis",
          path: "emojis",
          children: [
            {
              title: "Get emojis",
              path: "get-emojis",
            },
          ],
        },
        { title: "GitHub Enterprise administration" },
        { title: "Gists" },
        { title: "Git database" },
        { title: "Gitignore" },
        { title: "Interactions" },
        {
          title: "Issues",
          path: "issues",
          children: [
            {
              title: "List repository issues",
              path: "list-repository-issues",
            },
          ],
        },
        { title: "Licenses" },
        { title: "Markdown" },
        { title: "Meta" },
        { title: "Migrations" },
        { title: "Organizations" },
        { title: "Projects" },
        { title: "Pulls" },
        { title: "Rate limit" },
        { title: "Reactions" },
        { title: "Repositories" },
        { title: "SCIM" },
        { title: "Search" },
        { title: "Teams" },
        { title: "Users" },
        { title: "Permissions required for GitHub Apps" },
      ],
    };
  },
  methods: {
    handleOpen(key, keyPath) {
      console.log(key, keyPath);
    },
    handleClose(key, keyPath) {
      console.log(key, keyPath);
    },
  },
};
</script>
