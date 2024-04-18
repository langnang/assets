<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CheatSheetController extends BaseController
{
  use \App\Traits\Modules\CheatSheetTrait;

  use CheatSheetView;

  protected $MetaModel = \App\Models\CheatSheet\CheatSheetMeta::class;
  protected $ContentModel = \App\Models\CheatSheet\CheatSheetContent::class;
  protected $LinkModel = \App\Models\CheatSheet\CheatSheetLink::class;
}
trait CheatSheetView
{
  public function view_index(Request $request)
  {
    $return = array_merge([], $request->input('$return', []),);
    if (!isset($return['content']) && $request->filled('cid')) {
      $return['content'] = $this->getReturn($this->select_content_item(new Request(['cid' => $request->input('cid')])));
      $text = $return['content']['text'] ?? '';
      // dump(explode(PHP_EOL . '## ', $text));
      $return['content']['text_items'] = array_map(function ($item) {
        // dump(explode(PHP_EOL, $item));
        $exps = explode(PHP_EOL, $item);
        return ["title" => $exps[0], "text" => implode(PHP_EOL, array_slice($exps, 1))];
      }, array_slice(explode(PHP_EOL . '## ', $text), 1));
    } else {
    }
    $request->merge(['$return' => $return]);
    return parent::{__FUNCTION__}($request);
  }
}
