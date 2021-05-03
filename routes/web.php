<?php

use Illuminate\Support\Facades\Route;


Route::get('/Posts', function () {
    return view('Posts.index');
});
