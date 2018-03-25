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


Route::prefix('admins')->group(function (){

    Route::get('/', 'AdminController@index')->name('admins.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admins.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admins.login.submit');
    Route::get('/register', 'AuthAdmin\RegisterController@showRegistrationForm')->name('admins.register');
    Route::post('/register', 'AuthAdmin\RegisterController@register')->name('admins.register.submit');


});

Route::prefix('articles')->group(function (){

    Route::get('/', 'BloggersController@index')->name('articles.index');
    Route::get('/create', 'BloggersController@create')->name('articles.create');
    Route::post('/store', 'BloggersController@store')->name('articles.store');
    Route::get('/{id}/show', 'BloggersController@show')->name('articles.show');

});

Route::prefix('media_videos')->group(function (){

    Route::get('/', 'MediaVideoController@index')->name('media_videos.index');
    Route::get('/create', 'MediaVideoController@create')->name('media_videos.create');
    Route::post('/store', 'MediaVideoController@store')->name('media_videos.store');
    Route::get('/{id}/show', 'MediaVideoController@show')->name('media_videos.show');

});

Route::prefix('media_images')->group(function (){

    Route::get('/', 'MediaImageController@index')->name('media_images.index');
    Route::get('/create', 'MediaImageController@create')->name('media_images.create');
    Route::post('/store', 'MediaImageController@store')->name('media_images.store');
    Route::get('/{id}/show', 'MediaImageController@show')->name('media_images.show');

});

Route::prefix('administrator')->group(function (){

    Route::get('/', 'AdminDashboardController@index');

    Route::prefix('/vente')->group(function (){

        Route::get('/commandes', 'AdminDashboardController@commandes')->name('admin.vente.commades');

    });

    Route::prefix('/users')->group(function (){

        Route::get('/', 'Admin\MemberController@index')->name('admin.members.index');
        Route::get('/{id}/show', 'Admin\MemberController@show')->name('admin.members.show');
        Route::post('/{id}/update', 'Admin\MemberController@update')->name('admin.members.update');
        Route::get('/{id}/delete', 'Admin\MemberController@destroy')->name('admin.members.delete');

    });

    Route::prefix('/bloggers')->group(function (){

        Route::get('/', 'Admin\BloggerController@index')->name('admin.bloggers.index');
        Route::get('/{id}/show', 'Admin\BloggerController@show')->name('admin.bloggers.show');
        Route::post('/{id}/update', 'Admin\BloggerController@update')->name('admin.bloggers.update');
        Route::get('/{id}/delete', 'Admin\BloggerController@destroy')->name('admin.bloggers.delete');

    });

});
