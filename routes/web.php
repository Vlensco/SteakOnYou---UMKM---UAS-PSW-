<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitController;
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

Route::get('/', [HomeController::class, 'index']);
Route::post('/reservasi', [HomeController::class, 'reservasi']);

Route::get('/review', [HomeController::class, 'review']);
Route::post('/submitreview', [SubmitController::class, 'submitreview']);