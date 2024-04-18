import request from '@/utils/request'
import { Random } from 'mockjs'
export const key = 'article'
export const name = '文章'

export const original_meta = [
  { key: 'mid', label: '编号', primary_key: true, type: 'number', },
  { key: 'name', label: '名称', },
  { key: 'slug', label: '标识' },
  { key: 'ico', label: '徽标' },
  { key: 'description', label: '说明' },
  {
    key: 'type', label: '类型', type: 'string', options: [
      { value: 'category', label: '分类' },
      { value: 'tag', label: '标签' },
    ]
  },
  {
    key: 'status', label: '状态', type: 'string', options: [
      { value: 'public', label: '公开' },
      { value: 'private', label: '私有' },
      { value: 'draft', label: '草稿' },
    ]
  },
  { key: 'parent', label: '父本' },
  { key: 'count', label: '计数' },
  { key: 'order', label: '排序' },
  { key: 'created_at', label: '创建时间', type: 'timestamp', },
  { key: 'updated_at', label: '更新时间', type: 'timestamp', },
  { key: 'release_at', label: '发布时间', type: 'timestamp', },
  { key: 'deleted_at', label: '删除时间', type: 'timestamp', },
]
export const original_content = [
  {
    key: 'cid', label: '编号', type: 'number', table: {
      visible: true,
      width: '80px',
    },
    primary_key: true,
  },
  {
    key: 'title', label: '标题', type: 'string',
    table: {
      visible: true,
      header: {
        type: 'input'
      }
    },
    form: {
      visible: true,
      type: 'input',
    },
    mock: () => Random.title(),
    rule: []
  },
  {
    key: 'slug', label: '标识', type: 'string',
    table: {
      visible: true,
      width: '100px',
    },
    form: {
      visible: true,
      type: 'input',
    },
    mock: () => Random.guid(),
  },
  {
    key: 'ico', label: '徽标', type: 'string',
    table: {
      visible: false
    }, form: {
      visible: true,
      type: 'input',
    },
  },
  {
    key: 'text', label: '内容', type: 'string', table: {
      visible: true
    },
    form: {
      visible: true,
      type: 'markdown',
    },
    mock: () => Random.paragraph(10),
  },
  {
    key: 'type', label: '类型', type: 'string',
    table: {
      visible: true,
      width: '100px',
      header: {
        type: 'select'
      },
      filter: ({ row, $index, $this, $parent }) => {
        const active = $this.options.find(v => v.value === row[$this.key])
        return active ? active.label : row[$this.key]
      }
    },
    options: [
      { value: 'post', label: '正文' },
      { value: 'page', label: '页面' },
      { value: 'template', label: '模板' },
    ]
  },
  {
    key: 'status', label: '状态', type: 'string',
    table: {
      visible: true,
      width: '100px',
      header: {
        type: 'select'
      },
      filter: ({ row, $index, $this, $parent }) => {
        const active = $this.options.find(v => v.value === row[$this.key])
        return active ? active.label : row[$this.key]
      }
    },
    form: {
      visible: true,
      type: 'select',
    },
    options: [
      { value: 'publish', label: '公开' },
      { value: 'private', label: '私有' },
      { value: 'draft', label: '草稿' },
    ]
  },
  { key: 'parent', label: '父本' },
  { key: 'count', label: '计数' },
  { key: 'order', label: '排序' },
  {
    key: 'created_at', label: '创建时间', type: 'timestamp', table: {
      visible: true,
      width: '133px'
    },
  },
  {
    key: 'updated_at', label: '更新时间', type: 'timestamp', table: {
      visible: true,
      width: '133px'
    },
  },
  { key: 'release_at', label: '发布时间', type: 'timestamp', },
  { key: 'deleted_at', label: '删除时间', type: 'timestamp', },
]
export const original_link = [
  { key: 'cid', label: '编号', primary_key: true, type: 'number', },
  { key: 'title', label: '标题' },
  { key: 'ico', label: '徽标' },
  { key: 'url', label: '地址' },
  { key: 'description', label: '说明' },
  {
    key: 'type', label: '类型', type: 'string', options: [
      { value: 'category', label: '分类' },
      { value: 'tag', label: '标签' }
    ]
  },
  {
    key: 'status', label: '状态', type: 'string', options: [
      { value: 'public', label: '公开' },
      { value: 'private', label: '私有' },
      { value: 'draft', label: '草稿' }
    ]
  },
  { key: 'parent', label: '父本' },
  { key: 'count', label: '计数' },
  { key: 'order', label: '排序' },
  { key: 'created_at', label: '创建时间', type: 'timestamp', },
  { key: 'updated_at', label: '更新时间', type: 'timestamp', },
  { key: 'release_at', label: '发布时间', type: 'timestamp', },
  { key: 'deleted_at', label: '删除时间', type: 'timestamp', },
]
// Meta
export const insert_meta_item = (data = {}, params = {}) => request({
  url: `/api/${key}/insert_meta_item`,
  method: 'post',
  data,
  params
})
export const delete_meta_list = (data = {}, params = {}) => request({
  url: `/api/${key}/delete_meta_list`,
  method: 'post',
  data,
  params
})
export const update_meta_item = (data = {}, params = {}) => request({
  url: `/api/${key}/update_meta_item`,
  method: 'post',
  data,
  params
})
export const select_meta_item = (data = {}, params = {}) => request({
  url: `/api/${key}/select_meta_item`,
  method: 'post',
  data,
  params
})
export const select_meta_list = (data = {}, params = {}) => request({
  url: `/api/${key}/select_meta_list`,
  method: 'post',
  data,
  params
})
export const select_meta_tree = (data = {}, params = {}) => request({
  url: `/api/${key}/select_meta_tree`,
  method: 'post',
  data,
  params
})
// Content

export const insert_content_item = (data = {}, params = {}) => request({
  url: `/api/${key}/insert_content_item`,
  method: 'post',
  data,
  params
})
export const delete_content_list = (data = {}, params = {}) => request({
  url: `/api/${key}/delete_content_list`,
  method: 'post',
  data,
  params
})
export const update_content_item = (data = {}, params = {}) => request({
  url: `/api/${key}/update_content_item`,
  method: 'post',
  data,
  params
})
export const select_content_item = (data = {}, params = {}) => request({
  url: `/api/${key}/select_content_item`,
  method: 'post',
  data,
  params
})
export const select_content_list = (data = {}, params = {}) => request({
  url: `/api/${key}/select_content_list`,
  method: 'post',
  data,
  params
})
