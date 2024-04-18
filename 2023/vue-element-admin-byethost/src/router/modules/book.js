import Layout from '@/layout'
export default {
  path: '/book',
  component: Layout,
  // meta: { title: '书册管理', icon: 'el-icon-s-help' },
  children: [
    {
      path: '',
      name: 'Book',
      component: () => import('@/views/404'),
      meta: { title: '书册管理', slug: 'book', icon: 'table', }
    }
    // {
    //   path: 'category',
    //   name: 'BookCategory',
    //   component: () => import('@/views/book/meta_table'),
    //   meta: { title: '书册分类', icon: 'table', type: 'category' }
    // },
    // {
    //   path: 'create-category',
    //   name: 'BookCreateCategory',
    //   hidden: true,
    //   component: () => import('@/views/book/meta_form'),
    //   meta: { title: '新增分类', icon: 'table', type: 'category' }
    // },
    // {
    //   path: 'update-category/:mid(\\d+)',
    //   name: 'BookUpdateCategory',
    //   hidden: true,
    //   component: () => import('@/views/book/meta_form'),
    //   meta: { title: '编辑分类', icon: 'table', type: 'category' }
    // },
    // {
    //   path: 'tag',
    //   name: 'BookTag',
    //   component: () => import('@/views/book/meta_table'),
    //   meta: { title: '书册标签', icon: 'table', type: 'tag' }
    // },
    // {
    //   path: 'create-tag',
    //   name: 'BookCreateTag',
    //   hidden: true,
    //   component: () => import('@/views/book/meta_form'),
    //   meta: { title: '新增标签', icon: 'table', type: 'tag' }
    // },
    // {
    //   path: 'update-tag/:mid(\\d+)',
    //   name: 'BookUpdateTag',
    //   hidden: true,
    //   component: () => import('@/views/book/meta_form'),
    //   meta: { title: '编辑标签', icon: 'table', type: 'tag' }
    // },
    // {
    //   path: 'content',
    //   name: 'BookContent',
    //   component: () => import('@/views/book/content_table'),
    //   // meta: { title: '书册内容', icon: 'table' }
    //   meta: { title: '书册管理', icon: 'el-icon-s-help' },

    // },
    // {
    //   path: 'create-content',
    //   name: 'BookCreateContent',
    //   hidden: true,
    //   component: () => import('@/views/book/content_form'),
    //   meta: { title: '新增内容', icon: 'table' }
    // },
    // {
    //   path: 'update-content/:cid(\\d+)',
    //   name: 'BookUpdateContent',
    //   hidden: true,
    //   component: () => import('@/views/book/content_form'),
    //   meta: { title: '编辑内容', icon: 'table' }
    // },
  ]
}
