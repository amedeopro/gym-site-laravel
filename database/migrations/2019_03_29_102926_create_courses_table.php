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
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_course');
            $table->string('lesmills');
            $table->text('description_course');
            $table->text('vantaggi');
            $table->text('beneficio1');
            $table->text('beneficio2');
            $table->text('beneficio3');
            $table->text('principiante');
            $table->string('logo_course');
            $table->string('bg_image');
            $table->string('slug');
            $table->string('lesmills');
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
