<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('courses', function(Blueprint $table){
        $table->increments('id');
        $table->string('course_title');
        $table->string('course_display');
        $table->text('course_details');
        $table->string('course_lecturer');
        $table->string('lecturer_image');
        $table->string('facebook_add');
        $table->string('course_link');
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
      Schema::dropIfExists('courses');
    }
}
