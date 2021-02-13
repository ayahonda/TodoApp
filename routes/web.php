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

// Route::get('/', function () {
//     return view('welcome');
// });

// タスク一覧表示
Route::get('/', 'TasksController@index');

// 新規タスクの作成
Route::post('/task', 'TasksController@store')->name('task.store');

// タスクを削除
Route::post('/task/destroy/{id}', 'TasksController@destroy');

// タスクを完了に
Route::post('/task/done/{id}', 'TasksController@done');

// 完了にあるタスクをListにもどす
Route::post('/task/reset/{id}', 'TasksController@reset');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
