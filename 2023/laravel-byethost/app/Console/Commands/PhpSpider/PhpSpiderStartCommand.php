<?php

namespace App\Console\Commands\PhpSpider;

use Illuminate\Console\Command;

class PhpSpiderStartCommand extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'phpspider:start';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Run a phpspider program';

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
    // var_dump()
    return 0;
  }
}
