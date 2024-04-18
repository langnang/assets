<?php

$options = [
  'meta.form.default' => [],
  'meta.type.options.default' => [
    ['label' => "tag", 'value' => '标签'],
    ['label' => "category", 'value' => '目录'],
    ['label' => "collection", 'value' => '集合'],
    ['label' => "rank", 'value' => '榜单'],
  ],
  'meta.status.options.default' => [
    ['label' => "draft", 'value' => '草稿'],
    ['label' => "private", 'value' => '私有'],
    ['label' => "public", 'value' => '公开'],
  ],
  'content.form.default' => [
    ['name' => 'titie', 'label' => '标题', 'type' => 'input'],
    ['name' => 'slug', 'label' => '标识', 'type' => 'input'],
    ['name' => 'ico', 'label' => '徽标', 'type' => 'input'],
    ['name' => 'type', 'label' => '类型', 'type' => 'checkbox'],
    ['name' => 'status', 'label' => '状态', 'type' => 'checkbox'],
    ['name' => 'order', 'label' => '排序', 'type' => 'number'],
    ['name' => 'parent', 'label' => '父本', 'type' => 'number'],
  ],
  'content.type.options.default' => [
    ['label' => "post", 'value' => '正文'],
    ['label' => "template", 'value' => '模板'],
    ['label' => "page", 'value' => '页面'],
  ],
  'content.type.options.question' => [],
  'content.type.options.spider' => [
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
  'content.status.options.default' => [
    ['label' => "draft", 'value' => '草稿'],
    ['label' => "private", 'value' => '私有'],
    ['label' => "public", 'value' => '公开'],
  ],
  'content.text.openapi' => [],
  'content.text.snippet' => [],
  'content.text.spider' => [
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
];

foreach ($options as $key => $value) {
  var_dump([$key, serialize($value)]);
}



phpinfo();
