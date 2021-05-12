<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/adminposts', function () {
    return view('adminposts');
});

Route::get('/addpost', function () {
    return view('addpost');
});


