import Layout from '@/layout'
export default {
  path: '/article',
  component: Layout,
  children: [
    {
      path: '',
      component: () => import('@/views/base/index'),
      name: 'Article',
      meta: { title: '文章管理', slug: 'article', icon: 'el-icon-s-help', noCache: true }
    },
    //     {
    //       path: '',
    //       name: 'Article',
    //       component: () => import('@/views/article/index'),
    //       meta: { title: '文章概览', icon: 'table', type: 'category' }
    //     },
    //     {
    //       path: 'category',
    //       name: 'ArticleCategory',
    //       component: () => import('@/views/article/meta_table'),
    //       meta: { title: '文章分类', icon: 'table', type: 'category' }
    //     },
    //     {
    //       path: 'create-category',
    //       name: 'ArticleCreateCategory',
    //       hidden: true,
    //       component: () => import('@/views/article/meta_form'),
    //       meta: { title: '新增分类', icon: 'table', type: 'category' }
    //     },
    //     {
    //       path: 'update-category/:mid(\\d+)',
    //       name: 'ArticleUpdateCategory',
    //       hidden: true,
    //       component: () => import('@/views/article/meta_form'),
    //       meta: { title: '编辑分类', icon: 'table', type: 'category' }
    //     },
    //     {
    //       path: 'tag',
    //       name: 'ArticleTag',
    //       component: () => import('@/views/article/meta_table'),
    //       meta: { title: '文章标签', icon: 'table', type: 'tag' }
    //     },
    //     {
    //       path: 'create-tag',
    //       name: 'ArticleCreateTag',
    //       hidden: true,
    //       component: () => import('@/views/article/meta_form'),
    //       meta: { title: '新增标签', icon: 'table', type: 'tag' }
    //     },
    //     {
    //       path: 'update-tag/:mid(\\d+)',
    //       name: 'ArticleUpdateTag',
    //       hidden: true,
    //       component: () => import('@/views/article/meta_form'),
    //       meta: { title: '编辑标签', icon: 'table', type: 'tag' }
    //     },
    //     {
    //       path: 'content',
    //       name: 'ArticleContent',
    //       component: () => import('@/views/article/content_table'),
    //       meta: { title: '文章内容', icon: 'table' }
    //     },
    //     {
    //       path: 'create-content',
    //       name: 'ArticleCreateContent',
    //       hidden: true,
    //       component: () => import('@/views/article/content_form'),
    //       meta: { title: '新增内容', icon: 'table' }
    //     },
    //     {
    //       path: 'update-content/:cid(\\d+)',
    //       name: 'ArticleUpdateContent',
    //       hidden: true,
    //       component: () => import('@/views/article/content_form'),
    //       meta: { title: '编辑内容', icon: 'table' }
    //     },
  ]
}
