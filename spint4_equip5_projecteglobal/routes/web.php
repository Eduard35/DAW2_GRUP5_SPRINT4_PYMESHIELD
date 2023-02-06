<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class, '__invoke');
Route::get('/index', HomeController::class);
Route::get('/mostrarLista', [MainController::class, 'mostrarLista']);
Route::get('/mostrarDispositivo', [MainController::class, 'mostrarDispositivos']);
Route::get('/inventario', [MainController::class, 'inventario']);


