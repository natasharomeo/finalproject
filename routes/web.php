<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['as' => 'main::', 'middleware' => 'auth'], function () {

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

});

Auth::routes();

Route::get('/admin-login', 'Auth\LoginController@showAdminLoginForm');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

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
