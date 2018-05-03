<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function(Blueprint $table){
          $table->increments('id');
          $table->string('blog_title');
          $table->text('blog_message');
          $table->string('blog_image');
          $table->string('blog_image2');
          $table->string('blog_author');
          $table->text('author_details');
          $table->string('author_image')->default('chairperson.png');
          $table->string('blog_category')->default('Uncategorized');
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
        Schema::dropIfExists('blogs');
    }
}
