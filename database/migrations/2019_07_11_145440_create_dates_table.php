<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dates', function (Blueprint $table) {
            //times table
            $table->bigIncrements('id');
            $table->bigInteger('time_id')->unsigned();
            $table->bigInteger('movie_id')->unsigned();
            $table->time('start');
            $table->time('end');

            

            $table->timestamps();
        });

        Schema::table('dates', function (Blueprint $table) {
            $table->foreign('movie_id')
            ->references('id')->on('movies')
            ->onDelete('cascade');
        });

        Schema::table('dates', function (Blueprint $table) {
            $table->foreign('time_id')
            ->references('id')->on('times')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dates');
    }
}
