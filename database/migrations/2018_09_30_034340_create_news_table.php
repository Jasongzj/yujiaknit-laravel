<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('author')->comment('作者');
            $table->string('source')->comment('来源');
            $table->text('description')->comment('概要');
            $table->text('content')->comment('内容详情');
            $table->integer('view_count')->index()->unsigned()->default(0)->comment('阅读数');
            $table->integer('sort')->unsigned()->default(0)->comment('排序值');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `news` comment '新闻表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
