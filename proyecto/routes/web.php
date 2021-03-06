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

Route::get('/', 'IndexController@index');
Route::get('/catedraticos', 'CatedraticoController@index');
Route::get('/posts', 'PostsController@index');
Route::get('/newposts', 'PostsController@newPost');
Route::post('/posts/add_post', 'PostsController@add_post');
Route::get('/topcatedraticos', 'TopCatedraticoController@index');
Route::get('/comentario/{id}/{mensaje}', 'PostsController@edit');
Route::get('/edit_post/{id}', 'PostsController@editpost');
Route::post('/edit_post/post/{id}', 'PostsController@update_post');
Route::post('/posts/add_coment', 'PostsController@add_coment');
