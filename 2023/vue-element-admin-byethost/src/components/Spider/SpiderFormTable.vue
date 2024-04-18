<template>
  <section class="">
    <form action="" size="small">
      <el-table :data="value || []" row-key="id" size="small" border :tree-props="table.props">
        <el-table-column align="center" show-overflow-tooltip type="selection"></el-table-column>
        <!-- <el-table-column show-overflow-tooltip align="center" prop="id" label="编号" width="100px"></el-table-column> -->
        <el-table-column align="center" type="index" label="序号"></el-table-column>
        <el-table-column align="center" prop="name" label="名称">
          <template slot-scope="{row}">
            <el-form-item style="flex-grow: 1;">
              <el-input v-model="row.value.name" size="mini"></el-input>
            </el-form-item>
          </template>
        </el-table-column>
        <el-table-column show-overflow-tooltip align="center" prop="selector" label="抽取规则" width="180px">
          <template slot-scope="{row}">
            <el-form-item>
              <el-input v-model="row.value.selector" size="mini"></el-input>
            </el-form-item>
          </template></el-table-column>
        <el-table-column show-overflow-tooltip align="center" prop="selector_type" label="规则类型" width="180px">
          <template slot-scope="{row}">
            <el-form-item>
              <el-input v-model="row.value.selector_type" size="mini"></el-input>
            </el-form-item>
          </template></el-table-column>
        <el-table-column show-overflow-tooltip align="center" prop="required" label="必需" width="62px">
          <template slot-scope="{row}">
            <el-form-item>
              <el-switch v-model="row.value.required"> </el-switch>
            </el-form-item>
          </template>
        </el-table-column>
        <el-table-column show-overflow-tooltip align="center" prop="repeated" label="重复" width="62px">
          <template slot-scope="{row}">
            <el-form-item>
              <el-switch v-model="row.value.repeated"> </el-switch>
            </el-form-item>
          </template>
        </el-table-column>
        <el-table-column show-overflow-tooltip align="center" prop="source_type" label="数据源" width="180px">
          <template slot-scope="{row}">
            <el-form-item>
              <el-input v-model="row.value.source_type" size="mini"></el-input>
            </el-form-item>
          </template>
        </el-table-column>
        <el-table-column show-overflow-tooltip align="center" prop="filter" label="过滤器" width="180px">
          <template slot-scope="{row}">
            <el-form-item>
              <el-input v-model="row.value.filter" size="mini"></el-input>
            </el-form-item>
          </template>
        </el-table-column>
        <el-table-column show-overflow-tooltip align="center" label="操作" width="200px">
          <template slot="header" slot-scope="scope">
            <el-button type="text" size="mini" @click="handleInsertChildRow(scope)">新增</el-button>
            <el-button type="text" size="mini" disabled style="color: #F56C6C;" @click="handleDeleteRow(scope)">删除</el-button>
          </template>
          <template slot-scope="scope">
            <el-button type="text" size="mini" @click="handleInsertChildRow(scope)">新增</el-button>
            <el-button type="text" size="mini" style="color: #F56C6C;" @click="handleDeleteRow(scope)">删除</el-button>
          </template>
        </el-table-column>
      </el-table>
    </form>
    <el-row :gutter="20">
      <el-col :span="4">1</el-col>
      <el-col :span="4">2</el-col>
      <el-col :span="4">3</el-col>
      <el-col :span="4">4</el-col>
      <el-col :span="4">5</el-col>
      <el-col :span="4">6</el-col>
    </el-row>
  </section>
</template>

<script>
import { Random } from 'mockjs'
export default {
  name: "SpiderFormTable",
  props: {
    value: {
      type: Array,
      default: () => []
    }
  },
  data() {
    return {
      table: {
        props: {
          children: 'children',
          hasChildren: 'hasChildren'
        },
        item: {
          id: () => Random.string(),
          children: [],
        },
        selection: [],
      }
    }
  },
  watch: {
    value: {
      handler(newV, oldV) {
        console.log("🚀 ~ file: SpiderFormTable.vue:107 ~ handler ~ newV:", newV);
        // this.$emit('input', newV)
      },
      // deep: true,
    }
  },
  created() {
    console.log("🚀 ~ file: SpiderFormTable.vue:114 ~ created ~ this.value:", this.value);
    if (!this.value) this.$emit('input', [])
  },
  methods: {
    handleInsertChildRow({ column, row, $index }) {
      // console.log("🚀 ~ file: SpiderFormTable.vue:78 ~  $index :", { column, row, $index, });
      const original = {
        id: Random.string(), type: 'object', value: {
          name: null,
        }, children: []
      }
      if (row) {
        this.insertChildRow(row.id, this.value);
        // if (!this.value[$index].children) this.value[$index].children = []
        // this.value[$index].children.push(item)
      } else {
        this.value.push(original)
      }
      // console.log("🚀 ~ file: SpiderFormTable.vue:78 ~  $index :", { column, row, $index, data: this.value });
      this.$emit('input', this.value);
      this.$forceUpdate()
    },
    handleDeleteRow({ column, row, $index }) {
      // console.log("🚀 ~ file: SpiderFormTable.vue:81 ~ handleDeleteRow ~ $index:", { column, row, $index, });
      if (row) {
        this.deleteChildRow(row.id, this.value);
      } else {
        // this.value.splice($index, 1)
      }
      // console.log("🚀 ~ file: SpiderFormTable.vue:81 ~ handleDeleteRow ~ $index:", { column, row, $index, data: this.value });
      this.$emit('input', this.value);
      this.$forceUpdate()
    },
    insertChildRow(key, children) {
      if (!children) return;
      const original = {
        id: Random.string(), type: 'object', value: {
          name: null,
        }, children: []
      }
      for (let i = 0; i < children.length; i++) {
        const item = children[i]
        if (item.id == key) {
          // console.log("🚀 ~ file: SpiderFormTable.vue:125 ~ insertChildRow ~ item:", item);
          if (!item.children) item.children = [];
          const result = item.children.push(original);
          return result
        } else {
          const result = this.insertChildRow(key, item.children)
          if (result) return true;
        }
      }
    },
    deleteChildRow(key, children) {
      if (!children) return;
      for (let i = 0; i < children.length; i++) {
        const item = children[i]
        if (item.id == key) {
          // console.log("🚀 ~ file: SpiderFormTable.vue:125 ~ insertChildRow ~ item:", item);
          return children.splice(i, 1)
        } else {
          this.deleteChildRow(key, item.children)
          const result = this.insertChildRow(key, item.children)
          if (result) return true;
        }
      }
    }
  }
}
</script>

<style lang="scss" scoped>
::v-deep {

  .el-table--small,
  .el-form-item__content {
    line-height: 23px !important;
  }

  .el-table__row>td:nth-child(3)>.cell {
    display: flex;
    flex: 1;

    .el-table__expand-icon {
      line-height: 28px;
    }
  }

  .el-table [class*=el-table__row--level] .el-table__expand-icon {
    // position: absolute;
    // left: 6px;
    // float: left;
  }

  // .el-table__indent {
  //   padding: 0 !important;
  // }
  .el-button.is-disabled {
    opacity: 0.7;
  }
}
</style>
