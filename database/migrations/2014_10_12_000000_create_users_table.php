<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('account');
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->tinyInteger('verify'); //房客審核確認(0:失敗 1:成功)
            $table->tinyInteger('level'); //身分等級(1:房客 2:房東 3管理人員)
            $table->string('status'); //狀態、進度(用於房東)(1:註冊 2:刊登 3審核房屋 4成功審核)
            $table->string('rememberToken', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
