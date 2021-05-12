<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/adminTraining', function () {
    return view('admintraining');
});

Route::get('/adminposts', function () {
    return view('adminposts');
});

Route::get('/addpost', function () {
    return view('addpost');
});


