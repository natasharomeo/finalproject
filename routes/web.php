<?php

use Illuminate\Support\Facades\Route;


Route::get('/Posts', function () {
    return view('Posts.index');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/adminTraining', function () {
    return view('admintraining');
});