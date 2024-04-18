<template>
  <component :is="active" class="app-container" :query="query" :history="history" @toggle="toggle" @back="back">
    <el-row :gutter="20">
      <el-col v-for="item in options" :key="item.key" :span="6">
        <el-card style="cursor: pointer" @click.native="toggle({to:item.path})">
          {{ item.meta.title || item.name }}
        </el-card>
      </el-col>
    </el-row>
  </component>
</template>

<script>
import options from '@/constants/components-demo'

console.log(options)
export default {
  name: 'CategoryIndex',
  components: {},
  data() {
    return {
      active: 'section',
      query: null,
      history: [],
      options: [
        {
          path: 'tinymce',
          component: () => import('@/views/components-demo/tinymce'),
          name: 'TinymceDemo',
          meta: { title: 'Tinymce', tags: [] }
        },
        {
          path: 'markdown',
          component: () => import('@/views/components-demo/markdown'),
          name: 'MarkdownDemo',
          meta: { title: 'Markdown' }
        },
        {
          path: 'json-editor',
          component: () => import('@/views/components-demo/json-editor'),
          name: 'JsonEditorDemo',
          meta: { title: 'JSON Editor' }
        },
        {
          path: 'split-pane',
          component: () => import('@/views/components-demo/split-pane'),
          name: 'SplitpaneDemo',
          meta: { title: 'SplitPane' }
        },
        {
          path: 'avatar-upload',
          component: () => import('@/views/components-demo/avatar-upload'),
          name: 'AvatarUploadDemo',
          meta: { title: 'Upload' }
        },
        {
          path: 'dropzone',
          component: () => import('@/views/components-demo/dropzone'),
          name: 'DropzoneDemo',
          meta: { title: 'Dropzone' }
        },
        {
          path: 'sticky',
          component: () => import('@/views/components-demo/sticky'),
          name: 'StickyDemo',
          meta: { title: 'Sticky' }
        },
        {
          path: 'count-to',
          component: () => import('@/views/components-demo/count-to'),
          name: 'CountToDemo',
          meta: { title: 'Count To' }
        },
        {
          path: 'mixin',
          component: () => import('@/views/components-demo/mixin'),
          name: 'ComponentMixinDemo',
          meta: { title: 'Component Mixin' }
        },
        {
          path: 'back-to-top',
          component: () => import('@/views/components-demo/back-to-top'),
          name: 'BackToTopDemo',
          meta: { title: 'Back To Top' }
        },
        {
          path: 'drag-dialog',
          component: () => import('@/views/components-demo/drag-dialog'),
          name: 'DragDialogDemo',
          meta: { title: 'Drag Dialog' }
        },
        {
          path: 'drag-select',
          component: () => import('@/views/components-demo/drag-select'),
          name: 'DragSelectDemo',
          meta: { title: 'Drag Select' }
        },
        {
          path: 'dnd-list',
          component: () => import('@/views/components-demo/dnd-list'),
          name: 'DndListDemo',
          meta: { title: 'Dnd List' }
        },
        {
          path: 'drag-kanban',
          component: () => import('@/views/components-demo/drag-kanban'),
          name: 'DragKanbanDemo',
          meta: { title: 'Drag Kanban' }
        },
        {
          path: 'icons',
          component: () => import('@/views/components-demo/icons'),
          name: 'Icons',
          meta: { title: 'Icons', icon: 'icon', noCache: true }
        },
        {
          path: 'keyboard-chart',
          component: () => import('@/views/components-demo/chart/keyboard-chart'),
          name: 'KeyboardChart',
          meta: { title: 'Keyboard Chart', noCache: true }
        },
        {
          path: 'line-chart',
          component: () => import('@/views/components-demo/chart/line-chart'),
          name: 'LineChart',
          meta: { title: 'Line Chart', noCache: true }
        },
        {
          path: 'mix-chart',
          component: () => import('@/views/components-demo/chart/mix-chart'),
          name: 'MixChart',
          meta: { title: 'Mix Chart', noCache: true }
        }
      ],
    }
  },
  created() {
    console.log(this.components)
    // this.toggle({ to: 'list' })
  },
  methods: {
    toggle({ to, query } = {
      to: 'list',
    }) {
      console.log('toggle', { to, query, history: this.history })
      if (to === -1) {
        to = this.history[this.history.length - 2]['to']
        query = this.history[this.history.length - 2]['query']
        this.history = this.history.slice(0, -2)
      }
      console.log('toggle', { to, query, history: this.history })
      this.active = this.options.find(v => v.path === to).component
      this.query = query
      this.history.push({ to, query })
    },
    back() {
      this.toggle({ to: -1 })
    }
  }
}
</script>
