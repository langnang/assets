import request from '@/utils/request'
// Meta
export const insertBookMetaItem = (data = {}, params = {}) => request({
  url: '/api/book/insert_meta_item',
  method: 'post',
  data,
  params
})
export const deleteBookMetaList = (data = {}, params = {}) => request({
  url: '/api/book/delete_meta_list',
  method: 'post',
  data,
  params
})
export const updateBookMetaItem = (data = {}, params = {}) => request({
  url: '/api/book/update_meta_item',
  method: 'post',
  data,
  params
})
export const selectBookMetaItem = (data = {}, params = {}) => request({
  url: '/api/book/select_meta_item',
  method: 'post',
  data,
  params
})
export const selectBookMetaList = (data = {}, params = {}) => request({
  url: '/api/book/select_meta_list',
  method: 'post',
  data,
  params
})
export const selectBookMetaTree = (data = {}, params = {}) => request({
  url: '/api/book/select_meta_tree',
  method: 'post',
  data,
  params
})

// Content

export const insertBookContentItem = (data = {}, params = {}) => request({
  url: '/api/book/insert_content_item',
  method: 'post',
  data,
  params
})
export const deleteBookContentList = (data = {}, params = {}) => request({
  url: '/api/book/delete_content_list',
  method: 'post',
  data,
  params
})
export const updateBookContentItem = (data = {}, params = {}) => request({
  url: '/api/book/update_content_item',
  method: 'post',
  data,
  params
})
export const selectBookContentItem = (data = {}, params = {}) => request({
  url: '/api/book/select_content_item',
  method: 'post',
  data,
  params
})
export const selectBookContentList = (data = {}, params = {}) => request({
  url: '/api/book/select_content_list',
  method: 'post',
  data,
  params
})
export const selectBookContentTree = (data = {}, params = {}) => request({
  url: '/api/book/select_content_tree',
  method: 'post',
  data,
  params
})
