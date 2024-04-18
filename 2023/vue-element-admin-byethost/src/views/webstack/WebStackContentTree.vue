<template>
  <div class="app-container webstack webstack-branch">
    <el-card data-role="header">
      <span class="el-card-header__title">{{ query.name }}</span>
    </el-card>
    <el-card data-role="main">
      <el-tree
        :data="category.data"
        :props="category.prop"
        :load="handleLoadTreeNode"
        lazy
        @node-click="handleTreeNodeClick"
        @node-contextmenu="showMenu"
      >
        <span slot-scope="{ node, data }">
          <span>[{{ data.type }}]{{ data.name || data.title }}</span>
        </span>
      </el-tree>
    </el-card>
    <el-card data-role="footer">
      <el-button size="small" type="primary" @click="$emit('toggle',{to:-1})">返回</el-button>
    </el-card>
    <vue-context-menu
      :context-menu-data="contextMenuData"
      :transfer-index="transferIndex"
      @Handler1="Handler_A(index)"
      @Handler2="Handler_B(index)"
      @Handler3="Handler_C(index)"
      @Handler4="Handler_D(index)"
      @Handler5="Handler_E(index)"
    ></vue-context-menu>
    <el-row :gutter="20">
      <el-col :span="8">
        <el-card>
          <div slot="header" class="clearfix">
            <span class="el-card-header__title">分类树</span>
            <span class="el-card-header__operate">
              <el-button size="mini" icon="el-icon-search" circle></el-button>
              <el-button size="mini" type="primary" icon="el-icon-edit" circle></el-button>
              <el-button size="mini" type="success" icon="el-icon-check" circle></el-button>
              <el-button size="mini" type="info" icon="el-icon-message" circle></el-button>
              <el-button size="mini" type="warning" icon="el-icon-star-off" circle></el-button>
              <el-button size="mini" type="danger" icon="el-icon-delete" circle></el-button>
            </span>
          </div>
          <el-tree
            :data="category.data"
            :props="category.prop"
            show-checkbox
            @node-click="handleTreeNodeClick"
          ></el-tree>
        </el-card>
      </el-col>
      <el-col :span="16">
        <el-card>
          <div slot="header" class="clearfix">
            <span class="el-card-header__title">内容列表</span>
            <span class="el-card-header__operate">
              <el-button size="mini" icon="el-icon-search" circle></el-button>
              <el-button size="mini" type="primary" icon="el-icon-edit" circle></el-button>
              <el-button size="mini" type="success" icon="el-icon-check" circle></el-button>
              <el-button size="mini" type="info" icon="el-icon-message" circle></el-button>
              <el-button size="mini" type="warning" icon="el-icon-star-off" circle></el-button>
              <el-button size="mini" type="danger" icon="el-icon-delete" circle></el-button>
            </span>
          </div>
          <el-table :data="content.data" size="small" border>
            <el-table-column align="center" show-overflow-tooltip type="selection" width="40"></el-table-column>
            <el-table-column align="center" show-overflow-tooltip type="index" label="序号" width="60"></el-table-column>
            <el-table-column align="center" show-overflow-tooltip prop="title" label="名称"></el-table-column>
            <el-table-column align="center" show-overflow-tooltip prop="text" label="标识"></el-table-column>
          </el-table>
        </el-card>
      </el-col>
    </el-row>
  </div>
</template>

<script>
import { selectTree, select_meta_tree, select_meta_list } from '@/api/webstack'

export default {
  name: 'WebStackContentTree',
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
      category: {
        loading: false,
        prop: {
          label: 'name',
          children: 'children'
        },
        data: [],
      },
      content: {
        data: [],
      },
      transferIndex: null, // Show the menu that was clicked
      contextMenuData: {
        menuName: 'demo',
        axis: {
          x: null,
          y: null
        },
        menulists: [
          {
            btnName: '选项1',
            icoName: 'fa fa-home fa-fw',
            children: [
              {
                icoName: 'fa fa-adn',
                btnName: '选项1-1',
                // submenu (子菜单)
                children: [
                  {
                    icoName: 'fa fa-file',
                    // submenu (子菜单)
                    btnName: '选项1-1-1',
                    children: [
                      {
                        icoName: 'fa fa-android',
                        fnHandler: 'Handler1',
                        btnName: '选项1-1-1'
                      }
                    ]
                  }
                ]
              }
            ]
          },
          {
            btnName: '选项2',
            children: [
              {
                fnHandler: 'Handler5',
                btnName: '选项2-1'
              }
            ]
          },
          {
            btnName: '选项3',
            fnHandler: 'Handler4'
          },
          {
            btnName: '选项4',
            disabled: true
          }
        ]
      }
    }
  },
  created() {
    console.log(this.query)
    // select_meta_list({ parent: this.query.mid, type: 'category' }).then(res => {
    //   const { data } = res.data
    //   this.category.data = data
    // })
  },
  methods: {
    handleLoadTreeNode(node, resolve) {
      console.log('handleLoadTreeNode', { node, resolve })
      const data = { parent: 0, type: 'category' }
      if (node.level === 0) {
        data.parent = this.query.mid
        // return resolve([{ name: 'region' }])
      }
      if (node.level > 0) {
        data.parent = node.data.mid
      }
      return select_meta_list(data).then(res => {
        const contents = node.data.contents || []
        const { data } = res.data
        // this.category.data = data
        return resolve([...data, ...contents])
      })
      // setTimeout(() => {
      //   const data = [{
      //     name: 'leaf',
      //     leaf: true
      //   }, {
      //     name: 'zone'
      //   }]
      //
      //   resolve(data)
      // }, 500)
    },
    handleTreeNodeClick(data, node, el) {
      console.log('handleTreeNodeClick', arguments)
      this.content.data = data.contents
    },
    showMenu(event, data, node, $el) {
      console.log({ event, data, node, $el })
      this.transferIndex = 1 // tranfer index to child component
      event.preventDefault()
      var x = event.clientX
      var y = event.clientY
      this.contextMenuData.axis = {
        x,
        y
      }
    },
    Handler_A(index) {
      console.log('index:', index, '选项1-1-1绑定事件执行')
    },
    Handler_B(index) {
      console.log('index:', index, '选项1-1-2绑定事件执行')
    },
    Handler_C(index) {
      console.log('index:', index, '选项1-2-1绑定事件执行')
    },
    Handler_D(index) {
      console.log('index:', index, '选项1-2-2绑定事件执行')
    },
    Handler_E(index) {
      console.log('index:', index, '选项2-1绑定事件执行')
    }
  }
}
</script>

<style></style>
