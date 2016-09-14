<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});
Route::post('sendmessage', 'chatController@sendMessage');

Route::get('marketing', 'SocialController@marketing');
Route::post('marketing/facebook', 'SocialController@facebook');
Route::post('account/create', 'SocialController@create');