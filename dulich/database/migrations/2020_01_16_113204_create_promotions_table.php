<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('url_rewrite');
            $table->string('image');
            $table->longtext('Detail');
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
        Schema::drop('promotions');
    }
}
