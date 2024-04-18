<template>
  <section v-loading="loading">
    <el-form ref="form" :model="form.data">
      <el-card data-role="main">
        <el-row :gutter="20">
          <el-col v-for="key in query.$active.original_content.$formItems" :key="key"
                  :span="query.$active.original_content[key].form.col || 24"
>
            <el-form-item :label="query.$active.original_content[key].label">
              <template slot="label">
                {{ query.$active.original_content[key].label }}
                <small v-if="query.$active.original_content[key].description" style="color: #909399;">//
                  {{ query.$active.original_content[key].description }}</small>
              </template>
              <component :is="query.$active.original_content[key].form.component"
                         v-if="query.$active.original_content[key].form.component" :ref="key" v-model="form.data[key]"
                         v-bind="query.$active.original_content[key].form.attrs || {}"
                         v-on="query.$active.original_content[key].form.events || {}"
></component>
              <el-select v-else-if="query.$active.original_content[key].form.type === 'select'" v-model="form.data[key]"
                         clearable v-bind="query.$active.original_content[key].form.attrs || {}"
                         v-on="query.$active.original_content[key].form.events || {}"
>
                <el-option v-for="option in query.$active.original_content[key].options(target)" :key="option.value"
                           :value="option.value" :label="option.label"
></el-option>
              </el-select>
              <markdown-editor v-else-if="query.$active.original_content[key].form.type === 'markdown'"
                               v-model="form.data[key]" height="500px"
/>
              <el-input v-else v-model="form.data[key]" :type="query.$active.original_content[key].form.type" :rows="4"
                        clearable
></el-input>
            </el-form-item>
          </el-col>
        </el-row>

        <!-- <el-form-item label="标题">
          <el-input v-model="form.data.title"></el-input>
        </el-form-item>
        <el-form-item label="标识">
          <el-input v-model="form.data.slug"></el-input>
        </el-form-item>
        <el-form-item label="文本">
          <markdown-editor v-model="form.data.text" height="500px" />
        </el-form-item>
        <el-form-item label="转载">
          <el-input v-model="form.data.reprint.url"></el-input>
        </el-form-item> -->
      </el-card>
      <el-card data-role="footer">
        <el-form-item size="small">
          <el-button type="primary" @click="handleFormSubmit">发布</el-button>
          <el-button @click="handleFormCancel">取消</el-button>
          <el-button type="warning" style="float:right" @click="handleFormMock">Mock</el-button>
          <el-button type="info" style="float:right" @click="handleFormStaging">暂存</el-button>
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
    // const query.$active.original_content_form = query.$active.original_content.reduce((t, v) => {
    //   t[v.key] = null
    //   return t
    // }, {})
    return {
      loading: false,
      form: {
        loading: false,
        data: {
          // ...query.$active.original_content_form
        },
        rules: []
      }
    }
  },
  watch: {
    'data': {
      handler(newV, oldV) {
        this.handleFormReset()
      }
    }
  },
  created() {
    this.handleFormReset()
  },
  methods: {
    handleFormReset() {
      let data = { ...this.data };
      // 如果有存稿，则替换表单中对应的数据，
      if (data.draft) {
        // console.log("🚀 ~ file: ContentForm.vue:85 ~ created ~ data.draft:", data.draft);
        data = this.query.$active.original_content.$formItems.reduce((t, v) => {
          t[v] = data.draft[v];
          return t;
        }, data);
        // 唯一标识需要根据后台非重规则，去除多余内容
        if (data.draft && data.draft.slug) data.slug = data.draft.slug.split('-').slice(1, -1).join('-')
      }
      // console.log("🚀 ~ file: ContentForm.vue:81 ~ created ~ created:", {});
      this.form.data = { ...this.form.data, ...data }
      // if (!this.form.data.reprint) {
      //   this.form.data.reprint = {
      //     url: '',
      //     title: ''
      //   }
      // }
    },
    onGetRefsValue() {
      const data = {};
      this.query.$active.original_content.$formItems.forEach(key => {
        if (this.query.$active.original_content[key].form.component) {
          data[key] = this.$refs[key][0].value;
        }
      })
      console.log('onGetRefsValue', { data });
      return data;
    },
    handleFormSubmit() {
      const data = { ...this.form.data, ...this.onGetRefsValue() }
      // console.log('handleFormSubmit', data)
      this.$emit('submit', data)
    },
    handleFormCancel() {
      this.$emit('cancel',)
    },
    handleFormStaging() {
      const data = { ...this.form.data, ...this.onGetRefsValue() }
      // console.log('handleFormStaging', data)
      this.$emit('staging', data)
    },
    handleFormMock() {
      // console.log('🚀 ~ file: ContentForm.vue:110 ~ handleFormMock ~ this.form.data:', { ...this.form.data })
      this.form.data = {
        ...this.form.data,
        ...this.query.$active.original_content.$formItems.reduce((t, v) => {
          if (!this.query.$active.original_content[v].mock) return t
          console.log("🚀 ~ file: ContentForm.vue:135 ~ ...this.query.$active.original_content.$formItems.reduce ~ v:", v);
          t[v] = this.query.$active.original_content[v].mock({
            $this: this.query.$active.original_content[v],
            $index: this.target,
          })
          return t
        }, {})
      }
      // console.log('🚀 ~ file: ContentForm.vue:110 ~ handleFormMock ~ this.form.data:', { ...this.form.data })
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
