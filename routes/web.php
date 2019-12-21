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

	dd(Str::prefix('maged', 'mr.'));



    return view('welcome');
});

Route::get('pay', 'HomeController@index');

Route::get('category', 'CategoryController@create');
Route::get('category/edit', 'CategoryController@edit');
Route::get('item', 'ItemController@create');

Route::get('posts', 'PostController@index');

Route::get('item/{id}', 'PostController@delete');

Route::get('test', function() {
	return view('test');
});