<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable()->comment('名字');
            $table->string('last_name')->nullable()->comment('姓氏');
            $table->string('email')->nullable()->comment('邮箱地址');
            $table->string('phone')->nullable()->comment('联系电话');
            $table->string('continent')->nullable()->comment('所在大洲');
            $table->string('message')->nullable()->comment('信息');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `contacts` comment '意向联系表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
