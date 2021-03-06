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

Route::resource('/','IndexController',['only'=>['index'],'names'=>['index'=>'home']]);

Route::resource('portfolios','PortfolioController',['parameters'=>['portfolios'=>'alias']]);

Route::resource('articles','ArticlesController',['parameters'=>['articles'=>'alias']]);

Route::get('articles/cat/{cat_alias?}',['uses'=>'ArticlesController@index','as'=>'articlesCat'])->where('cat_alias', '[\w-]+');

Route::resource('comment','CommentController',['only'=>['store']]);

Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('showResetForm');


//Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//
//    //admin
//    Route::get('/', ['uses' => 'Admin\IndexController@index', 'as' => 'adminIndex']);
//
//    Route::resource('/articles', 'Admin\ArticlesController');
//});

Route::group(['prefix' => 'admin', 'middleware' => ['web','auth']], function () {

    Route::get('/', ['uses' => 'Admin\IndexController@index', 'as' => 'adminIndex']);

    Route::resource('/articles', 'Admin\ArticlesController');

    Route::get('/articles/{articles}/edit', 'Admin\ArticlesController@edit')->name('admin.articles.edit');
    Route::get('/articles/create', 'Admin\ArticlesController@create')->name('admin.articles.create');
    Route::get('/articles/destroy', 'Admin\ArticlesController@destroy')->name('admin.articles.destroy');
    Route::post('/article/store', 'Admin\ArticlesController@store')->name('admin.article.store');

    Route::resource('/permissions', 'Admin\PermissionsController');

    Route::resource('/menus', 'Admin\MenusController');

    Route::resource('/users', 'Admin\UsersController');
});