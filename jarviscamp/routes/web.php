<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CastController;


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

// Route::get('/', function () {
//     return view('table');
// });
Route::get('/table', function () {
    return view('table');
});
Route::get('/data-table', function () {
    return view('data-table');
});



// Route::get('/', [HomeController::class,'index']);
Route::get('/register', [AuthController::class,'form']);
Route::get('/welcome', [AuthController::class,'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[CastController::class,'index']);
// Route::get('/cast',[CastController::class,'index']);
// Route::get('/cast/create',[CastController::class,'create']);
// Route::post('/cast',[CastController::class,'store']);
// Route::get('/cast/{id}',[CastController::class,'show']);
// Route::get('/cast/{id}/edit',[CastController::class,'edit']);
// Route::put('/cast/{id}',[CastController::class,'update']);
// Route::delete('/cast/{id}',[CastController::class,'destroy']);

Route::resource('/cast', CastController::class);