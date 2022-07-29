<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/home', [AtteController::class, 'manage'])->middleware('auth');;
Route::post('/working_start', [AtteController::class, 'working_start'])->middleware('auth');;
Route::post('/working_end', [AtteController::class, 'working_end'])->middleware('auth');;
Route::post('/breaking_start', [AtteController::class, 'breaking_start'])->middleware('auth');;
Route::post('/breaking_end', [AtteController::class, 'breaking_end'])->middleware('auth');;
