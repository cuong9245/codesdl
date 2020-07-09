<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateToursTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('Code');
            $table->string('departureDay');
            $table->integer('Time');
            $table->string('startPlace');
            $table->integer('Price');
            $table->interger('max');
            $table->interger('percent');
            $table->integer('discountPrice');
            $table->string('summary');
            $table->longtext('note');
            $table->integer('booked');
            $table->string('tour');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tours');
    }
}
