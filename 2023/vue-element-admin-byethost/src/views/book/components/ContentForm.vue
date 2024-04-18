<template>
  <section v-loading="loading">
    <el-form ref="form" :model="form.data" label-width="80px">
      <el-card data-role="main">
        <el-form-item label="标题">
          <el-input v-model="form.data.title"></el-input>
        </el-form-item>
        <el-form-item label="标识">
          <el-input v-model="form.data.slug"></el-input>
        </el-form-item>
        <el-form-item label="文本">
          <markdown-editor v-model="form.data.text" height="500px" />
        </el-form-item>
        <el-form-item label="转载">
          <el-input v-model="form.data.reprint.url" placeholder="转载地址">
            <el-button slot="append" icon="el-icon-search" @click="handleFormReprint"></el-button>
          </el-input>
        </el-form-item>
        <el-form-item>
          <el-input v-model="form.data.reprint.title" placeholder="转载标题"></el-input>
        </el-form-item>
      </el-card>
      <el-card data-role="footer">
        <el-form-item size="small">
          <el-button type="primary" @click="handleFormSubmit">提交</el-button>
          <el-button @click="handleFormCancel">取消</el-button>
          <el-button type="warning" style="float:right" @click="handleFormMock">Mock</el-button>
        </el-form-item>
      </el-card>
    </el-form>
  </section>
</template>

<script>
import { Random } from 'mockjs'
import MarkdownEditor from '@/components/MarkdownEditor'
export default {
  title: 'ContentForm',
  components: {
    MarkdownEditor
  },
  props: {
    data: {
      type: Object,
      default: () => ({})
    }
  },
  data() {
    return {
      loading: false,
      form: {
        loading: false,
        data: {
          cid: null,
          title: '',
          slug: null,
          type: '',
          text: '',
          reprint: {
            url: '',
            title: ''
          }
        },
        rules: []
      }
    }
  },
  watch: {
    'data': {
      handler(newV, oldV) {
        this.handleFormReset(newV)
      }
    }
  },
  created() {
    this.handleFormReset(this.data)
  },
  methods: {
    handleFormReset(data = {}) {
      this.form.data = { ...this.form.data, ...data }
      if (!this.form.data.reprint) {
        this.form.data.reprint = {
          url: '',
          title: ''
        }
      }
    },
    handleFormSubmit() {
      this.$emit('submit', this.form.data)
    },
    handleFormCancel() {
      this.$emit('cancel',)
    },
    handleFormMock() {
      this.form.data = {
        ...this.form.data,
        ...{
          title: Random.title(),
          slug: Random.guid(),
          text: Random.paragraph(10),
        }
      }
      this.$emit('mock', this.form.data)
    },
    handleFormReprint() {
      this.$emit('reprint', this.form.data)
    }
  },
}
</script>

<style scoped></style>
