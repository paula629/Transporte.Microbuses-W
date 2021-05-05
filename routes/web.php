<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paraderosController;

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


// rutas para el controlador paraderos

Route::get ('paraderos', [paraderosController::class, 'index'])->name ('paraderos.index');