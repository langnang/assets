<?php
return [
  /**
   * 标记
   */
  'meta' => [
    'form' => [
      'default' => null,
    ],
    'status' => [
      'options' => [
        'default' => [
          ['label' => "草稿", 'value' => 'draft',],
          ['label' => "公开", 'value' => 'publish',],
          ['label' => "私有", 'value' => 'private',],
        ],
      ],

    ],
    'type' => [
      'options' => [
        'default' => [
          ['label' => "目录", 'value' => 'category',],
          ['label' => "标签", 'value' => 'tag',],
          ['label' => "集合", 'value' => 'collection',],
        ],
      ],
    ],
  ],
  /**
   * 内容
   */
  'content' => [
    'form' => [
      'default' => [
        ['name' => 'titie', 'label' => '标题', 'type' => 'input'],
        ['name' => 'slug', 'label' => '标识', 'type' => 'input'],
        ['name' => 'ico', 'label' => '徽标', 'type' => 'input'],
        ['name' => 'type', 'label' => '类型', 'type' => 'checkbox'],
        ['name' => 'status', 'label' => '状态', 'type' => 'checkbox'],
        ['name' => 'order', 'label' => '排序', 'type' => 'number'],
        ['name' => 'parent', 'label' => '父本', 'type' => 'number'],
      ],
      'question' => [
        // ['name' => 'option', 'label' => '选项', 'type' => 'input'],
      ],
    ],
    'text' => [
      'default' => "<!--markdown-->\r\n\r\n\r\n\r\n<!--more-->\r\n\r\n",
      'spider' => [
        'default' => [
          'scan_urls' => [],
        ],
        "discover" => [
          "urls" => [],
          "url" => "",
          "groups" => [],
          "contents" => "repeated//*[contains(@class,'content_wrapper')]",
          "contents_slug" => "//*[contains(@class,'content_slug_wrapper')]/@href|fill_url({{url}})",
          "contents_title" => "//*[contains(@class,'content_title_wrapper')]/@title",
          "contents_ico" => "//*[contains(@class,'content_ico_wrapper')]/@data-original"
        ],
        "detail" => [],
        "field_01" => [],
        "field_02" => [],
      ],
    ],
    'status' => [
      'options' => [
        'default' => [
          ['label' => "草稿", 'value' => 'draft',],
          ['label' => "公开", 'value' => 'publish', 'selected' => true],
          ['label' => "私有", 'value' => 'private',],
        ],
      ],
    ],
    'type' => [
      'options' => [
        'default' => [
          ['label' => "正文", 'value' => 'post', 'selected' => true],
          ['label' => "模板", 'value' => 'template',],
          ['label' => "页面", 'value' => 'page',],
        ],
        'question' => [
          ['label' => '单选', 'value' => 'radio', 'values' => ['radio', '单选', '单选题']],
          ['label' => '多选', 'value' => 'checkbox', 'values' => ['checkbox', '多选', '多选题']],
          ['label' => '判断', 'value' => 'switch', 'values' => ['switch', '判断', '判断题']],
          ['label' => '填空', 'value' => 'input', 'values' => ['input', '填空', '填空题']],
          ['label' => '简述', 'value' => 'markdown', 'values' => ['markdown', '简述', '简述题', '概述', '概述题'], 'selected' => true],
          ['label' => '编程', 'value' => 'code', 'values' => ['code', '编程', '编程题']],
        ],
        'spider' => [
          ['label' => "音频", "value" => 'post_audio'],
          ['label' => "图片", "value" => 'post_image'],
          ['label' => "资讯", "value" => 'post_news'],
          ['label' => "小说", "value" => 'post_novel'],
          ['label' => "试题", "value" => 'post_question'],
          ['label' => "语录", "value" => 'post_quote'],
          ['label' => "应用", "value" => 'post_software'],
          ['label' => "故事", "value" => 'post_story'],
          ['label' => "视频", "value" => 'post_video'],
        ],
      ],
    ],
  ],
];
