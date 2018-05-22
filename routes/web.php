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

Route::get('/list', ['as' => 'list', 'uses' => 'RenunganController@index']);
Route::get('/addnew', ['as' => 'addnew', 'uses' => 'RenunganController@create']);
Route::post('/add', ['as' => 'add', 'uses' => 'RenunganController@store']);
Route::post('list/delete/{id}', ['as' => 'delete', 'uses' => 'RenunganController@destroy']);
Route::get('list/edit/{id}', ['as' => 'edit', 'uses' => 'RenunganController@edit']);
Route::post('list/update/{id}', ['as' => 'update', 'uses' => 'RenunganController@update']);