<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseHourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_hour', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('course_id');
          $table->unsignedInteger('hour_id');


          $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
          $table->foreign('hour_id')->references('id')->on('hours')->onDelete('cascade');
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
        Schema::dropIfExists('course_hour');
    }
}
