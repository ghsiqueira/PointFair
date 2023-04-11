<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);
Route::get('/feiras/create', [EventController::class, 'create']);
// Route::get('/aboutus', [EventController::class, 'index']);
// Route::get('/duvidasFrequentes', [EventController::class, 'index']);
// Route::get('/contact', [EventController::class, 'index']);