<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('sheet_question', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('sheet_id');
                $table->unsignedInteger('question_id');
                $table->text('answer');
                $table->timestamps();
    
                $table->foreign('sheet_id')->references('id')->on('sheets');
                $table->foreign('question_id')->references('id')->on('questions');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sheet_question');
    }
}
