<template>
  <section v-loading="loading">
    <el-form ref="form" :model="form.data" label-width="80px">
      <el-card data-role="main">
        <el-form-item label="名称">
          <el-input v-model="form.data.name"></el-input>
        </el-form-item>
        <el-form-item label="标识">
          <el-input v-model="form.data.slug"></el-input>
        </el-form-item>
        <el-form-item label="说明">
          <el-input v-model="form.data.description" type="textarea"></el-input>
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
export default {
  name: 'MetaForm',
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
        data: {
          mid: null,
          name: '',
          slug: null,
          type: '',
          description: ''
        },
        rules: []

      }
    }
  },
  watch: {
    'data': {
      handler(newV, oldV) {
        this.form.data = { ...this.form.data, ...newV }
      }
    }
  },
  created() {
    this.form.data = { ...this.form.data, ...this.data }
  },
  methods: {
    handleFormSubmit() {
      console.log('submit!', this.form.data)
      this.$emit('submit', this.form.data)
    },
    handleFormCancel() {
      console.log('cancel!')
      this.$emit('cancel',)
    },
    handleFormMock() {
      this.form.data = {
        ...this.form.data,
        ...{
          name: Random.title(),
          slug: Random.guid(),
          description: Random.cparagraph(),
        }
      }
      console.log('mock!', this.form.data)
      this.$emit('mock', this.form.data)
    }
  },
}
</script>

<style scoped></style>
