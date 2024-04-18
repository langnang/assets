import Layout from '@/layout'
export default {
  path: '/openapi',
  component: Layout,
  // meta: { title: 'OpenAPI', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Index',
      component: () => import('@/views/404'),
      meta: { title: '接口管理', slug: 'openapi', icon: 'table' }
    },
  ]
}
