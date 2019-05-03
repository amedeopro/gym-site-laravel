<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_date', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('course_id');
          $table->unsignedInteger('date_id');

          $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
          $table->foreign('date_id')->references('id')->on('dates')->onDelete('cascade');
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
        Schema::dropIfExists('course_date');
    }
}
