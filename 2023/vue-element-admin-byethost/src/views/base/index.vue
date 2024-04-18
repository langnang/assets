<template>
  <section>
    <component :is="active" :query="query" :history="history" :target="target" @toggle="toggle" @toggle-dialog="toggleDialog" @change="change"></component>
    <UploadDialog ref="upload" :query="query" :history="history" :target="target" />
  </section>
</template>

<script>
import ContentTableView from './ContentTableView.vue'
import ContentFormView from './ContentFormView.vue'
import MetaTreeView from './MetaTreeView.vue'
import MetaFormView from './MetaFormView.vue'
import OptionList from './option_list.vue'
import UploadDialog from './components/upload_dialog.vue'
import branches from '@/branches'

export default {
  components: {
    ContentTableView,
    ContentFormView,
    MetaTreeView,
    MetaFormView,
    OptionList,
    UploadDialog,
  },
  data() {
    return {
      target: null,
      target_option: null,
      active: null,
      query: null,
      history: [],
    }
  },
  created() {
    // console.log(this.$route)
    this.target = this.$route.meta.slug
    if (this.target) {
      this.toggle({ to: 'content-table' })
    } else {
      this.toggle({ to: 'option-list' })
    }
  },
  methods: {
    toggle({ to, query } = {
      to: 'branch',
    }) {
      if (to === -1) {
        to = this.history[this.history.length - 2]['to']
        query = this.history[this.history.length - 2]['query']
        this.history = this.history.slice(0, -2)
      }
      if (to === 'content-table') this.active = ContentTableView
      if (to === 'content-form') this.active = ContentFormView
      if (to === 'meta-tree') this.active = MetaTreeView
      if (to === 'meta-form') this.active = MetaFormView
      if (to === 'option-list') this.active = OptionList
      this.query = {
        $to: to,
        $options: branches.options,
        $target: this.target,
        $active: this.target_option,
        data: query
      }
      console.log("🚀 ~ file: index.vue:59 ~ this.query:", this.query);
      this.history.push({ to, query })
    },
    change({ key, value }) {
      this.$data[key] = value
      if (key === 'target') {
        this.target_option = branches.options.find(v => v.value === this.target)
      }
    },
    toggleDialog({ ref }) {
      console.log("🚀 ~ file: index.vue:72 ~ toggleDialog ~ { ref }:", { ref });
      this.$refs[ref].toggle();
    }
  }
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

  .el-form-item__label {
    line-height: 24px;
  }
}
</style>
