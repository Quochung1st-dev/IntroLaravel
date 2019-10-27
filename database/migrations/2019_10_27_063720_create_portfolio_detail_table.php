<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('portfolio_detail', function (Blueprint $table) {
          $table->increments('id');
          $table->string('image');
          $table->string('title');
          $table->string('content');
          $table->integer('portfolio_id')->unique();
          $table->foreign('portfolio_id')->references('id')->on('portfolio_category')->onDelete('cascade');
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
