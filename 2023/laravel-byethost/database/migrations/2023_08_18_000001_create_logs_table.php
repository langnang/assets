<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('logs', function (Blueprint $table) {
      $table->id();
      $table->string('instance')->nullable();
      $table->string('channel')->nullable();
      $table->string('level')->nullable();
      $table->string('level_name')->nullable();
      $table->string('message')->nullable();
      $table->string('context')->nullable();
      $table->string('remote_addr')->nullable();
      $table->string('user_agent')->nullable();
      $table->timestamps();
      $table->timestamp('release_at')->nullable()->comment('发布时间');
      $table->timestamp('deleted_at')->nullable()->comment('删除时间');
    });
    \DB::statement("ALTER TABLE `logs` comment '基本日志表'");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('logs');
  }
}
