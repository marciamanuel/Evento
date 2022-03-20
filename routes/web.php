<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

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

Route::get('/', [EventoController::class, 'index']);
Route::get('/events/create', [EventoController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventoController::class, 'show']);
Route::get('/contacto', [EventoController::class, 'contacto']);
Route::post('/events', [EventoController::class, 'store']);


Route::get('/dashboard',[EventoController::class, 'dashboard'])->middleware('auth');

