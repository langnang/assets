import Layout from '@/layout'
export default {
  path: '/video',
  component: Layout,
  // meta: { title: 'Video', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Video',
      component: () => import('@/views/404'),
      meta: { title: '视频管理', slug: 'video', icon: 'table' }
    },
  ]
}
