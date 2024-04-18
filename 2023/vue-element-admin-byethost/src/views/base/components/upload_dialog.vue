<template>
  <el-dialog title="上传" :visible.sync="dialog.visible" :before-close="handleClose">
    <el-upload ref="upload" drag :action="dialog.action" :data="dialog.data" accept=".xlsx,.xls,.csv,.ods,.slk,.xml,.html,.mpdf,dompdf,.tcpdf,.json,.md" multiple :on-success="onUploadSuccess">
      <i class="el-icon-upload"></i>
      <div class="el-upload__text"> 将 <em>模板格式</em> 文件拖到此处，或<em>点击上传</em> </div>
      <div slot="tip" class="el-upload__tip"> 只能上传 <em>excel/json</em> 文件 </div>
    </el-upload>
    <span slot="footer">
      <el-button-group style="float: left;">
        <el-button type="success" @click="handleExport({ $filetype: 'excel' })">EXCEL 模板下载</el-button>
        <el-button type="success" @click="handleExport({ $filetype: 'json' })">JSON 模板下载</el-button>
      </el-button-group>
      <el-button @click="handleClose">取 消</el-button>
    </span>
  </el-dialog>
</template>

<script>
import * as requests from '@/api/base'
export default {
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
      dialog: {
        visible: false,
        action: '',
        data: {
        },
      }
    }
  },
  methods: {
    toggle() {
      this.dialog.action = `/api/${this.target}/import_${this.query.$to.split('-')[0]}`;
      console.log("🚀 ~ file: upload_dialog.vue:48 ~ toggle ~ toggle:", { target: this.target, query: this.query, dialog: this.dialog });
      this.dialog.visible = !this.dialog.visible
    },
    handleClose() {
      this.dialog.visible = !this.dialog.visible
      this.$refs.upload.clearFiles()
    },
    handleExport() { },
    onUploadSuccess() {
      this.$message.success('上传成功!')
    },
  }
}
</script>

<style></style>
