<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

class VendorClearUselessCommand extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'vendor:clear-useless';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Clear useless files from vendor packages';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {

    $file = (new \Symfony\Component\Yaml\Yaml())->parseFile(base_path('.useless.yml'));
    var_dump($file);
    $this->info('Clear uesless vendor files successfully!');
    return 0;
  }

  public function isGlobalFile()
  {
  }
}
