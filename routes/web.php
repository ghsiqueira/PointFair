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
Route::get('/feiras/{id}', [EventController::class, 'show']);
Route::post('/feiras', [EventController::class, 'store']);
Route::delete('/feiras/{id}', [EventController::class, 'destroy']);

Route::get('/sobrenos', function () { return view('aboutus'); })->name('aboutus');
Route::get('/duvidasFrequentes', function () { return view('duvidasFrequentes'); })->name('duvidasFrequentes');
Route::get('/contato', function () { return view('contact'); })->name('contact');
Route::get('/home', function () { return view('inicio'); })->name('inicio');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
