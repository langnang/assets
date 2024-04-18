import Layout from '@/layout'
export default {
  path: '/user',
  component: Layout,
  // meta: { title: '账号管理', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'User',
      component: () => import('@/views/user/index'),
      meta: { title: '用户管理', icon: 'table' }
    },
    // {
    //   path: 'password',
    //   name: 'Password',
    //   component: () => import('@/views/user/password'),
    //   meta: { title: '密码更改', icon: 'table' }
    // },
    // {
    //   path: 'resume',
    //   name: 'Resume',
    //   component: () => import('@/views/user/resume'),
    //   meta: { title: '附加信息', icon: 'table' }
    // },
    // {
    //   path: 'account',
    //   name: 'Account',
    //   component: () => import('@/views/user/blank'),
    //   meta: { title: '关联账号', icon: 'table' }
    // },
    // {
    //   path: 'log',
    //   name: 'Log',
    //   component: () => import('@/views/user/log'),
    //   meta: { title: '操作日志', icon: 'table' }
    // }
  ]
}
