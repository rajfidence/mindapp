<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/questions', 'QuestionController@index')->name('questions');

//Route::resource('answers', 'AnswerController');

Route::post('/storeAnswers', ['uses' => 'AnswerController@store', 'as' => 'answers.store']);

Route::get('/viewAnswers/{id}', ['uses' => 'AnswerController@show', 'as' => 'answers.show']);

//Route::get('/ViewAnswers', 'HomeController@ViewAnswers')->name('viewAnswers');

//Route::get('/ViewAnswers/{id}', ['uses' => 'HomeController@ViewAnswers', 'as' => 'viewAnswers']);

