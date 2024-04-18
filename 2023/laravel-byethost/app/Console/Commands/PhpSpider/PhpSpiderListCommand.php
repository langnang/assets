<?php

namespace App\Console\Commands\PhpSpider;

use Illuminate\Console\Command;

class PhpSpiderListCommand extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'phpspider:list';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'List phpspider programs';

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
    $this->info('Clear uesless vendor files successfully!');
    return 123;
    return 0;
  }
}
