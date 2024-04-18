<template>
  <section>
    <el-card :data-role="role">
      <el-tree ref="tree" :data="data" default-expand-all :default-checked-keys="defaultCheckedKeys" node-key="cid" :props="tree.props" :show-checkbox="showCheckbox" @check-change="handleTreeCheckChange">
      </el-tree>
    </el-card>
  </section>
</template>

<script>
export default {
  name: 'ContentTree',
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
    showCheckbox: {
      type: Boolean,
      default: false
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
    }
  },
  data() {
    return {
      loading: false,
      tree: {
        data: [],
        selection: [],
        props: {
          label: 'title',
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

<style scoped></style>
