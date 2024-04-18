<template>
  <section v-loading="loading" class="app-container meta meta-form">
    <el-card data-role="header">
      <span class="el-card-header__title">
        {{ (query.mid ? 'Update' : 'Create') }} {{ $route.name }} Meta
      </span>
      <span class="el-card-header__operate">
        <el-button size="mini" type="info" @click="handleCancel"> 返回 </el-button>
      </span>
    </el-card>
    <MetaForm :data="query" :target="target" @submit="handleSubmit" @cancel="handleCancel" />
  </section>
</template>

<script>
import MetaForm from '../../components/Meta/MetaForm.vue'
import * as requests from '@/api/base'
export default {
  name: 'MetaFormView',
  components: {
    MetaForm
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
    }
  },
  methods: {
    handleSubmit(data) {
      data = { ...data }
      if (data.mid) {
        this.requests.release_meta_item(this.target, data).then(res => {
          this.$message.success('发布成功')
          this.handleCancel()
        })
      } else {
        this.requests.insert_meta_item(this.target, data).then(res => {
          this.$message.success('新增成功')
          this.handleCancel()
        })
      }
    },
    handleCancel() {
      this.$emit('toggle', { to: -1 })
    },
  }
}
</script>

<style></style>
