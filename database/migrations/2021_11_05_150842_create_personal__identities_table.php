<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalidentities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('gender_id');
            $table->foreignId('edu_id');
            $table->string('name');
            $table->date('dob');
            $table->string('address');
            $table->string('phone');          
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
        Schema::dropIfExists('personalidentities');
    }
}
