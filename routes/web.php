<?php

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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


// Route::get("cacheku", "UserController@index");

//Article
Route::get('/', 'ArticleController@getAll');
Route::get('/article/{article}', 'ArticleController@getById');

// // about
// Route::get('/about', 'AboutController@index');

// //coba 
// Route::get('/coba', 'CobaController@index');
// Route::get('/coba/{coba}', 'CobaController@show');
