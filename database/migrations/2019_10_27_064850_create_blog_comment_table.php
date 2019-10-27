<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('blog_comment', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('content_comment');
          $table->date('date_comment');
          $table->integer('blog_id')->unique();
          $table->foreign('blog_id')->references('id')->on('blog_detail')->onDelete('cascade');
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
        //
    }
}
