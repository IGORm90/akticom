<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsvFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_files', function (Blueprint $table) {
            $table->id();
            $table->text('code');
            $table->text('title');
            $table->text('lvl1');
            $table->text('lvl2');
            $table->text('lvl3');
            $table->text('price');
            $table->text('price_MP');
            $table->text('in_stock');
            $table->text('property_fields');
            $table->text('mutual_purchases');
            $table->text('measure');
            $table->text('image');
            $table->text('in_main_page');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csv_files');
    }
}
