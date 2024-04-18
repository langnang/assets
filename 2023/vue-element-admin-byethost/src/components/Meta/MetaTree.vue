<template>
  <section>
    <el-card :data-role="role">
      <el-tree ref="tree" :data="data" default-expand-all :default-checked-keys="defaultCheckedKeys" :accordion="true" node-key="mid" :props="tree.props" :draggable="attrs && attrs.draggable == null ? true : attrs.draggable" show-checkbox v-bind="attrs" @check-change="handleTreeCheckChange" v-on="events">
        <div slot-scope="{node,data}" class="meta-tree-node">
          <span class="el-tree-node__label">{{ node.label }}</span>
          <span v-if="node.key !== 0" style="float:right">
            <el-tag size="small">{{ data.status }}</el-tag>
          </span>
        </div>
      </el-tree>
    </el-card>
  </section>
</template>

<script>
export default {
  name: 'MetaTree',
  props: {
    role: {
      type: String,
      default: 'section'
    },
    data: {
      type: Array,
      default: () => []
    },
    defaultCheckedKeys: {
      type: Array,
      default: () => []
    },
    request: {
      type: Object,
      default: () => ({})
    },
    requestParams: {
      type: Object,
      default: () => ({})
    },
    showColumns: {
      type: Array,
      default: () => []
    },
    showPagination: {
      type: Boolean,
      default: true
    },
    attrs: {
      type: Object,
      default: () => ({})
    },
    events: {
      type: Object,
      default: () => ({})
    }
  },
  data() {
    return {
      loading: false,
      tree: {
        data: [],
        selection: [],
        props: {
          label: 'name',
          children: 'children',
        }
      },
    }
  },
  created() {
  },
  methods: {
    handleTreeCheckChange(data, checked, indeterminate) {
      // console.log("🚀 ~ file: MetaTree.vue:68 ~ handleTreeCheckChange ~ handleTreeCheckChange:", { data, checked, indeterminate });
      // this.tree.selection = val;
    },
  }
}
</script>

<style lang="scss" scoped>
.meta-tree-node {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 14px;
  padding-right: 8px;
}
</style>
