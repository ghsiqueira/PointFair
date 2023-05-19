<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('inicio'); })->name('inicio');
Route::get('/sobrenos', function () { return view('aboutus'); })->name('aboutus');
Route::get('/duvidasFrequentes', function () { return view('duvidasFrequentes'); })->name('duvidasFrequentes');
Route::view('/contato', 'contact')->name('contato');
Route::post('/contato/submit', [ContactController::class, 'submit'])->name('contato.submit');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
