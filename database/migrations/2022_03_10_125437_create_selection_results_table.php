<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectionResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selection_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('applicant_id');
            $table->foreignId('administration_id')->nullable();
            $table->foreignId('writtentest_id')->nullable();
            $table->foreignId('practicetest_id')->nullable();
            $table->foreignId('interview_id')->nullable();
            $table->boolean('result')->nullable();   
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('location')->nullable();
            $table->text('provision')->nullable();
            $table->boolean('attendance')->nullable();               
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
        Schema::dropIfExists('selection_results');
    }
}
