<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'index']);
Route::get('/training', [PagesController::class, 'training']);
Route::get('/ride', [PagesController::class, 'ride']);

Route::get('/adminposts', [PostsController::class, 'adminposts']);

/*Route::resource('adminposts', 'PostsController', ['middleware' => 'auth']);*/


Route::get('/addpost', function () {
    return view('addpost');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admintraining', function () {
    return view('admintraining');
});

Route::get('/addtraining', function () {
    return view('addtraining');
});