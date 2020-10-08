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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'PostController@index')->name('post.index');
// Route::get('/api/posts/all', 'PostApiController@getAllPost') -> name('post.all')
// Route::get('/api/posts...')

Route::get('/', 'PostController@index') ->name('post.index');

Route::get('/post/create', 'PostController@create') ->name('post.create');
Route::post('/post/store', 'PostController@store') ->name('post.store');


Route::get('/api/posts/all', 'PostApiController@getAllPost') ->name('post.api.all');
Route::get('/api/posts/best-of', 'PostApiController@getBestPost') ->name('post.api.best');
