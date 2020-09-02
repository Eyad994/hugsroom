<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createwebsite', 'HomeController@createwebsite');
Route::post('/checkIsUser', 'HomeController@checkIsUser');
Route::post('/register', 'HomeController@register2')->name('register');
Route::post('/addUser', 'HomeController@addUser');
Route::get('/login2', 'HomeController@login2');
Route::get('/home2', 'HomeController@home2');
Route::get('/rooms', 'HomeController@rooms');
/*Route::get('/xx', 'HomeController@xx');*/
