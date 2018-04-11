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

Route::prefix('partenaires')->group(function (){

    Route::get('/', 'PartenaireController@index')->name('partenaires.home');
    Route::get('/login', 'AuthPartenaire\LoginController@showLoginForm')->name('partenaires.login');
    Route::post('/login', 'AuthPartenaire\LoginController@login')->name('partenaires.login.submit');
    Route::get('/register', 'AuthPartenaire\RegisterController@showRegistrationForm')->name('partenaires.register');
    Route::post('/register', 'AuthPartenaire\RegisterController@register')->name('partenaires.register.submit');


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

    Route::prefix('/partenaires')->group(function (){

        Route::get('/', 'Admin\PartenaireController@index')->name('admin.partenaires.index');
        Route::get('/create', 'Admin\PartenaireController@create')->name('admin.partenaires.create');
        Route::post('/store', 'Admin\PartenaireController@store')->name('admin.partenaires.store');
        Route::get('/{id}/show', 'Admin\PartenaireController@show')->name('admin.partenaires.show');
        Route::post('/{id}/update', 'Admin\PartenaireController@update')->name('admin.partenaires.update');
        Route::get('/{id}/delete', 'Admin\PartenaireController@destroy')->name('admin.partenaires.delete');

    });

    Route::prefix('/brands')->group(function (){

        Route::get('/', 'Admin\BrandsController@index')->name('admin.brands.index');
        Route::get('/create', 'Admin\BrandsController@create')->name('admin.brands.create');
        Route::post('/store', 'Admin\BrandsController@store')->name('admin.brands.store');
        Route::post('/{id}/update', 'Admin\BrandsController@update')->name('admin.brands.update');
        Route::get('/{id}/show', 'Admin\BrandsController@show')->name('admin.brands.show');
        Route::get('/{id}/delete', 'Admin\BrandsController@destroy')->name('admin.brands.delete');

    });

    Route::prefix('/categories')->group(function (){

        Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
        Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
        Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
        Route::get('/{id}/show', 'Admin\CategoryController@show')->name('admin.categories.show');
        Route::get('/{id}/update', 'Admin\CategoryController@update')->name('admin.categories.update');
        Route::get('/{id}/delete', 'Admin\CategoryController@destroy')->name('admin.categories.delete');

    });

    Route::prefix('/stores')->group(function (){

        Route::get('/', 'Admin\StoresController@index')->name('admin.stores.index');
        Route::get('/create', 'Admin\StoresController@create')->name('admin.stores.create');
        Route::post('/store', 'Admin\StoresController@store')->name('admin.stores.store');
        Route::get('/{id}/show', 'Admin\StoresController@show')->name('admin.stores.show');
        Route::post('/{id}/update', 'Admin\StoresController@update')->name('admin.stores.update');
        Route::get('/{id}/delete', 'Admin\StoresController@destroy')->name('admin.stores.delete');

    });

    Route::prefix('/products')->group(function (){

        Route::get('/', 'Admin\ProductController@index')->name('admin.products.index');
        Route::get('/create', 'Admin\ProductController@create')->name('admin.products.create');
        Route::post('/store', 'Admin\ProductController@store')->name('admin.products.store');
        Route::get('/{id}/show', 'Admin\ProductController@show')->name('admin.products.show');
        Route::post('/{id}/update', 'Admin\ProductController@update')->name('admin.products.update');
        Route::get('/{id}/delete', 'Admin\ProductController@destroy')->name('admin.products.delete');

    });

});

Route::prefix('/feedbacks')->group(function (){

    Route::get('/', 'FeedbackController@index')->name('feedbacks.index');
    Route::get('/{id}/show', 'FeedbackController@show')->name('feedbacks.show');
    Route::post('/store', 'FeedbackController@store')->name('feedbacks.store');
    Route::post('/{id}/edit', 'FeedbackController@edit')->name('feedbacks.edit');
    Route::post('/{id}/update', 'FeedbackController@update')->name('feedbacks.update');
    Route::get('/{id}/delete', 'FeedbackController@destroy')->name('feedbacks.delete');

});


Route::get('test', function (){
    return view('layouts.front');
});