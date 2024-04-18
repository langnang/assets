<?php

namespace Database\Seeders;

use App\Http\Controllers\BaseController;
use App\Models\Base\Meta;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BaseSeeder extends Seeder
{
  public $Controller = \App\Http\Controllers\BaseController::class;
  /**
   * Run the database seeds.
   * terminal: php artisan db:seed --class=BaseSeeder
   * @return void
   */
  public function run()
  {
    $this->initialize();
  }
  /**
   * Initialize the database data.
   *
   * @return void
   */
  public function initialize()
  {
    try {
      $_logs = [__METHOD__];
      if (empty($this->prefix)) throw new Exception('unset prefix.');
      $file_path = 'database/initializations/' . $this->prefix . '.json';
      $data = json_decode(app('files')->get($file_path), true);
      $files = app('files')->allFiles('database/initializations/');
      // dump($files);
      $files = array_filter($files, function ($item) {
        return substr($item->getFilename(), 0, strlen($this->prefix) + 1) === $this->prefix . '.' && $item->getExtension() === 'json';
      });
      // dump($files);
      $controller = new $this->Controller;
      foreach ($files as $file) {
        // dump($file->getPathname());
        // dump($file->getExtension());
        $data = json_decode(app('files')->get($file->getPathname()), true);
        $controller->import_tree(new Request($data));
      }
      // artisan_dump("[" . date('Y-m-d H:i:s') . "] {$this->prefix} seeding successfully.");
    } catch (Exception $e) {
      // dump($e);
      throw new Exception($e->getMessage());
    }
    // var_dump(app('files')->exists($initialize_path));
    // if (!app('files')->exists($initialize_path)) {
    //   exit($initialize_path . ' not exist');
    // }
    // $initializes = app('files')->get($initialize_path);
    // foreach ($initializes as $table => $rows) {
    //   foreach ($rows as $row) {
    //     $this->install($table, $row);
    //   }
    // }
    // var_dump($initializes);
  }
  public function install()
  {
  }
}
