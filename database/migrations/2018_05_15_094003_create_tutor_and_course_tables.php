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
        Schema::create('semesters', function(Blueprint $table){
             $table->increments('id');
             $table->integer('semester');
             $table->year('year');
             $table->string('status')->default('active');
         });
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_id');
            $table->string('course_name');
            $table->integer('semester_id')->unsigned();
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });
         Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutor_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->foreign('tutor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        }); 
        Schema::create('request_tutor', function(Blueprint $table){
             $table->increments('id');
             $table->integer('user_id')->unsigned();
             $table->integer('course_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
