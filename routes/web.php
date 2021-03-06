<?php

use App\Task;

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

Route::resource('question', 'QuestionController');

Route::resource('photo', 'PhotoController', ['only' => ['index']]);

Route::resource('photo', 'PhotoController', ['except' => ['show', 'update']]);

Route::get('/', 'PostController@index');

Route::get('/posts', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/age/{age}', function(){

})->middleware('checkAge');

Route::get('welcome/{locale}', function($locale){
	return view('components/welcome', ['locale'=>$locale]);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
