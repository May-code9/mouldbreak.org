<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function(Blueprint $table){
          $table->increments('id');
          $table->string('event_title');
          $table->string('event_display');
          $table->text('event_details');
          $table->string('event_speaker');
          $table->string('event_venue');
          $table->string('event_day');
          $table->string('event_month');
          $table->string('event_time');
          $table->string('timeline');
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
        Schema::dropIfExists('events');
    }
}
