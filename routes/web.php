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
    return view('welcome');
});



Route::get('/article', 'ArticleController@index'); 
Route::get('/article/create', 'ArticleController@create'); 
Route::post('/article', 'ArticleController@store');

Route::get('/article/{id}', 'ArticleController@show');
Route::get('/article/{id}/edit', 'ArticleController@edit'); 
Route::put('/article/{id}', 'ArticleController@update'); 
Route::delete('/article/{id}', 'ArticleController@destroy');