<?php

use Illuminate\Support\Facades\Route;

Route::get('/post/post-list', [
    'uses' => 'PostController@index',
    'as' => 'post.index'
]);

Route::get('/post', [
    'uses' => 'PostController@getCreatePost',
    'as' => 'post.getCreatePost'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
