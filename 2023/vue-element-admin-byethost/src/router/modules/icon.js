import Layout from '@/layout'
export default {
  path: '/icon',
  component: Layout,
  children: [
    {
      path: '',
      component: () => import('@/views/base/index'),
      name: 'Icon',
      meta: { title: '图标管理', slug: 'icon', icon: 'dashboard', noCache: true }
    },
  ]
}
