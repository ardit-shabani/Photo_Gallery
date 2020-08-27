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

Route::get('/', 'AlbumsControllers@index');
Route::get('/albums', 'AlbumsControllers@index');
Route::get('/albums/create', 'AlbumsControllers@create');
Route::get('/albums/{id}', 'AlbumsControllers@show');
Route::post('/albums/store', 'AlbumsControllers@store');
Route::get('/photos/create/{id}', 'PhotosControllers@create');
Route::post('/photos/store', 'PhotosControllers@store');
Route::get('/photos/{id}', 'PhotosControllers@show');
Route::delete('/photos/{id}', 'PhotosControllers@destroy');


