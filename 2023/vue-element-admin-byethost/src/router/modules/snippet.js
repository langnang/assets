import Layout from '@/layout'
export default {
  path: '/snippet',
  component: Layout,
  // meta: { title: 'Snippet', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Snippet',
      component: () => import('@/views/404'),
      meta: { title: '片段管理', icon: 'table' }
    },
  ]
}
