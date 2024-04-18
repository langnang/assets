<template>
  <section v-loading="loading">
    <el-card data-role="main">
      <el-table :data="table.data" size="small" border height="calc(100vh - 270px)" @selection-change="handleTableSelectionChange">
        <el-table-column align="center" show-overflow-tooltip type="selection"></el-table-column>
        <el-table-column v-for="key in query.$active.original_content.$tableColumns " :key="key" :align="query.$active.original_content[key].table.align || 'center'" show-overflow-tooltip :label="query.$active.original_content[key].label" :prop="key" :width="query.$active.original_content[key].table ? query.$active.original_content[key].table.width || '' : ''">
          <template :slot="query.$active.original_content[key].table && query.$active.original_content[key].table.header ? 'header' : 'useless'">
            <el-select v-if="query.$active.original_content[key].table && query.$active.original_content[key].table.header && query.$active.original_content[key].table.header.type === 'select'" v-model="form[key]" size="mini" :placeholder="query.$active.original_content[key].label" filterable clearable @change="forceUpdate($event)">
              <el-option v-for="option in query.$active.original_content[key].options(target)" :key="option.value" :value="option.value" :label="option.label"></el-option>
            </el-select>
            <el-input v-else v-model="form[key]" size="mini" :placeholder="query.$active.original_content[key].label" clearable @input="forceUpdate($event)" />
          </template>
          <template slot-scope="{row}">
            <span v-if="['name', 'title'].includes(key)">
              <el-tag size="mini" :type="row.draft ? 'info' : row.status == 'private' ? 'danger' : 'default'">
                {{ query.$active.original_content['status'].filter({ row, $index: 'status', $target: target, $this: query.$active.original_content['status'], $parent: query.$active.original_content, $value: row.draft ? 'draft' : null }) }}
              </el-tag>
              <i style="display: inline-block;width: 18px;line-height: 22px;vertical-align: middle;">
                <Ico :icon="row.ico" style="font-size: 18px;" />
              </i>
              {{ row[key] }}
            </span>
            <Ico v-else-if="query.$active.original_content[key].table.component == 'ico'" :icon="row[key]" style="font-size: 18px;" />
            <span v-else>
              {{ query.$active.original_content[key].filter ? query.$active.original_content[key].filter({ row, $index: key, $target: target, $this: query.$active.original_content[key], $parent: query.$active.original_content }) : row[key] }}
            </span>

          </template>
        </el-table-column>
        <!-- <el-table-column align="center" show-overflow-tooltip label="编号" prop="cid" width="120"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="标题" prop="title"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="标识" prop="slug"></el-table-column>
        <el-table-column v-if="showColumns.includes('type')" align="center" show-overflow-tooltip label="文本" prop="type"></el-table-column>
        <el-table-column v-if="showColumns.includes('description')" align="center" show-overflow-tooltip label="说明" prop="description"></el-table-column>
        <el-table-column v-if="showColumns.includes('status')" align="center" show-overflow-tooltip label="状态" prop="status"></el-table-column>
        <el-table-column v-if="showColumns.includes('order')" align="center" show-overflow-tooltip label="权重" prop="order"></el-table-column>
        <el-table-column v-if="showColumns.includes('count')" align="center" show-overflow-tooltip label="计数" prop="count"></el-table-column>
        <el-table-column v-if="showColumns.includes('parent')" align="center" show-overflow-tooltip label="父本" prop="parent"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="创建时间" prop="created_at" width="133"></el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="更新时间" prop="updated_at" width="133"></el-table-column> -->
      </el-table>
    </el-card>
    <el-card v-if="showPagination" data-role="footer">
      <el-pagination background :current-page.sync="table.current_page" :page-sizes="[10, 15, 20, 50, 100, 200, 500]" :page-size="table.page_size" layout="total, sizes, prev, pager, next, jumper" :total="table.total" @size-change="handleTableSizeChange" @current-change="handleTableCurrentChange">
        <el-switch key="switch" v-model="table.switch" active-text="Meta" inactive-text="Content" style="float: right;height: 28px;">
        </el-switch>
        <el-button key="switch" type="info" style="float: right;height: 28px;">返回</el-button>
      </el-pagination>
    </el-card>
  </section>
</template>

<script>
import * as requests from '@/api/base'
export default {
  name: 'MetaTable',
  props: {
    target: {
      type: String,
      default: '',
    },
    query: {
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
      requests,
      loading: false,
      form: {},
      table: {
        data: [],
        current_page: 1,
        total: 0,
        page_size: 15,
        selection: [],
        switch: false
      },
      value1: '',
    }
  },
  created() {
    this.getTableData()
  },
  methods: {
    getTableData() {
      this.loading = true
      this.requests.select_content_list(this.target, { ...this.requestParams, ...this.form, page_size: this.table.page_size }, {
        page: this.table.current_page,
      }).then(res => {
        // console.log('🚀 ~ file: MetaTable.vue:33 ~ this.request.select_meta_list ~ res:', res)
        const { data, current_page, total, per_page } = res.data
        this.table.data = data
        this.table.current_page = current_page
        this.table.total = total
        this.table.page_size = per_page
      }).finally(() => {
        this.loading = false
      })
    },
    handleTableSizeChange(val) {
      this.table.page_size = val
      this.getTableData()
    },
    handleTableCurrentChange(val) {
      this.table.current_page = val
      this.getTableData()
    },
    handleTableSelectionChange(val) {
      this.table.selection = val
    },
    forceUpdate() {
      this.$forceUpdate()
      this.table.data = [...this.table.data]
    }
  }
}
</script>

<style lang="scss" scoped>
::v-deep {

  .el-select,
  .el-input {
    position: relative;
    z-index: 1;
  }
}
</style>
