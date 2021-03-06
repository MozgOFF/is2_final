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
    return view('index');
});

Route::get('index', 'MainController@index')->name('index');

Route::get('tables', 'MainController@tables')->name('tables');

Route::get('search', 'MainController@search')->name('search');

Route::get('charts', 'MainController@charts')->name('charts');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::post('/index', 'Auth\LoginController@getLogout')->name('logout.get');

Route::get('search/action', 'LiveSearch@action')->name('search.action');