<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned()->comment('商品id');
            $table->string('intential_products')->nullable()->comment('意向产品');
            $table->string('name')->comment('联系人');
            $table->string('email')->nullable()->comment('联系邮箱');
            $table->string('quantity')->comment('意向数量');
            $table->string('market')->nullable()->comment('目标市场（xx, xx, xx）');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `inquiries` comment '询盘表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquiries');
    }
}
