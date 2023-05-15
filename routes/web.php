<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Auth::routes();

Auth::routes(['register'=>false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/addfile', [HomeController::class, 'store'])->name('store');

Route::get('/showfiles', [FileController::class, 'show'])->name('showfiles');

Route::get('/{page}', [AdminController::class,'index' ]);
