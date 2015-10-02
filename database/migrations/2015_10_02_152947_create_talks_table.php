<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function(Blueprint $table) {
            $table->increments('id');
            $table->string('speaker');
            $table->string ('title');
            $table->dateTime('starttime');
            $table->dateTime('endtime');
            $table->text('abstract');
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
        Schema::drop('talks');
    }



}
