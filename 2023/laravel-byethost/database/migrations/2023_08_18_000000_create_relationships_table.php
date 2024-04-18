<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('relationships', function (Blueprint $table) {
      $table->integer('meta_id')->nullable();
      $table->integer('content_id')->nullable();
      $table->integer('link_id')->nullable();
    });
    \DB::statement("ALTER TABLE `relationships` comment '基本关联表'");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('relationships');
  }
}
