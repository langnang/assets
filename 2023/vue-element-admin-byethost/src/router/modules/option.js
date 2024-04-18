import Layout from '@/layout'
export default {
  path: '/option',
  component: Layout,
  meta: { title: '系统管理', icon: 'table' },
  children: [
    {
      path: 'account',
      name: 'OptionAccount',
      component: () => import('@/views/user/index'),
      meta: { title: '账号管理', type: 'branch', icon: 'table' }
    },
    {
      path: 'branch',
      name: 'OptionBranch',
      component: () => import('@/views/base/index'),
      meta: { title: '分支管理', type: 'branch', icon: 'table', noCatch: true, }
    },
    {
      path: 'config',
      name: 'OptionConfig',
      component: () => import('@/views/404'),
      meta: { title: '程序配置', type: 'option', icon: 'table' }
    },
    // {
    //   path: 'category',
    //   name: 'OptionCategory',
    //   component: () => import('@/views/base/index'),
    //   meta: { title: '分类管理', type: 'category', icon: 'table' }
    // },
    // {
    //   path: 'tag',
    //   name: 'OptionTag',
    //   component: () => import('@/views/base/index'),
    //   meta: { title: '标签管理', type: 'tag', icon: 'table' }
    // },
    // {
    //   path: 'content',
    //   name: 'OptionContent',
    //   component: () => import('@/views/base/index'),
    //   meta: { title: '内容管理', type: 'content', icon: 'table' }
    // },
  ]
}
