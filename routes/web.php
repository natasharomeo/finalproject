<?php

use Illuminate\Support\Facades\Route;


Route::get('/Posts', function () {
    return view('Posts.index');
});


Route::get('/Rides', function () {
    return view('Rides.Rides');
});
