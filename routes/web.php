<?php

use App\Models\Publication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use Illuminate\Foundation\Application;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/', function () { return view('inicio'); })->name('inicio');
Route::get('/sobrenos', function () { return view('aboutus'); })->name('aboutus');
Route::get('/duvidasFrequentes', function () { return view('duvidasFrequentes'); })->name('duvidasFrequentes');
Route::view('/contato', 'contact')->name('contato');
Route::post('/contato', [ContactController::class, 'submit'])->name('contato.submit');

Route::get('/feed', function () {
    $publications = Publication::orderBy('created_at', 'desc')->paginate(10);
    return view('feed', ['publications' => $publications]);
});