<template>
  <div>
    <el-input
      placeholder="请输入内容"
      v-model="title"
      clearable
      @change="handleQuery"
    >
    </el-input>
    <br />
    <br />
    <i>科技改变生活，智慧创造未来</i>
    <br />
    <el-tag v-for="tab in tabs" :key="tab.prefix">{{ tab.prefix }}</el-tag>
    <br />
    <br />
    <el-tabs
      type="border-card"
      :stretch="true"
      @tab-click="handleTabClick"
      v-loading="loading"
    >
      <el-tab-pane
        v-for="tab in tabs"
        :label="tab.prefix"
        :key="tab.prefix"
        :lazy="true"
      >
        <span slot="label">
          <el-link
            icon="el-icon-link"
            :href="tab.siteUrl"
            :underline="false"
            target="_blank"
          ></el-link>
          {{ tab.prefix }}
          <el-badge class="mark" :value="tab.contents" type="info" />
        </span>
        <el-skeleton :rows="12" animated v-if="tab.loading" />
        <div v-else>
          <el-scrollbar style="height: calc(100vh - 280px)">
            <el-card
              v-for="item in tab.list"
              :key="item.cid"
              shadow="hover"
              :close-on-click-modal="false"
              :close-on-press-escape="false"
              @click.native="handleClickCard(item)"
              style="cursor: pointer"
            >
              <p style="height: 20px">
                {{ item.title }}
                <el-tag
                  v-for="tag in item.metas.filter((v) => v.type == 'tag')"
                  :key="tag.mid"
                  size="mini"
                >
                  {{ tag.name }}
                </el-tag>
              </p>
            </el-card>
          </el-scrollbar>
          <el-pagination
            @size-change="handleSizeChange"
            @current-change="handleCurrentChange"
            :current-page="tab.currentPage"
            :page-sizes="[10, 20, 50, 100, 200, 300, 400]"
            :page-size="tab.pageSize"
            layout="total, sizes, prev, pager, next, jumper"
            :total="tab.total"
            style="margin-top: 16px"
          >
          </el-pagination>
        </div>
      </el-tab-pane>
    </el-tabs>
    <el-dialog :title="dialog.title" :visible.sync="dialog.visible">
      {{ dialog.text }}
    </el-dialog>
  </div>
</template>

<script>
import { getPostList, getList } from "@/apis";
export default {
  name: "home",
  components: {},
  data() {
    return {
      loading: true,
      title: "",
      tabs: [],
      tabActive: 0,
      dialog: {
        visible: false,
        title: "",
        text: "",
      },
    };
  },
  filters: {},
  created() {
    const vm = this;
    getList()
      .then((res) => {
        console.log(res);
        vm.tabs = res.map((item) => {
          return {
            ...item,
            list: [],
            loading: false,
            pageSize: 10,
            currentPage: 1,
          };
        });
        vm.handleQuery();
      })
      .finally(() => {
        vm.loading = false;
      });
  },
  methods: {
    handleClickCard(row) {
      console.log(row);
      this.dialog.title = row.title;
      this.dialog.text = row.text;
      this.dialog.visible = true;
    },
    handleSizeChange(val) {
      const vm = this;
      const $index = vm.tabActive;
      vm.tabs[$index].pageSize = val;
      vm.handleQuery();
    },
    handleCurrentChange(val) {
      const vm = this;
      const $index = vm.tabActive;
      vm.tabs[$index].currentPage = val;
      vm.handleQuery();
    },
    handleTabClick(tab) {
      const vm = this;
      vm.tabActive = tab.index;
      vm.handleQuery();
    },
    handleQuery() {
      const vm = this;
      const $index = vm.tabActive;
      vm.tabs[$index].loading = true;

      getPostList({
        prefix: vm.tabs[$index].prefix,
        pageSize: vm.tabs[$index].pageSize,
        currentPage: vm.tabs[$index].currentPage,
        title: vm.title,
      })
        .then((res) => {
          vm.tabs[$index].list = res.rows;
          vm.tabs[$index].total = res.total;
        })
        .catch(() => {
          vm.tabs[$index].list = [];
        })
        .finally(() => {
          vm.tabs[$index].loading = false;
        });
    },
  },
};
</script>

<style scoped>
.el-tag + .el-tag {
  margin-left: 10px;
}

::v-deep .el-card__body {
  padding-top: 8px;
  padding-bottom: 8px;
}
.el-card + .el-card {
  margin-top: 6px;
}
</style>
