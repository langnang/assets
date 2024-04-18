import Layout from '@/layout'
export default {
  path: '/webstack',
  component: Layout,
  children: [
    {
      path: '',
      component: () => import('@/views/base/index'),
      name: 'WebStack',
      meta: { title: '导航管理', slug: 'webstack', icon: 'dashboard', noCache: true }
    },
  ]
}
