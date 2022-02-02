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

Route::get('/', 'App\Http\Controllers\User\HomeController@index')->name('home');
Route::get('/article/{slug}', 'App\Http\Controllers\User\HomeController@show')->name('posts.single');
Route::get('/category/{slug}','App\Http\Controllers\User\CategoryController@show' )->name('categories.single');
Route::get('/tag/{slug}','App\Http\Controllers\User\TagController@show' )->name('tags.single');
Route::get('/search', 'App\Http\Controllers\User\SearchController@index')->name('search');

//Admin side
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
   Route::get('/', 'App\Http\Controllers\Admin\MainController@index')->name('admin.index');
   Route::resource('/categories', 'App\Http\Controllers\Admin\CategoryController');
   Route::resource('/tags', 'App\Http\Controllers\Admin\TagController');
   Route::resource('/posts', 'App\Http\Controllers\Admin\PostController');
});

//User side
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'App\Http\Controllers\UserController@create')->name('register.create');
    Route::post('/register', 'App\Http\Controllers\UserController@store')->name('register.store');
    Route::get('/login', 'App\Http\Controllers\UserController@loginForm')->name('login.form');
    Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');
});

Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout')->middleware('auth');
