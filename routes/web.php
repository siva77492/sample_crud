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



Route::get('/', 'ArticleController@index2');
Route::get('/articles/create', 'ArticleController@create');	
Route::post('/articles/insert', 'ArticleController@add');
Route::get('/articles/edit/{id}', 'ArticleController@edit');
Route::get('/articles/delete/{id}', 'ArticleController@delete');
Route::post('/articles/update', 'ArticleController@update');
Route::get('/image-crop', 'ImageController@imageCrop');
Route::post('/image-crop/1', 'ImageController@imageCropPost');

