<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorAndCourseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutor_sn');
            $table->integer('course_id');
            $table->string('semester');
            $table->year('year');
            $table->foreign('tutor_sn')->references('student_number')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses'->onDelete('cascade');
        });
         Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->string('course_name');
            $table->string('semester');
            $table->year('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('tutors');
         Schema::dropIfExists('courses');
    }
}
