import request from '@/utils/request'

export const key = 'base'
export const name = '基本'
// Meta
export const insert_meta_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}insert_meta_item`,
  method: 'post',
  data,
  params
})
export const delete_meta_list = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}delete_meta_list`,
  method: 'post',
  data,
  params
})
export const update_meta_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}update_meta_item`,
  method: 'post',
  data,
  params
})
export const select_meta_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}select_meta_item`,
  method: 'post',
  data,
  params
})
export const select_meta_list = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}select_meta_list`,
  method: 'post',
  data,
  params
})
export const select_meta_tree = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}select_meta_tree`,
  method: 'post',
  data,
  params
})
// Content

export const insert_content_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}insert_content_item`,
  method: 'post',
  data,
  params
})
export const delete_content_list = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}delete_content_list`,
  method: 'post',
  data,
  params
})
export const update_content_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}update_content_item`,
  method: 'post',
  data,
  params
})
export const release_content_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}release_content_item`,
  method: 'post',
  data,
  params
})
export const release_content_list = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}release_content_list`,
  method: 'post',
  data,
  params
})
export const select_content_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}select_content_item`,
  method: 'post',
  data,
  params
})
export const select_content_list = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}select_content_list`,
  method: 'post',
  data,
  params
})
export const staging_content_item = (key, data = {}, params = {}) => request({
  url: `/api/${key ? key + '/' : ''}staging_content_item`,
  method: 'post',
  data,
  params
})

