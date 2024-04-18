import Layout from '@/layout'
export default {
  path: '/novel',
  component: Layout,
  // meta: { title: 'Novel', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Novel',
      component: () => import('@/views/404'),
      meta: { title: '小说管理', slug: 'novel', icon: 'table' }
    },
  ]
}
