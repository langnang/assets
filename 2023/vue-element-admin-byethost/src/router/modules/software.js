import Layout from '@/layout'
export default {
  path: '/software',
  component: Layout,
  // meta: { title: 'Software', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Software',
      component: () => import('@/views/404'),
      meta: { title: '应用管理', slug: 'software', icon: 'table' }
    },
  ]
}
