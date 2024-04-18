import Layout from '@/layout'
export default {
  path: '/comment',
  component: Layout,
  meta: { title: 'Comment', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Index',
      component: () => import('@/views/404'),
      meta: { title: 'Comment', icon: 'table' }
    },
  ]
}
