import Mock from 'mockjs'
const { Random } = Mock
export const type_options = [
  { value: 'category', label: '分类', visible: true, type: 'meta', group: ['article', 'icon', 'webstack', 'question'], },
  { value: 'tag', label: '标签', visible: true, type: 'meta', group: ['article', 'icon', 'webstack', 'question'], },

  { value: 'post', label: '正文', visible: true, type: 'content', group: ['article', 'icon', 'webstack'], },
  { value: 'page', label: '页面', visible: true, type: 'content', group: ['article', 'icon', 'webstack'], },
  { value: 'template', label: '模板', visible: true, type: 'content', group: ['article', 'icon', 'webstack'], },

  { value: 'radio', label: '单选题', visible: true, type: 'content', group: ['question'], },
  { value: 'checkbox', label: '多选题', visible: true, type: 'content', group: ['question'], },
  { value: 'switch', label: '判断题', visible: true, type: 'content', group: ['question'], },
  { value: 'input', label: '填空题', visible: true, type: 'content', group: ['question'], },
  { value: 'markdown', label: '概述题', visible: true, type: 'content', group: ['question'], },
  { value: 'code', label: '编程题', visible: true, type: 'content', group: ['question'], },
]
export const type_filter = ({ row, $index, $target, $this, $parent }) => {
  const active = $this.options($target).find(v => v.value === row[$this.key || $index])
  return active ? active.label : row[$this.key || $index]
}

export const status_options = [
  { value: 'publish', label: '公开', visible: true, },
  { value: 'private', label: '私有', visible: true, },
  { value: 'draft', label: '草稿', visible: true, },
]
export const status_filter = ({ row, $index, $target, $this, $parent }) => {
  const active = $this.options($target).find(v => v.value === row[$this.key || $index])
  return active ? active.label : row[$this.key || $index]
}

const default_keys = {
  mid: {
    label: '编号',
    table: {
      width: '80px'
    },
  },
  cid: {
    label: '编号',
    table: {
      width: '80px'
    },
  },
  coid: {
    label: '编号',
    table: {
      width: '80px'
    },
  },
  lid: {
    label: '编号',
    table: {
      width: '80px'
    },
  },
  name: {
    label: '名称',
    table: {
      // width: '280px',
      header: {
        type: 'input'
      }
    },
    form: {
      type: 'input',
    },
    mock: () => Random.title(),
    rule: []
  },
  title: {
    label: '标题',
    table: {
      // width: '280px',
      header: {
        type: 'input'
      }
    },
    form: {
      type: 'input',
    },
    mock: () => Random.title(),
    rule: []
  },
  slug: {
    label: '标识',
    table: {
      width: '100px',
    },
    form: {
      type: 'input',
    },
    mock: () => Random.guid(),
  },
  ico: {
    label: '徽标',
    table: {
      width: '60px',
    },
    form: {
      type: 'input',
    },
    mock: () => Random.image('100x100'),
    component: 'ico'
  },
  url: {
    label: '地址',
    table: {
      width: '200px',
    },
    form: {
      type: 'input',
    },
    mock: () => Random.url()
  },
  description: {
    label: '说明',
    table: {
    },
    form: {
      type: 'textarea',
    },
    mock: () => Random.paragraph(10),
  },
  text: {
    label: '正文',
    table: {
    },
    form: {
      type: 'markdown',
    },
    mock: () => Random.paragraph(10),
  },
  type: {
    label: '类型',
    options: (key) => type_options,
    table: {
      width: '100px',
      header: {
        type: 'select'
      },
    },
    form: {
      type: 'select',
    },
    filter: type_filter,
    mock: ({ $this, $index }) => Mock.mock({
      'array|1': $this.options($index).map(v => v.value)
    })['array']
  },
  status: {
    label: '状态',
    options: (key) => status_options,
    table: {
      width: '100px',
      header: {
        type: 'select'
      },
    },
    form: {
      type: 'select',
    },
    filter: status_filter,
    mock: ({ $this, $index }) => Mock.mock({
      'array|1': $this.options($index).map(v => v.value)
    })['array']
  },
  parent: {
    label: '父本编号'
  },
  count: {
    label: '计数'
  },
  order: {
    label: '排序'
  },
  commentsNum: {
    label: '评论数'
  },
  password: {
    label: '密码',
    description: '私有状态访问密码',
  },
  allowComment: {
    label: '允许评论'
  },
  allowPing: {
  },
  allowFeed: {
    label: '允许评论'
  },
  template: {
    label: '模板编号'
  },
  user: {
    label: '作者',
  },
  support: {},
  views: {},
  suggestion: {
    label: '答案',
    form: {
      type: 'textarea',
    },
    filter: ({ row, $index, $target, $this, $parent }) => {
      if (row.type === 'radio') {
        return row[$index].split(',').map(v => row.options[v]).join('\r\n')
      } else {
        return row[$index]
      }
      // console.log('🚀 ~ file: index.js:243 ~ default_keys.suggestion.{ row, $index, $target, $this, $parent }:', { row, $index, $target, $this, $parent })
      // console.log(row[$index].split(','))
    },
    mock: () => Random.paragraph(10),
  },
  options: {
    label: '选项',
  },
  reprint: {
    label: '转载',
    children: {
      url: '地址',
      title: '标题'
    },
  },
  relationships: {
    label: '关联',
  },
  created_at: {
    label: '创建时间',
    table: {
      width: '133px'
    },
  },
  updated_at: {
    label: '修改时间',
    table: {
      width: '133px'
    },
  },
  release_at: {
    label: '发布时间',
    table: {
      width: '133px'
    },
  },
  deleted_at: {
    label: '删除时间',
    table: {
      width: '133px'
    },
  },
}
export const $original_meta = {
  $tableColumns: ['mid', 'name', 'slug', 'ico', 'description', 'type', 'status', 'created_at', 'updated_at', 'release_at'],
  $formItems: ['name', 'slug', 'ico', 'description', 'type'],
  ...default_keys,
  type: {
    ...default_keys.type,
    options: (key) => type_options.filter(v => v.type === 'meta' && v.group.includes(key))
  },
}
export const $original_content = {
  $tableColumns: ['cid', 'title', 'slug', 'ico', 'description', 'type', 'status', 'created_at', 'updated_at', 'release_at'],
  $formItems: ['title', 'slug', 'ico', 'description', 'text', 'type'],
  ...default_keys,
  type: {
    ...default_keys.type,
    options: (key) => type_options.filter(v => v.type === 'content' && v.group.includes(key))
  },
}
export const $original_comment = {
  $tableColumns: [],
  $formItems: [],
  ...default_keys,
}
export const $original_link = {
  $tableColumns: [],
  $formItems: [],
  ...default_keys,
}

export const $original_field = {
  $tableColumns: [],
  $formItems: [],
  ...default_keys,
}
