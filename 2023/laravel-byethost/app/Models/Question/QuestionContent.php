<?php

namespace App\Models\Question;

use App\Models\Base\Content;
use App\Traits\WebStackTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;


class QuestionContent extends Content
{
  use \App\Traits\Modules\QuestionTrait;

  public function model(array $row)
  {
    // dump([__METHOD__, $row]);
    if (empty($row[1]) || empty($row[2])) return;
    $type = $row[2];
    $typeOptions = [
      "radio" => ['单选', '单选题'],
      "checkbox" => ['多选', '多选题'],
      'switch' => ['判断', '判断题'],
      'input' => ['填空', '填空题'],
      'markdown' => ['概述', '概述题'],
      'code' => ['编程', '编程题'],
    ];
    foreach ($typeOptions as $key => $items) {
      if (in_array($type, $items)) {
        $type = $key;
        break;
      }
    }
    $suggestion = trim($row[4]);
    $options = array_map(function ($value) {
      return trim($value);
    }, array_filter(array_slice($row, 5), function ($value) {
      return null !== $value;
    }));
    switch ($type) {
      case 'radio':
        $suggestion = array_search($suggestion, $options);
        break;
      case 'checkbox':
        $suggestion = explode("\r\n", $suggestion);
        $suggestion = array_map(function ($value) {
          return array_search($suggestion, $options);
        }, $suggestion);
        $suggestion = implode(',', $suggestion);
        break;
      default:
        break;
    }
    return new $this([
      "cid" => $row[0],
      "title" => $row[1],
      "type" => $type,
      "description" => $row[3],
      "suggestion" => $suggestion,
      "text" => $row[5],
      "options" => $options,
      // "options" => json_encode($options),
    ]);
  }
}
