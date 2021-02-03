<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\RegisterController;

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
Route::get('/', [FrontController::class, 'index'])->name('/');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class,'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/search', [SearchController::class, 'index'])
    ->name('search')
    ->middleware('auth');
Route::post('/search', [SearchController::class, 'searchBand']);


Route::get('/info', [InfoController::class, 'index'])->name('album');
Route::post('/info', [InfoController::class, 'searchAlbum']);

Route::post('/details', [DetailsController::class, 'details'])->name('details');