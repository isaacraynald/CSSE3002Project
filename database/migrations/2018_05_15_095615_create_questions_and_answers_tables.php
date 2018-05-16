<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsAndAnswersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('question')
            $table->integer('course_id');
            $table->boolean('answered')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('student_number')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');
        });
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tutor_id');
            $table->integer('question_id')
            $table->string('answer');
            $table->integer('course_id');
            $table->timestamps();
            $table->foreign('tutor_id')->references('tutor_sn')->on('tutors');
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('questions');
         Schema::dropIfExists('answers');
    }
}
