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
            $table->string('departureTime');
            $table->string('Time');
            $table->string('startPlace');
            $table->integer('price');
            $table->integer('max');
            $table->integer('discountPrice');
            $table->longtext('Summary');
            $table->longtext('note');
            $table->integer('booked');
            $table->string('city');
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
