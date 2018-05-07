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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'MasterController@getData')->name('master');
Route::get('/ask', 'MasterController@takeFormQuestion');
Route::post('/question/store', 'MasterController@store');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::group(['prefix' => '/admin/action', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');//->name('home');
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/user', 'UserController');
    Route::resource('/question', 'QuestionController');
    Route::post('/user/{user}/update', 'UserController@update')->name('user.update');
    Route::get('/category/{category}/questions', 'QuestionController@questions')->name('question.questions');
    Route::get('/category/{category}/unanswered', 'QuestionController@unanswered')->name('unanswered.questions');
    Route::get('/category/{question}/publishHide', 'QuestionController@publishHide')->name('publishHide.questions');
});
