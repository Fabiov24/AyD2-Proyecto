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
use App\Models\Post;
Route::get('/', 'IndexController@index');
Route::get('/myposts', 'MyPostsController@index');
Route::get('/pruebasPosts', function(){
    $posts = Post::get();
    dd($posts);
});
