<template>
  <section v-loading="loading" class="app-container content content-table">
    <el-card data-role="header">
      <span class="el-card-header__form">
        <MetaInlineForm ref="meta-form" :target="target" :query="query" @change="handleMetaFormChange" @create="handleCreateMeta" @update="handleUpdateMeta" @delete="handleDeleteMeta" @setting="handleSettingMeta" />
      </span>
      <span class="el-card-header__operate">
        <el-tooltip effect="dark" content="查询" placement="bottom">
          <el-button size="mini" circle type="default" icon="el-icon-search" @click="handleSelect"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="重置" placement="bottom">
          <el-button size="mini" circle type="info" icon="el-icon-refresh-left" @click="handleReset"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="关联" placement="bottom">
          <el-button size="mini" circle type="warning" icon="el-icon-connection" @click="handleRelationship"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="新增" placement="bottom">
          <el-button size="mini" circle type="primary" icon="el-icon-plus" @click="handleCreateContent"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="更新" placement="bottom">
          <el-button size="mini" circle type="warning" icon="el-icon-edit" @click="handleUpdateContent"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="发布" placement="bottom">
          <el-button size="mini" circle type="success" @click="handleReleaseContent">
            <svg-icon icon-class="guide" />
          </el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="删除" placement="bottom">
          <el-button size="mini" circle type="danger" icon="el-icon-delete" @click="handleDeleteContent"></el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="上传" placement="bottom">
          <el-button size="mini" circle type="primary" @click="handleUpload({ visible: true })">
            <font-awesome-icon :icon="['fas', 'upload']" />
          </el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="下载" placement="bottom">
          <el-button size="mini" circle type="primary" disabled @click="handleExport({ visible: true })">
            <font-awesome-icon :icon="['fas', 'download']" />
          </el-button>
        </el-tooltip>
        <el-tooltip effect="dark" content="返回" placement="bottom">
          <el-button size="mini" circle type="info" @click="$emit('toggle', { to: 'option-list' })">
            <font-awesome-icon :icon="['fas', 'hand-point-left']" />
          </el-button>
        </el-tooltip>
      </span>
    </el-card>
    <ContentTable ref="table" :target="target" :query="query" :request-params="requestParams" />
    <el-dialog title="上传" :visible.sync="upload_dialog.visible" :before-close="handleCloseDialog">
      <el-upload ref="upload" drag :action="upload_dialog.url" :data="upload_dialog.data" accept=".xlsx,.xls,.csv,.ods,.slk,.xml,.html,.mpdf,dompdf,.tcpdf,.json,.md" multiple :on-success="onUploadSuccess">
        <i class="el-icon-upload"></i>
        <div class="el-upload__text"> 将 <em>模板格式</em> 文件拖到此处，或<em>点击上传</em> </div>
        <div slot="tip" class="el-upload__tip"> 只能上传 <em>excel/json</em> 文件 </div>
      </el-upload>
      <span slot="footer">
        <el-button-group style="float: left;">
          <el-button type="success" @click="handleExport({ $filetype: 'excel' })">EXCEL 模板下载</el-button>
          <el-button type="success" @click="handleExport({ $filetype: 'json' })">JSON 模板下载</el-button>
        </el-button-group>
        <el-button @click="handleCloseDialog">取 消</el-button>
      </span>
    </el-dialog>
    <el-dialog title="下载" :visible.sync="export_dialog.visible" :before-close="handleCloseDialog">
      <div class="text-center">
        <el-button type="success" @click="handleExport({ $filetype: 'xlsx' })">EXCEL 格式下载</el-button>
        <el-button type="success" @click="handleExport({ $filetype: 'json' })">JSON 格式下载</el-button>
      </div>
      <span slot="footer">
        <el-button @click="handleCloseDialog">取 消</el-button>
      </span>
    </el-dialog>
  </section>
</template>

<script>
import MetaInlineForm from '@/components/Meta/MetaInlineForm.vue'
import ContentTable from '@/components/Content/ContentTable.vue'
import * as requests from '@/api/base'
export default {
  name: 'ContentTableView',
  components: {
    MetaInlineForm,
    ContentTable
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
      requests,
      requestParams: {},
      loading: false,
      table: {
        data: [],
        current_page: 1,
        total: 0,
        page_size: 15,
        selection: []
      },
      showColumns: [],
      formInline: {
        user: '',
        region: ''
      },
      checked: '',
      value: '',
      options: [],
      export_dialog: {
        visible: false,
        url: '',
        data: {
        },
      },
      upload_dialog: {
        visible: false,
        url: '',
        data: {
        },
      },
    }
  },
  mounted() {
    this.handleSelect()
    console.log(this.query);
    this.upload_dialog.url = '/api/' + (this.target ? this.target + '/' : '') + 'import_content'
  },
  methods: {
    handleMetaFormChange(mids = []) {
      console.log('🚀 ~ file: ContentTableView.vue:126 ~ handleMetaFormChange ~ mids:', mids)
      this.requestParams = { mids }
      this.upload_dialog.data.mids = mids
    },
    handleSelect() {
      this.$refs.table.table.current_page = 1
      this.requestParams.mids = this.$refs['meta-form'].getValue()
      this.$refs.table.getTableData()
    },
    // 重置条件
    handleReset() { },
    // 关联数据
    handleRelationship() {
      console.log('🚀 ~ file: ContentTableView.vue:152 ~ handleRelationship ~ handleRelationship:', { mids: this.requestParams.mids, selection: this.table.selection })
      if (this.requestParams.mids.length === 0 && this.table.selection) {
        this.$message({
          type: 'warning',
          dangerouslyUseHTMLString: true,
          message: '请选择需要关联的数据,<br/>同时选中Meta或Content将相互关联,<br/>单独选中可关联其它分支',
        })
      }
    },
    handleCreateMeta(query = {}) {
      console.log('🚀 ~ file: ContentTableView.vue:82 ~ handleCreateMeta ~ query:', query)
      this.$emit('toggle', { to: 'meta-form', query })
    },
    handleCreateContent() {
      this.$emit('toggle', {
        to: 'content-form',
        query: {
          ...this.requestParams,
        }
      })
    },
    handleDeleteMeta({ row, $index }) {
      console.log('🚀 ~ file: ContentTableView.vue:89 ~ hanldeDeleteMeta:', { row, $index })
      this.$confirm('此操作将永久删除所选数据, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        this.requests.delete_meta_list(this.target, { mids: [row.mid] }).then(res => {
          this.$message.success('删除成功!')
          this.$refs['meta-form'].meta[$index].value = ''
          this.$refs['meta-form'].getMetaCategoryList($index)
        })
      }).catch(() => {
        this.$message({
          type: 'info',
          message: '已取消删除'
        })
      })
    },
    handleDeleteContent() {
      if (this.$refs.table.table.selection === 0) return this.$message.warning('请选择删除的数据')
      this.$confirm('此操作将永久删除所选数据, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        const cids = this.$refs.table.table.selection.map(v => v.cid)
        this.requests.delete_content_list(this.target, { cids }).then(res => {
          this.$message.success('删除成功!')
          this.handleSelect()
        })
      }).catch(() => {
        this.$message({
          type: 'info',
          message: '已取消删除'
        })
      })
    },
    handleUpdateMeta({ row, $index }) {
      this.$emit('toggle', {
        to: 'meta-form',
        query: row
      })
    },
    handleUpdateContent() {
      const selection = this.$refs.table.table.selection
      if (selection.length === 0) return this.$message.warning('请选择需要修改的数据, 多选可批量修改指定字段')
      const content = selection.length === 1 ? selection[0] : { $data: selection }
      this.$emit('toggle', {
        to: 'content-form',
        query: { ...this.requestParams, ...content }
      })
    },
    handleReleaseContent() {
      if (this.$refs.table.table.selection === 0) return this.$message.warning('请选择删除的数据')
      this.$confirm('此操作将发布所选数据, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        const cids = this.$refs.table.table.selection.map(v => v.cid)
        this.requests.release_content_list(this.target, { cids }).then(res => {
          this.$message.success('发布成功!')
          this.handleSelect()
        })
      }).catch(() => {
        this.$message({
          type: 'info',
          message: '已取消发布'
        })
      })
    },
    handleUpload({ visible, $filetype }) {
      this.$emit('toggle-dialog', { ref: 'upload' })
      // if (visible) this.upload_dialog.visible = true
    },
    handleExport({ visible, $filetype }) {
      if (visible) this.export_dialog.visible = true
      if ($filetype) this.requests.export_tree(this.target, { $filetype })
    },
    handleCloseDialog() {
      this.upload_dialog.visible = false
      this.export_dialog.visible = false
      // 清空已上传的文件列表
      this.$refs.upload.clearFiles()
      this.handleSelect()
    },
    onUploadSuccess(response, file, fileList) {
      this.$message.success('上传成功!')
    },
    handleSettingMeta() {
      this.$emit('toggle', { to: 'meta-tree' })
    }
  },
}
</script>

<style lang="scss" scoped>
::v-deep {
  .el-upload {
    width: 100%;
  }

  .el-upload-dragger {
    width: 100%;
  }

  .el-upload__tip {
    font-size: 14px;

    em {
      color: #409EFF;
      font-style: normal;
    }
  }
}
</style>
