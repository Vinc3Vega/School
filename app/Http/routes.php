<?php

Route::get('/', 'PostController@index');
Route::get('/post/{slug}', 'PostController@show');
Route::get('/categorie/{id}', 'PostController@categorie');
Route::get('/contact', function(){return view('front.contact');});
Route::get('/auth/dashboard', 'Admin\PostsController@index');

Route::resource('comment', 'CommentController', ['only'=> ['index','create','store','update']]);
Route::resource('posts', 'Admin\PostsController');

Route::controller('auth', 'Auth\AuthController');


