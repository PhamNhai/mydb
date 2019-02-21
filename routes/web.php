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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/leader', 'Auth\LoginController@showLeaderLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/leader', 'Auth\RegisterController@showLeaderRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/leader', 'Auth\LoginController@leaderLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/leader', 'Auth\RegisterController@createLeader');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/leader', 'leader');