<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;







Route::get('/adminuser', [AdminController::class, 'adminuser']);

//Route::get('/', [PagesController::class, 'index']);
Route::get('/training', [PagesController::class, 'training']);
Route::get('/ride', [PagesController::class, 'ride']);



Route::post('/auth/save' , [UserController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [UserController::class, 'check'])->name('auth.check');

Route::get('/app/logout',[UserController::class, 'logout'])->name('auth.logout');



//Route::group(['middleware'=>['AuthCheck']], function(){

    Route::get('/auth/login',[UserController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[UserController::class, 'register'])->name('auth.register');
Route::get('/admin/dashboard',[UserController::class, 'dashboard']);

//});


//User Admin Routes
Route::get('/adminuser/{id}/edituser', [AdminController::class, 'show']);
Route::post('/edituser', [PostsController::class, 'update']);



//Admin Routes 

Route::get('/adminposts', [PostsController::class, 'index']);
Route::post('/adminposts', [PostsController::class, 'store']);
Route::get('/addpost', [PostsController::class, 'create']);
Route::get('/adminposts/{id}/editpost', [PostsController::class, 'showData']);
Route::post('/editpost', [PostsController::class, 'update']);
Route::get('delete/{id}', [PostsController::class, 'delete']);












Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admintraining', function () {
    return view('admintraining');
});

Route::get('/addtraining', function () {
    return view('addtraining');
});