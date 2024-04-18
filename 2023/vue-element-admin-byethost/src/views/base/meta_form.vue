<template>
  <div class="app-container article article-meta article-meta-form">
    <el-card data-role="header">
      <span class="el-card-header__title"><i class="el-icon-back" @click="$emit('back')"></i> {{ title }}</span>
    </el-card>
    <MetaFormVue
v-loading="form.loading"
:data="form.data"
@submit="handleFormSubmit"
                 @cancel="handleFormCancel"
    />
  </div>
</template>
<script>
import MetaFormVue from './../article/components/MetaForm.vue'

export default {
  name: 'MetaForm',
  components: {
    MetaFormVue
  },
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
      title: '',
      request: {
        insert_meta_item: () => {
        },
        update_meta_item: () => {
        },
        select_meta_item: () => {
        },
      },
      form: {
        loading: false,
        data: {},
      },
    }
  },
  created() {
    this.title = this.$route.meta.title
    this.form.data = { type: this.$route.meta.type, parent: this.query.params.parent }
    this.request = { ...this.query.request }
    if (this.query.meta) {
      this.getMetaItemData()
    }
  },
  methods: {
    getMetaItemData() {
      const { mid } = this.query.meta
      if (!mid) return
      this.form.loading = true
      this.request.select_meta_item({ mid }).then(res => {
        const { data } = res
        this.form.data = data
      }).finally(() => {
        this.form.loading = false
      })
    },
    handleFormSubmit(data) {
      if (data.mid) {
        this.request.update_meta_item(data).then(res => {
          this.$message.success('修改成功')
          this.handleFormCancel()
        })
      } else {
        this.request.insert_meta_item(data).then(res => {
          this.$message.success('新增成功')
          this.handleFormCancel()
        })
      }
    },
    handleFormCancel() {
      this.$emit('back')
    }
  }
}
</script>

<style></style>
