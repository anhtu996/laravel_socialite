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


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

//twitter
Route::get('login/twitter', 'Auth\TwitterController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\TwitterController@handleProviderCallback');
//github
Route::get('login/github', 'Auth\GithubController@redirectToProvider');
Route::get('login/github/callback', 'Auth\GithubController@handleProviderCallback');
//linkedin
Route::get('login/linkedin', 'Auth\LinkedinController@redirectToProvider');
Route::get('login/linkedin/callback', 'Auth\LinkedinController@handleProviderCallback');

//google
Route::get('login/google', 'Auth\GoogleController@redirectToProvider')->name('google');
Route::get('login/google/callback', 'Auth\GoogleController@handleProviderCallback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
