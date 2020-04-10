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

Route::group(['prefix' => 'latihan'], function () {
    Route::get('/category/all', 'CategoryController@index');
    Route::get('/category/search', 'CategoryController@search');
    Route::get('/category/{id}/delete', 'CategoryController@delete');
    Route::get('/category/{id}/restore', 'CategoryController@restore');
    Route::get('/category/{id}/permanent-delete', 'CategoryController@permanentDelete');
    Route::view('layouts', 'child');
});
