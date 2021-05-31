<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JoinTrainingController;
use App\Http\Controllers\RideController;


Route::get('/adminuser', [AdminController::class, 'adminuser']);
Route::post('/auth/save' , [UserController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [UserController::class, 'check'])->name('auth.check');

Route::get('/app/logout',[UserController::class, 'logout'])->name('auth.logout');



//Route::group(['middleware'=>['AuthCheck']], function(){

Route::get('/auth/login',[UserController::class, 'login'])->name('auth.login');
Route::get('/auth/register',[UserController::class, 'register'])->name('auth.register');
Route::get('/dashboard',[UserController::class, 'userdashboard']);

//});


//User Admin Routes
Route::get('/delete/{id}',[UserController::class, 'delete']);
Route::get('/adminuser/{id}/edituser', [AdminController::class, 'show']);
Route::post('/edituser', [AdminController::class, 'update']);



//showDatatraining
//Admin Routes 

Route::get('/adminposts', [PostsController::class, 'index']);
Route::post('/adminposts', [PostsController::class, 'store']);
Route::get('/addpost', [PostsController::class, 'create']);
Route::get('/adminposts/{id}/editpost', [PostsController::class, 'showData']);
Route::post('/editpost', [PostsController::class, 'update']);
Route::get('/delete-post/{id}', [PostsController::class, 'deletepost']);



Route::get('/admin', function () {
    return view('admin');
});


Route::get('/adminride', [RideController::class, 'index']);
Route::post('/adminride', [RideController::class, 'store']);
Route::get('/addride', [RideController::class, 'create']);
Route::get('/adminride/{id}/editride', [RideController::class, 'showData']);
Route::post('/editride', [RideController::class, 'update']);
Route::get('delete-ride/{id}', [RideController::class, 'deleteride']);

Route::get('/admintraining', [TrainingController::class, 'index']);
Route::post('/admintraining', [TrainingController::class, 'store']);
Route::get('/addtraining', [TrainingController::class, 'create']);
Route::get('/admintraining/{id}/edittraining', [TrainingController::class, 'showData']);
Route::post('/edittraining', [TrainingController::class, 'update']);
Route::get('delete-training/{id}', [TrainingController::class, 'deletetraining']);


Route::get('training', function () {
    return view('training');
});