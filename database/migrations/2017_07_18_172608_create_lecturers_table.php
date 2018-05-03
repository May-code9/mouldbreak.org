<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function(Blueprint $table){
          $table->increments('id');
          $table->string('lecturer_name');
          $table->text('lecturer_details');
          $table->string('school')->default('MouldBreak');
          $table->string('facebook_add');
          $table->string('twitter_add');
          $table->string('linkedin_add');
          $table->string('lecturer_display');
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
        Schema::dropIfExists('lecturers');
    }
}
