<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home' );

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/adminposts', function () {
    return view('adminposts');
});

Route::get('/addpost', function () {
    return view('addpost');
});

Route::get('/ride', function () {
    return view('ride');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/training', function () {
    return view('training');
});


Route::get('/admintraining', function () {
    return view('admintraining');
});

Route::get('/addtraining', function () {
    return view('addtraining');
});