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

Route::get('homepage', function () {
    return view('homepage');
});

Auth::routes();

Route::get('hero/batman', 'HeroController@show');
Route::get('hero/index', 'HeroController@index');
Route::post('hero/index', 'HeroController@store');

