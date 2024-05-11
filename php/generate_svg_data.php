<?php
/**
 * 生成 SVG 数据文件
 * @path /storage/php/generate/generate_svg_json.php
 * @return array
 */

function generate_svg_json(): array
{
  $return = [
    "metas" => [],
    "contents" => [],
    "_meta" => [
      "name" => "",
      "slug" => "",
      "ico" => "",
      "nameCn" => "",
      "description" => "",
      "type" => "",
      "contents" => [],
    ],
    "_content" => [
      "title" => "",
      "slug" => "",
      "ico" => "",
      "titleCn" => "",
      "description" => "",
      "type" => "",
      "metas" => [],
      "storage" => "img/ico/{{\$slug}}.ico",
    ],
  ];

  array_push($return['metas'], [
    "name" => "FontAwesome",
    "slug" => "fontawesome",
    "ico" => "",
    "nameCn" => "",
    "description" => "",
    "type" => "category",
    "contents" => [],
  ]);
  // FontAwesome
  $fontawesome = json_decode(file_get_contents(__DIR__ . '\..\lib\@fortawesome\fontawesome-free\6.5.1\metadata\icon-families.json'), true);
  // var_dump($fontawesome);
  foreach ($fontawesome as $key => $item) {

    foreach (array_keys($item['svgs']['classic']) as $classic) {
      array_push($return['contents'], [
        "title" => $item['label'],
        "slug" => $classic . '-' . $key,
        "type" => "svg",
        "relativePath" => "/lib/@fortawesome/fontawesome-free/6.5.1/svgs/$classic/$key.svg",
        "metas" => ["fontawesome", "fontawesome-free", $classic],
      ]);

      if (file_exists(__DIR__ . "/../svg/$classic/$key.svg")) {
        unlink(__DIR__ . "/../svg/$classic/$key.svg");
      }
    }
  }

  // SimpleIcons
  array_push($return['metas'], [
    "name" => "SimpleIcons",
    "slug" => "simple-icos",
    "ico" => "",
    "nameCn" => "",
    "description" => "",
    "type" => "category",
    "contents" => [],
  ]);
  $simpleIcons = json_decode(file_get_contents(__DIR__ . '\..\lib\simple-icons\11.14.0\_data\simple-icons.json'), true);
  foreach ($simpleIcons['icons'] as $item) {
    $classic = "brands";
    // $url = parse_url($item['source']);

    // var_dump($url);
    // $file = pathinfo($url['host']);
    // var_dump($file);
    // exit;
    $key = isset($item['slug']) ? $item['slug'] : preg_replace(["/ |-|'|\/|\\\\/", "/\./"], ["", "dot"], strtolower($item['title']));
    array_push($return['contents'], [
      "title" => $item['title'],
      "slug" => $classic . '-' . $key,
      "type" => "svg",
      "relativePath" => "/lib/simple-icons/11.14.0/icons/$key.svg",
      "metas" => ["simple-icos", $classic],
    ]);

    if (file_exists(__DIR__ . "/../svg/$classic/$key.svg")) {
      unlink(__DIR__ . "/../svg/$classic/$key.svg");
    }
  }



  // Bootstrap Icons


  // Output
  file_put_contents(__DIR__ . '/../json/svg.json', json_encode($return));

  return $return;
}



$return = generate_svg_json();

echo json_encode([
  "data" => array_slice($return['contents'], 0, 100),
  "size" => 100,
  "page" => 1,
  "total" => sizeof($return['contents'])
]);
