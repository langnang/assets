<template>
  <section v-loading="loading" class="app-container content content-form">
    <el-card data-role="header">
      <span class="el-card-header__title">
        {{ (query.cid ? 'Update' : 'Create') }} {{ $route.name }} Content
        <el-tag size="small" type="info">
          {{ status }}
        </el-tag>
      </span>
      <span class="el-card-header__operate">
        <el-button size="mini" type="info" @click="handleCancel"> 返回 </el-button>
      </span>
    </el-card>
    <ContentForm v-loading="form.loading" :query="query" :data="form.data" :target="target" @submit="handleSubmit" @cancel="handleCancel" @staging="handleStaging" />
  </section>
</template>

<script>
import ContentForm from '../../components/Content/ContentForm.vue'
import * as requests from '@/api/base'
export default {
  name: 'ContentFormView',
  components: { ContentForm },
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
    const status = this.query.$active.original_content.status.filter({
      row: this.query, $index: 'status', $this: this.query.$active.original_content.status, $parent: this.query.$active.original_content
    })
    return {
      loading: false,
      requests,
      status,
      form: {
        loading: false,
        data: {},
      }
    }
  },
  created() {
    this.handleSelect();
  },
  methods: {
    handleSelect() {
      if (!this.query.data || !this.query.data.cid) return;
      this.form.loading = true
      this.requests.select_content_item(this.target, { cid: this.query.data.cid }).then(res => {
        const { data } = res
        this.form.data = data;
      }).finally(() => {
        this.form.loading = false
      })
    },
    handleSubmit(data) {
      data = { ...data }
      if (data.cid) {
        this.requests.release_content_item(this.target, data).then(res => {
          this.$message.success('修改成功')
          this.handleCancel()
        })
      } else {
        this.requests.insert_content_item(this.target, data).then(res => {
          this.$message.success('新增成功')
          this.handleCancel()
        })
      }
    },
    handleCancel() {
      this.$emit('toggle', { to: -1 })
    },
    handleStaging(data) {
      console.log("🚀 ~ file: ContentFormView.vue:84 ~ handleStaging ~ data:", data);
      this.requests.staging_content_item(this.target, data).then(res => {
        this.$message.success('暂存成功')
        // this.handleCancel()
      })
    }
  }
}
</script>

<style></style>
