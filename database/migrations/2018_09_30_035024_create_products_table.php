<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('商品名称');
            $table->integer('category_id')->index()->unsigned()->comment('所属品类id');
            $table->string('fabric')->comment('布料');
            $table->string('gsm')->comment('');
            $table->string('material')->comment('原料成分');
            $table->string('attach')->nullable();
            $table->string('head_image')->comment('首图链接');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `products` comment '产品表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
