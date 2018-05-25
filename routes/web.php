<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', 'CourseController@index');

Route::get('/search/courses', 'CourseController@searchCourses')->name('course.result');

Route::get('/tutor', 'TutorController@index');

Route::get('/tutor/{id}/{semester}/', 'TutorController@showQuestion')->name('questionList');

Route::get('/answer/{id}', 'AnswerController@show');

Route::get('/question/','QuestionController@show')->name('result');

Route::get('/find/{course}/', 'QuestionController@search')->name('search');

Route::get('/question/{id}','AnswerController@edit')->name('edit');

Route::post('/store/{course}/{semester}/{question}/', 'AnswerController@store')->name('question.answer');

Route::post('/post/{courseId}/{course}/{semester}/', 'QuestionController@store')->name('ask');

Route::put('/update/{course}/{semester}/{id}', 'AnswerController@update')->name('update');

Route::delete('/question/{id}', 'QuestionController@destroy')->name('deleteQuestion');