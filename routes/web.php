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

Route::get('/post', 'BlogController@index');

Route::get('/admin', function(){
  return view('templates.default');
});

Route::get('/stats', function(){
  return view('templates.pages.statistic');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
