<template>
  <section class="app-container meta meta-tree">
    <el-card data-role="header">
      <span class="el-card-header__title">
        MetaTreeView
      </span>
      <span class="el-card-header__operate">
        <el-tooltip effect="dark" content="查询" placement="bottom">
          <el-button size="mini" circle type="default" icon="el-icon-search" @click="handleSelect"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="新增" placement="bottom">
          <el-button size="mini" circle type="primary" icon="el-icon-plus" @click="handleCreateMeta"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="更新" placement="bottom">
          <el-button size="mini" circle type="warning" icon="el-icon-edit" @click="handleUpdateMeta"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="发布" placement="bottom">
          <el-button size="mini" circle type="success" @click="handleReleaseMeta">
            <svg-icon icon-class="guide" />
          </el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="删除" placement="bottom">
          <el-button size="mini" circle type="danger" icon="el-icon-delete" @click="handleDeleteMeta"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="上传" placement="bottom">
          <el-button size="mini" circle type="primary">
            <font-awesome-icon :icon="['fas', 'upload']" />
          </el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="下载" placement="bottom">
          <el-button size="mini" circle type="primary" disabled>
            <font-awesome-icon :icon="['fas', 'download']" />
          </el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="帮助" placement="bottom">
          <el-button size="mini" circle type="success" icon="el-icon-info" @click="handleHelp">
          </el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="返回" placement="bottom">
          <el-button size="mini" circle type="info" @click="$emit('toggle', { to: 'content-table' })">
            <font-awesome-icon :icon="['fas', 'hand-point-left']" />
          </el-button>
        </el-tooltip>
      </span>
    </el-card>
    <el-row v-loading="loading" :gutter="20">
      <el-col :span="18">
        <MetaTree role="main" :data="tree.data" />
      </el-col>
      <el-col :span="6">
        <MetaTree role="main" :data="table.data" :attrs="{ draggable: false }" />
      </el-col>
    </el-row>
  </section>
</template>

<script>
import MetaTree from '@/components/Meta/MetaTree.vue';
import * as requests from '@/api/base'
export default {
  name: "MetaTreeView",
  components: {
    MetaTree
  },
  props: {
    target: {
      type: String,
      default: '',
    },
    query: {
      type: Object,
      default: () => ({})
    },
    history: {
      type: Array,
      default: () => []
    },
  },
  data() {
    return {
      loading: false,
      requests,
      tree: {
        loading: false,
        data: [],
        selection: [],
      },
      table: {
        loading: false,
        data: [],
        selection: [],
        checkAll: false,
        isIndeterminate: false,
        inputVisible: false,
        inputValue: '',
      },
      form: {
        data: {
          tag: '',
        }
      },
    }
  },
  created() {
    this.handleSelect()
  },
  methods: {
    handleCheckAllChange(val) {
      this.table.selection = val ? this.table.data : [];
      this.table.isIndeterminate = false;
    },
    handleCheckedCitiesChange(value) {
      const checkedCount = value.length;
      this.table.checkAll = checkedCount === this.table.data.length;
      this.table.isIndeterminate = checkedCount > 0 && checkedCount < this.table.data.length;
    },
    handleSelect() {
      this.loading = true
      Promise.all([
        this.requests.select_meta_tree(this.target, { type: 'category', parent: 0 }),
        this.requests.select_meta_list(this.target, { type: 'tag', page_size: 100 }),
      ]).then(res => {
        console.log("🚀 ~ file: MetaTreeView.vue:84 ~ handleSelect ~ res:", res);
        this.tree.data = res[0].data
        this.table.data = [{
          mid: 0,
          name: "全选",
          children: res[1].data.data
        }]
      }).finally(() => {
        this.loading = false
      })
      // this.requests.select_meta_tree(this.target, { type: 'category' }).then(res => {
      //   this.tree.data = res.data
      // }).finally(() => {
      //   this.loading = false
      // })
    },
    handleSelectCategory() { },
    handleSelectTag() { },
    handleClose(tag) {
      // this.table.data.splice(this.dynamicTags.indexOf(tag), 1);
    },

    showInput() {
      this.table.inputVisible = true;
      this.$nextTick(_ => {
        this.$refs.saveTagInput.$refs.input.focus();
      });
    },

    handleInputConfirm() {
      const inputValue = this.table.inputValue;
      if (inputValue) {
        // this.dynamicTags.push(inputValue);
      }
      this.table.inputVisible = false;
      this.table.inputValue = '';
    },
    handleCreateMeta() {
      this.$emit('toggle', {
        to: 'meta-form',
        query: {
          // ...this.requestParams,
        }
      })
    },
    handleUpdateMeta() { },
    handleReleaseMeta() { },
    handleDeleteMeta() { },
    handleHelp() {
      this.$alert('这是一段内容', '信息', {});
    }
  }
}
</script>

<style lang="scss" scoped>
::v-deep {
  .el-form-item {
    margin-bottom: 0px;
  }
}

.el-tag {
  margin-bottom: 10px;
  margin-right: 10px;
}

.button-new-tag {
  margin-right: 10px;
  height: 32px;
  line-height: 30px;
  padding-top: 0;
  padding-bottom: 0;
}

.input-new-tag {
  width: 90px;
  margin-right: 10px;
  vertical-align: bottom;
}

.el-checkbox-group {
  .el-checkbox {
    display: block;
    padding-left: 10px;
    line-height: 24px;
  }
}
</style>
