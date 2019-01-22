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

Route::get('/home', 'ArticleController@showArticle')->name('home');
Route::get('/home/{id}', 'ArticleController@showArticleByTag');
Route::get('/createarticle', 'ArticleController@index')->name('Article');
Route::post('/postarticle', 'ArticleController@createArticle');
Route::post('/checkimage', 'ArticleController@checkImage');
Route::get('/view/{id}', 'ArticleController@viewArticle');
