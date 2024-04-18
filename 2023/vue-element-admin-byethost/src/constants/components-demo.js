export default [
  {
    path: 'tinymce',
    component: () => import('@/views/components-demo/tinymce'),
    name: 'TinymceDemo',
    meta: { title: 'Tinymce' }
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
]
