import Layout from '@/layout'
export default {
  path: '/awesome',
  component: Layout,
  children: [
    {
      path: '',
      name: 'Awesome',
      component: () => import('@/views/404'),
      meta: { title: '依赖管理', slug: 'awseome', icon: 'table' }
    },
  ]
}
