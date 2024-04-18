<template>
  <component :is="active" :query="query" :history="history" :target="target" @toggle="toggle"></component>
</template>

<script>
import ContentTableView from '@/views/base/ContentTableView.vue'
import ContentFormView from '@/views/base/ContentFormView.vue'
import MetaFormView from '@/views/base/MetaFormView.vue'

export default {
  components: {
    ContentTableView,
    ContentFormView,
    MetaFormView
  },
  data() {
    return {
      target: null,
      active: null,
      query: null,
      history: [],
    }
  },
  created() {
    console.log(this.$route)
    this.target = this.$route.meta.slug
    this.toggle({ to: 'content-table' })
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
      if (to === 'meta-form') this.active = MetaFormView
      this.query = query
      this.history.push({ to, query })
    },
  }
}
</script>
