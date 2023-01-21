<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('personal_identity_id');
            $table->foreignId('job_id');
            $table->string('cv');              
            $table->string('photo');              
            $table->string('application_letter');              
            $table->string('certificate');              
            $table->string('transcript');              
            $table->string('str')->nullable();              
            $table->string('document')->nullable();              
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('applicants');
    }
}
