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

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/tables', function () {
    return view('welcome');
});


Route::get('/randomencounter', 'MonsterTablesController@randomEncounter');

Route::get('/legendarybeast', 'MonsterTablesController@legendaryBeast');

Auth::routes();

Route::resource('monster', 'MonsterController');

Route::resource('item', 'ItemController');

Route::get('/home', 'HomeController@index')->name('home');
