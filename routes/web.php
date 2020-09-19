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
Route::get('/page2', 'HomeController@page2');
Route::get('/mbhome', 'HomeController@mbhome');
Route::post('/addNewRoom', 'RoomsController@addNewRoom');
Route::get('/rooms', 'RoomsController@rooms');
Route::get('/rooms/room/{id}', 'RoomsController@room');
Route::get('/rooms/wellWishes/{id}', 'RoomsController@wellWishes');
Route::get('/rooms/mbwellWishes/{id}', 'RoomsController@mbwellWishes');
Route::get('/rooms/addJournal/{id}', 'RoomsController@addJournal');
Route::get('/rooms/journal/{id}/{postId}', 'RoomsController@journal');
Route::get('/rooms/mbroom/{id}', 'RoomsController@mbroom')->name('mbRoom');
Route::get('/rooms/gallery/{id}', 'RoomsController@gallery');
Route::get('/rooms/mbgallery/{id}', 'RoomsController@mbgallery');
/*******************************************************************************/
Route::post('storePost', 'RoomsController@storePost')->name('storePost');
Route::post('storeComment', 'PostController@storeComment')->name('storeComment');
Route::post('storeWish', 'WellWishController@storeWish')->name('storeWish');
Route::post('post/{post}/like', 'LikeController@store');
Route::post('wish/{wish}/like', 'WellWishController@storeLike');
Route::post('comment/{comment}/like', 'LikeController@storeComment')->name('likeComment');
Route::post('post/{post}/destroy', 'LikeController@destroy');
Route::post('/room/{id}/uploadBackgroundImage', 'RoomsController@uploadBackground');
Route::post('/room/{id}/uploadProfileImage', 'RoomsController@uploadProfileImage');

/*Route::get('/xx', 'HomeController@xx');*/
