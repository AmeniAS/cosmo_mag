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

Route::get('/home', 'HomeController@index')->name('users.home');

Route::prefix('bloggers')->group(function (){

    Route::get('/', 'BloggerController@index')->name('bloggers.home');

    Route::get('/login', 'AuthBlogger\LoginController@showLoginForm')->name('bloggers.login');
    Route::post('/login', 'AuthBlogger\LoginController@login')->name('bloggers.login.submit');

    Route::get('/register', 'AuthBlogger\RegisterController@showRegistrationForm')->name('bloggers.register');
    Route::post('/register', 'AuthBlogger\RegisterController@register')->name('bloggers.register.submit');

});
