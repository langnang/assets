import Layout from '@/layout'
export default {
  path: '/spider',
  component: Layout,
  // meta: { title: 'Spider', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Spider',
      component: () => import('@/views/base/index'),
      meta: { title: '爬虫管理', slug: 'spider', icon: 'table' }
    },
    // {
    //   path: ':cid(\\d+)',
    //   name: 'Info',
    //   hidden: true,
    //   component: () => import('@/views/spider/form'),
    //   meta: { title: '爬虫管理', icon: 'table' }
    // },
    // {
    //   path: 'create',
    //   name: 'Create',
    //   hidden: true,
    //   component: () => import('@/views/spider/form'),
    //   meta: { title: '爬虫管理', icon: 'table' }
    // },
  ]
}
