<template>
  <section v-loading="loading">
    <el-form ref="form" :model="form.data" label-width="80px">
      <el-card data-role="main">
        <el-form-item v-for="key in data.$active.original_meta.$formItems" :key="key" :label="data.$active.original_meta[key].label">
          <el-select v-if="data.$active.original_meta[key].form.type === 'select'" v-model="form.data[key]" clearable>
            <el-option v-for="option in data.$active.original_meta[key].options(target)" :key="option.value" :value="option.value" :label="option.label"></el-option>
          </el-select>
          <markdown-editor v-else-if="data.$active.original_meta[key].form.type === 'markdown'" v-model="form.data[key]" height="500px" />
          <el-input v-else v-model="form.data[key]" :type="data.$active.original_meta[key].form.type" :rows="4" clearable></el-input>
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
    target: {
      type: String,
      default: '',
    },
    query: {
      type: Object,
      default: () => ({})
    },
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
    console.log(this.query);
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
        ...this.data.$active.original_meta.$formItems.reduce((t, v) => {
          if (!this.data.$active.original_meta[v].mock) return t
          t[v] = this.data.$active.original_meta[v].mock({ $this: this.data.$active.original_meta[v], $index: this.target, })
          return t
        }, {})
      }
      // console.log('mock!', this.form.data)
      this.$emit('mock', this.form.data)
    }
  },
}
</script>

<style lang="scss" scoped>
::v-deep .el-select {
  width: 100%;
}
</style>
