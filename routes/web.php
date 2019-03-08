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

Route::get('{provider}/redirect', 'Socialite\RedirectController@index')->name('provider.redirect');
Route::get('{provider}/callback', 'Socialite\CallbackController@index')->name('provider.callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
