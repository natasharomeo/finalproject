<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\RideController;


Route::get('/', function () {
    return view('dashboard');
});



/*Route::get('/training', 'PagesController@training');*/

Route::get('/training', function () {
    return view('training');
});

Route::get('/ride', function () {
    return view('ride');
});

Route::get('/admintraining', [TrainingController::class, 'index']);

Route::get('/addtraining', [TrainingController::class, 'create']);
Route::post('/admintraining', [TrainingController::class, 'store']);

Route::get('/admintraining/{id}/training', [TrainingController::class, 'showData']);
Route::post('/edittraining', [TrainingController::class, 'update']);

Route::get('delete/{id}', [TrainingController::class, 'delete']);

Route::get('/adminride', [RideController::class, 'index']);

Route::get('/addride', [RideController::class, 'create']);
Route::post('/adminride', [RideController::class, 'store']);

Route::get('/adminride/{id}/editride', [RideController::class, 'showData']);
Route::post('/editride', [RideController::class, 'update']);

Route::get('delete/{id}', [RideController::class, 'delete']);




Route::get('/adminposts', function () {
    return view('adminposts');
});

Route::get('/addpost', function () {
    return view('addpost');
});

/*Route::get('/addtraining', function () {
    return view('addtraining');
});*/