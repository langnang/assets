{{-- 热榜 --}}
@php
  $name = $name ?? 'tophub';
  $id = $id ?? $name . '-' . (string) Str::uuid();
  $props = $props ?? [];
  $slug = $slug ?? 'news';
  $data = $data ?? [];
  $tabs = $tabs ?? [
      [
          'name' => '综合',
          'slug' => 'news',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => $data['news'] ?? [],
                  '_data' => [
                      [
                          'name' => '百度',
                          'description' => '实时热点',
                          'ico' => 'https://www.baidu.com/favicon.ico',
                          'href' => 'https://www.baidu.com/',
                      ],
                      ['name' => '知乎', 'description' => '热榜', 'ico' => 'https://www.zhihu.com/favicon.ico', 'href' => 'https://www.zhihu.com'],
                      ['name' => '微博', 'description' => '话题榜', 'ico' => 'https://www.weibo.com/favicon.ico', 'href' => 'https://weibo.com/newlogin'],
                      ['name' => '微信', 'description' => '', 'ico' => 'https://mp.weixin.qq.com/favicon.ico', 'href' => ''],
                      ['name' => '澎湃', 'description' => '', 'ico' => 'https://www.thepaper.cn/favicon.ico', 'href' => 'https://www.thepaper.cn/'],
                      ['name' => '知乎日报', 'description' => '', 'ico' => 'https://zhihu.com/favicon.ico', 'href' => 'https://daily.zhihu.com/'],
                      ['name' => '今日头条', 'description' => '', 'ico' => 'https://www.toutiao.com/favicon.ico', 'href' => 'https://www.toutiao.com'],
                      ['name' => '历史上的今天', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '神马搜索', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '搜狗', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '360搜索', 'description' => '实时热点榜单', 'ico' => 'https://www.so.com/favicon.ico', 'href' => 'https://www.so.com/'],
                      ['name' => '豆瓣话题广场', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '简书', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => 'CCTV央视新闻', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '今日热搜', 'description' => '', 'ico' => 'https://tophub.today/favicon.ico', 'href' => 'https://tophub.today/'],
                      ['name' => '即使热榜', 'description' => '', 'ico' => 'http://m.jsrank.cn/favicon.ico', 'href' => 'http://m.jsrank.cn/'],
                  ],
              ],
          ],
      ],
      [
          'name' => '科技',
          'slug' => 'tech',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '娱乐',
          'slug' => 'ent',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '哔哩哔哩',
                          'description' => '',
                          'ico' => 'https://www.bilibili.com/favicon.ico',
                          'href' => '',
                      ],
                      ['name' => '抖音', 'description' => '', 'ico' => 'https://www.douyin.com/favicon.ico', 'href' => ''],
                      ['name' => '豆瓣电影', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '起点中文网', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '纵横中文网', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '起点女生网', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '小红书', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '猫眼', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '3DM游戏网', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '喜马拉雅', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '小鸡词典', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '快手', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '游民星空', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '知乎', 'description' => '时尚热榜', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => 'IMDb', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '腾讯视频', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '豆瓣', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '不羞涩', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '百度视频', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '荔枝', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
              [
                  'name' => '小说',
                  'data' => [
                      [
                          'name' => '起点中文网',
                          'description' => '',
                          'ico' => '/favicon.ico',
                          'href' => '',
                      ],
                      [
                          'name' => '纵横中文网',
                          'description' => '',
                          'ico' => '/favicon.ico',
                          'href' => '',
                      ],
                  ],
              ],
              [
                  'name' => '图片',
                  'data' => [
                      [
                          'name' => '',
                          'description' => '',
                          'ico' => '/favicon.ico',
                          'href' => '',
                      ],
                  ],
              ],
              [
                  'name' => '音频',
                  'data' => [
                      [
                          'name' => '',
                          'description' => '',
                          'ico' => '/favicon.ico',
                          'href' => '',
                      ],
                  ],
              ],
              [
                  'name' => '视频',
                  'data' => [
                      [
                          'name' => '',
                          'description' => '',
                          'ico' => '/favicon.ico',
                          'href' => '',
                      ],
                  ],
              ],
              [
                  'name' => '游戏',
                  'data' => [
                      [
                          'name' => '',
                          'description' => '',
                          'ico' => '/favicon.ico',
                          'href' => '',
                      ],
                  ],
              ],
          ],
      ],
      [
          'name' => '社区',
          'slug' => 'community',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '吾爱破解',
                          'ico' => 'https://www.52pojie.cn/favicon.ico',
                      ],
                      ['name' => '百度贴吧', 'ico' => 'https://tieba.baidu.com/favicon.ico'],
                      ['name' => '虎扑社区', 'ico' => 'https://bbs.hupu.com/favicon.ico'],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '购物',
          'slug' => 'shopping',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '财经',
          'slug' => 'finance',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '学术 ',
          'slug' => 'academic',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'description' => '',
                          'ico' => '/favicon.ico',
                      ],
                  ],
              ],
          ],
      ],
      [
          'name' => '开发',
          'slug' => 'developer',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => 'GitHub',
                          'description' => 'Trending Today',
                          'ico' => 'https://github.com/favicon.ico',
                      ],
                      ['name' => 'CSDN', 'ico' => 'https://www.csdn.net/favicon.ico'],
                      ['name' => '掘金', 'ico' => 'https://juejin.cn/favicon.ico'],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
              [
                  'name' => '教程',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                  ],
              ],
              [
                  'name' => '试题',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                  ],
              ],
          ],
      ],
      [
          'name' => '设计',
          'slug' => 'design',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '校务',
          'slug' => 'university',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '政务',
          'slug' => 'organization',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '专栏',
          'slug' => 'blog',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '报刊',
          'slug' => 'epaper',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
      [
          'name' => '应用',
          'slug' => 'software',
          'tree' => [
              [
                  'name' => '推荐',
                  'data' => [
                      [
                          'name' => '',
                          'ico' => '/favicon.ico',
                      ],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                      ['name' => '', 'description' => '', 'ico' => '/favicon.ico', 'href' => ''],
                  ],
              ],
          ],
      ],
  ];
  
@endphp
<style>
  [id={{ $id }}] {}

  [id={{ $id }}] .tab-content .card .list-group-flush,
  [id={{ $id }}] .tab-content .card .card-footer {
    display: none;
  }

  [id={{ $id }}] .tab-content .card.open .list-group-flush,
  [id={{ $id }}] .tab-content .card.open .card-footer {
    display: block;
  }
</style>

<div class="tophub" id="{{ $id }}">

  <ul class="nav nav-tabs nav-fill" id="tophubTab" role="tablist">
    @foreach ($tabs as $index => $item)
      <li class="nav-item" role="presentation" data-role="tophub-item">
        <a class="nav-link text-body @if ($slug == $item['slug']) active @endif" id="{{ $item['slug'] }}-tab"
          href="/home/{{ $item['slug'] }}">{{ $item['name'] }}
        </a>
      </li>
    @endforeach
  </ul>

  {{-- <ul class="nav nav-tabs nav-fill" id="tophubTab" role="tablist">
    @foreach ($tabs as $index => $item)
      <li class="nav-item" role="presentation" data-role="tophub-item">
        <a class="nav-link text-body @if ($slug == $item['slug']) active @endif" id="{{ $item['slug'] }}-tab"
          data-toggle="tab" data-target="#{{ $item['slug'] }}" type="button" role="tab"
          aria-controls="{{ $item['slug'] }}" aria-selected="true">{{ $item['name'] }}
        </a>
      </li>
    @endforeach
  </ul> --}}
  <div class="tab-content" id="tophubTabContent">
    @foreach ($tabs as $index => $tab)
      <div class="tab-pane fade @if ($slug == $tab['slug']) show active @endif" id="{{ $tab['slug'] }}"
        role="tabpanel" aria-labelledby="{{ $tab['slug'] }}-tab">
        @foreach ($tab['tree'] ?? [] as $category)
          <div class="row mt-2">
            <div class="col-sm-12">
              <div class="alert alert-secondary mb-0" role="alert" style="padding: 0.5rem 1rem;">
                {{ $category['name'] }}
                <div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example"
                  style="margin-top: -0.25rem;">
                  <button type="button" class="btn btn-primary bi bi-list"></button>
                  <button type="button" class="btn btn-light bi bi-grid-fill"></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-2">
            @foreach ($category['data'] ?? [] as $item)
              @empty($item['name'])
              @else
                <div class="col mt-2">
                  <div class="card">
                    <div class="card-header">
                      <div class="media" style="cursor: pointer;">
                        <img src="{{ $item['ico'] }}" class="align-self-center mr-2" width="18" height="18"
                          alt="">
                        <div class="media-body">
                          <h6 class="mt-0 mb-0">{{ $item['name'] }}
                            @empty($item['slug'])
                              <i class="bi bi-link-45deg float-right"></i>
                            @else
                              <a href="{{ $item['slug'] }}" target="_blank"><i
                                  class="bi bi-link-45deg float-right"></i></a>
                            @endempty
                            <small class="text-muted mr-2 float-right">{{ $item['description'] ?? '' }}</small>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <ul class="list-group list-group-sm list-group-flush" style="position: relative;height: 328px;">
                      @foreach ($item['contents'] ?? [] as $content)
                        <li class="list-group-item" title="{{ $content['title'] }}">
                          <div class="row">
                            <a href="/{{ $slug }}/content/{{ $content['cid'] }}"
                              class="col text-body text-truncate">
                              {{ $content['title'] }}
                            </a>
                            <div class="col col-md-auto">
                              <a class="bi bi-link-45deg" href="{{ $content['slug'] ?? '#' }}" target="_blank"></a>
                            </div>
                          </div>
                          {{-- <small class="float-right">
                            <span class="text-muted">08.20</span>
                            <a class="bi bi-link-45deg" href="{{ $content['slug'] ?? '#' }}" target="_blank"></a>
                          </small> --}}
                        </li>
                      @endforeach
                    </ul>
                    <div class="card-footer" style="padding: 0.25rem 0.75rem;text-align: right;">
                      {{ $item['updated_at'] ?? '' }}
                    </div>
                  </div>
                </div>
              @endempty
            @endforeach
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
</div>
