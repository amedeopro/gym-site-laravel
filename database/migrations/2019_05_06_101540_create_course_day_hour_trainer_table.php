<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseDayHourTrainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_day_hour_trainer', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('course_id');
          $table->unsignedInteger('day_id');
          $table->unsignedInteger('hour_id');
          $table->unsignedInteger('trainer_id');

          $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
          $table->foreign('day_id')->references('id')->on('days')->onDelete('cascade');
          $table->foreign('hour_id')->references('id')->on('hours')->onDelete('cascade');
          $table->foreign('trainer_id')->references('id')->on('trainers')->onDelete('cascade');
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
        Schema::dropIfExists('course_day_hour_trainer');
    }
}
