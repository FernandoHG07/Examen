<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\direccionesController;
use App\Http\Controllers\PirataController;
use App\Http\Controllers\PiratSolController;

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

Route::get('/', [direccionesController::class, 'inicio'])->name('index');

Route::get('/about', [direccionesController::class, 'about'])->name('about');

Route::get('/contac', [direccionesController::class, 'contact'])->name('contact');

Route::get('/piratas', [PirataController::class, 'index'])->name('piratas');

Route::get('/pirata', [PirataController::class, 'pirata'])->name('pirata');

Route::get('/hola', [PirataController::class, 'pirata'])->name('pirata');