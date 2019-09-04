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

Route::get('/', 'PublicController@index');

/* PAGINE STATICHE */

Route::get('/problematica-isee','PagesController@problematicaIsee');
Route::get('/appunti','PagesController@appunti');
Route::get("/gallery", 'PublicController@gallery');
Route::post('/cerca',"PublicController@ricerca");

/* FINE PAGINE STATICHE */


Route::get('/{category}','PublicController@showCategory');
Route::get('/{category}/{post}','PublicController@showPost');


Route::get('/post/{id}','PublicController@post');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
