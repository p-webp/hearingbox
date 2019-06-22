<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetsMemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets_memos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sheet_id');
            $table->text('memo');
            $table->timestamps();

            $table->foreign('sheet_id')->references('id')->on('sheets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sheets_memos');
    }
}
