<?php
 use App\Http\Middleware\HelloMiddleware;
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
Route::get('hello', 'HogeController@index');
Route::post('hello', 'HogeController@post');

Route::get('hello/add', 'HogeController@add');
Route::post('hello/add', 'HogeController@create');

Route::get('hello/edit', 'HogeController@edit');
Route::post('hello/edit', 'HogeController@update');

Route::get('hello/del', 'HogeController@del');
Route::post('hello/del', 'HogeController@remove');

