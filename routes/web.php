<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createwebsite', 'HomeController@createwebsite');
Route::post('/checkIsUser', 'HomeController@checkIsUser');

/*Route::post('/register', 'HomeController@register2');*/
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('/addUser', 'HomeController@addUser');
Route::get('/login2', 'HomeController@login2')->name('login2');
Route::get('/home2', 'HomeController@home2');
Route::get('/rooms', 'HomeController@rooms');
Route::get('/page2', 'HomeController@page2');
Route::get('/mbhome', 'HomeController@mbhome');
Route::post('/addNewRoom', 'RoomsController@addNewRoom');
/*Route::get('/xx', 'HomeController@xx');*/
