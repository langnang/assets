import Layout from '@/layout'
export default {
  path: '/log',
  component: Layout,
  meta: { title: '日志管理', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Index',
      component: () => import('@/views/404'),
      meta: { title: '日志管理', icon: 'table' }
    },
  ]
}
