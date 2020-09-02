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

Route::get('/signin',function(){
    return view('signin');
});

Route::post('/default',function(){
    return view('default');
})->middleware('auth')->name('default');

//For showing the Login and Register Pages
Route::group(['middleware' => 'guest'],function(){
    Route::get('/login','LoginController@show')->name('login');
    Route::get('/register','RegisterController@show')->name('register');
    Route::get('/signin/github','LoginController@github');
    Route::get('/signin/github/redirect','LoginController@githubRedirect');
});

Route::get('/oauth/redirect','oauthController@redirect');
Route::get('/oauth/callback','OauthController@callback');


//For Authentication
Route::post('/login','LoginController@login');
Route::post('/register','RegisterController@register');

//only for protected users
Route::middleware('auth')->group(function(){
    Route::get('/default','PageController@index');
    Route::get('/logout','LoginController@logout');

});