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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//untuk artikel
Route::group(['middleware'=>['auth']],function(){

Route::get('/artikel', 'ArtikelController@index');
Route::get('/artikel/add', 'ArtikelController@create');
Route::post('/artikel/store', 'ArtikelController@store');
Route::get('/artikel/show/{id}', 'ArtikelController@show');
Route::post('/artikel/update/{id}', 'ArtikelController@update');
Route::get('/artikel/destroy/{id}', 'ArtikelController@destroy');

});