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
})->middleware('guest');

//Default Auth routes.
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Socialite')->prefix('login/facebook')->group(function(){
    //This will redirect us to the facebook login page.
    Route::get('/','LoginController@redirectToProvider')->name('login.facebook');

    //Callback after the login is successful.
    Route::get('/callback','LoginController@handleProviderCallback');
});
