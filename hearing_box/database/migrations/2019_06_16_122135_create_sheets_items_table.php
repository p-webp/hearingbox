<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sheet_id');
            $table->unsignedInteger('item_id');
            $table->text('answer');
            $table->timestamps();

            $table->foreign('sheet_id')->references('id')->on('sheets');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sheets_items');
    }
}
