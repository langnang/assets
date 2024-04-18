<template>
  <div v-loading="branch.loading" class="app-container webstack webstack-home">
    <el-row :gutter="20">
      <el-col v-for="item in branch.data" :key="item.mid" :span="6">
        <el-card
v-contextmenu:contextmenu
shadow="hover"
style="text-align: center;"
                 @click.native="$emit('toggle',{to:'content-tree',query:item})"
        >
          {{ item.name }}
        </el-card>
      </el-col>
      <el-col :span="6">
        <el-card shadow="hover" style="text-align: center;" @click="handleInsertBranch">
          <i class="el-icon-plus"></i>
        </el-card>
      </el-col>
    </el-row>
    <v-contextmenu ref="contextmenu">
      <v-contextmenu-item @click="handleInsertBranch">新建</v-contextmenu-item>
      <v-contextmenu-item @click="handleDeleteBranch">删除</v-contextmenu-item>
      <v-contextmenu-item @click="handleUpdateBranch">修改</v-contextmenu-item>
      <v-contextmenu-item @click="handleSelectBranch">详情</v-contextmenu-item>
    </v-contextmenu>
  </div>
</template>

<script>
import { selectBranches, selectTree, select_meta_list } from '@/api/webstack'

export default {
  name: 'WebStackBranch',
  components: {},
  props: {
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
      branch: {
        loading: false,
        data: []
      },
      category: {
        prop: {
          label: 'name',
          children: 'children'
        },
        data: [],
      },
      content: {
        data: [],
      }
    }
  },
  created() {
    this.branch.loading = true
    select_meta_list({ type: 'branch', parent: 0 }).then(res => {
      const { data } = res.data
      this.branch.data = data
    }).finally(() => {
      this.branch.loading = false
    })
  },
  methods: {
    handleInsertBranch() {
    },
    handleDeleteBranch() {
    },
    handleUpdateBranch() {
    },
    handleSelectBranch() {
    },
    handleTableRowClick(row, column, event) {
      selectTree({ branch: row.mid }).then(res => {
        const { data } = res
        this.category.data = data
      })
    },
    handleTreeNodeClick(data, node, el) {
      console.log('handleTreeNodeClick', arguments)
      this.content.data = data.contents
    }
  }
}
</script>
