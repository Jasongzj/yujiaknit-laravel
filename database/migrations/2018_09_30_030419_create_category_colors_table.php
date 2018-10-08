<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCategoryColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_colors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->comment('品类id');
            $table->integer('color_id')->unsigned()->comment('颜色id');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `category_colors` comment '产品-颜色关系表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_colors');
    }
}
