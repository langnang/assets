import Mock from "mockjs"
const { Random } = Mock
export const types = [
  { value: 'category', label: '分类', visible: true, type: 'meta', group: ['article', 'icon', 'webstack', 'question'], },
  { value: 'tag', label: '标签', visible: true, type: 'meta', group: ['article', 'icon', 'webstack', 'question'], },

  { value: 'post', label: '正文', visible: true, type: 'content', group: ['article', 'icon', 'webstack', 'spider'], },
  { value: 'page', label: '页面', visible: true, type: 'content', group: ['article', 'icon', 'webstack', 'spider'], },
  { value: 'template', label: '模板', visible: true, type: 'content', group: ['article', 'icon', 'webstack', 'spider'], },

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

export const statuses = [
  { value: 'publish', label: '公开', visible: true, },
  { value: 'private', label: '私密', visible: true, },
  { value: 'draft', label: '草稿', visible: true, },
]
export const status_filter = ({ row, $index, $target, $this, $parent, $value }) => {
  const active = $this.options($target).find(v => v.value === ($value || row[$this.key || $index]))
  return active ? active.label : row[$this.key || $index]
}
export const map = {
  // base
  ...{
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
        col: 16,
        type: 'input',
      },
      mock: () => Random.title(),
      rule: []
    },
    title: {
      label: '标题',
      table: {
        // width: '280px',
        align: 'left',
        header: {
          type: 'input'
        },
        html: ({ scope }) => {
          return `<span class="el-tag el-tag--mini el-tag--light">${scope.row.status}</span>` + scope.row.title + 123
        }
      },
      form: {
        col: 16,
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
        col: 8,
        type: 'input',
      },
      mock: () => Random.guid(),
    },
    ico: {
      label: '徽标',
      table: {
        width: '60px',
        component: 'ico',
      },
      form: {
        type: 'input',
      },
      mock: () => Random.image('100x100'),
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
      options: (key) => types,
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
      options: (key) => statuses,
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
  },
  ...{},
  ...{},

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
  // question
  ...{
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
        // console.log('🚀 ~ file: index.js:243 ~ map.suggestion.{ row, $index, $target, $this, $parent }:', { row, $index, $target, $this, $parent })
        // console.log(row[$index].split(','))
      },
      mock: () => Random.paragraph(10),
    },
    options: {
      label: '选项',
    },
  },
  // spider
  ...{
    domains: {
      label: "域名",
      options: () => [],
      form: {
        type: 'select',
        attrs: {
          multiple: true,
          filterable: true,
          'allow-create': true,
        },
        events: {}
      },
    },
    scan_urls: {
      label: "入口",
      description: "入口链接",
      options: () => [],
      form: {
        type: 'select',
        attrs: {
          multiple: true,
          filterable: true,
          'allow-create': true,
        },
        events: {}
      },
    },
    list_url_regexes: {
      label: "列表页",
      description: "列表页url的规则",
      options: () => [],
      form: {
        type: 'select',
        attrs: {
          multiple: true,
          filterable: true,
          'allow-create': true,
        },
        events: {}
      },
    },
    content_url_regexes: {
      label: "内容页",
      description: "内容页url的规则",
      options: () => [],
      form: {
        type: 'select',
        attrs: {
          multiple: true,
          filterable: true,
          'allow-create': true,
        },
        events: {},
      },
    },
    export_table: {
      label: "表名",
      description: "爬虫爬取数据导出: ",
    },
    fields: {
      label: "抽取规则",
      description: "定义内容页的抽取规则",
      form: {
        component: "SpiderFormTable",
        events: {
          input: (value) => {
            console.log("🚀 ~ file: _original.js:303 ~ value:", value);
          }
        }
      }
    },
    expand: {
      label: "拓展规则",
      description: "定义拓展的抽取规则",
      form: {
        component: "SpiderFormTabs",
        events: {
          input: (value) => {
            console.log("🚀 ~ file: _original.js:303 ~ value:", value);
          }
        }
      }
    }
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
  $tableColumns: ['mid', 'name', 'slug', 'type', 'status', 'created_at', 'updated_at', 'release_at'],
  $formItems: ['name', 'slug', 'type'],
  ...map,
  type: {
    ...map.type,
    options: (key) => types.filter(v => v.type === 'meta' && v.group.includes(key))
  },
}
export const $original_content = {
  $tableColumns: ['cid', 'title', 'slug', 'type', 'status', 'created_at', 'updated_at', 'release_at'],
  $formItems: ['title', 'slug', 'text', 'type'],
  ...map,
  type: {
    ...map.type,
    options: (key) => types.filter(v => v.type === 'content' && v.group.includes(key))
  },
}
export const $original_comment = {
  $tableColumns: [],
  $formItems: [],
  ...map,
}
export const $original_link = {
  $tableColumns: [],
  $formItems: [],
  ...map,
}

export const $original_field = {
  $tableColumns: [],
  $formItems: [],
  ...map,
}
