<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_day', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('day_id');
          $table->unsignedInteger('course_id');

          $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
          $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('course_day');
    }
}
