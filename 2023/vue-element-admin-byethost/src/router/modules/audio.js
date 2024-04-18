import Layout from '@/layout'
export default {
  path: '/audio',
  component: Layout,
  children: [
    {
      path: '',
      name: 'Audio',
      component: () => import('@/views/404'),
      meta: { title: '音频管理', slug: 'audio', icon: 'table' }
    },
  ]
}
