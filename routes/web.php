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

Route::get('/', function () {
    return view('home');
});


/*Route::get('/post', 'PostController@index')->name('viewPost');
Route::get('/addPost', 'PostController@create')->name('addPost');
Route::post('/storePost', 'PostController@store')->name('storePost');*/

Auth::routes();

Route::resource('posts', 'PostController');

Route::get('/home', 'HomeController@index')->name('home');
