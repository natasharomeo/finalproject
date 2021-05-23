<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

    Route::get('/home', function () {
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

    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/adduser', function () {
        return view('adduser');
    });
    Route::post('/adduser', [AdminController::class, 'adduser']);
    Route::get('/delete-user/{id}', [AdminController::class, 'deleteUser']);
    Route::get('/edit-user/{id}', [AdminController::class, 'editUser']);
    Route::post('/edit-user', [AdminController::class, 'updateUser']);

});

Auth::routes();

Route::get('/admin-login', 'Auth\LoginController@showAdminLoginForm');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
