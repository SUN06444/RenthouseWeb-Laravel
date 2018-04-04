<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('house_id');
            $table->integer('user_id')->unsigned();
            $table->string('email');
            $table->string('phone');
            $table->string('contact');
            $table->string('relationship');
            $table->string('housename');
            $table->string('address');
            $table->string('lease_term');
            $table->string('rental');
            $table->string('housetype');
            $table->string('ping');
            $table->string('house_age');
            $table->string('deposit');
            $table->string('pet');
            $table->string('elevator');
            $table->string('opened');
            $table->string('parking_spaces');
            $table->string('house_limit');
            $table->string('material');
            $table->string('life_function');
            $table->string('curfew');
            $table->string('equipment');
            $table->string('security_equipment');
            $table->string('identity_requirements');
            $table->string('balcony');
            $table->string('others');
            $table->integer('click');
            $table->string('file1');
            $table->string('file2');
            $table->string('file3');
            $table->string('file4');
            $table->string('file5');
            $table->string('file6');
            $table->string('verify');
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
        Schema::dropIfExists('houses');
    }
}
