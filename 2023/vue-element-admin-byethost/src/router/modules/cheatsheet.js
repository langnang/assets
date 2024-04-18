import Layout from '@/layout'
export default {
  path: '/cheatsheet',
  component: Layout,
  // meta: { title: 'CheatSheet', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'CheatSheet',
      component: () => import('@/views/404'),
      meta: { title: '备忘管理', slug: 'cheatsheet', icon: 'table' }
    },
  ]
}
