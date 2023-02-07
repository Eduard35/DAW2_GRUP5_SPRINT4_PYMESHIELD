<?php

use App\Http\Controllers\DevicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RestoreController;

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

// Restaurar
Route::get('/restaurar', [RestoreController::class, 'listar']);
Route::patch('/restaurar', [RestoreController::class, 'restaurar']);

//Mostrar Dispositivos
Route::get('/dispositivo', [DevicesController::class, 'mostrarDispositivos']);
Route::post('/dispositivo', [DevicesController::class, 'crear']);
Route::put('/dispositivo', [DevicesController::class, 'modificar']);
Route::patch('/dispositivo', [DevicesController::class, 'eliminar']);

//Mostrar inventari
Route::get('/inventario', [MainController::class, 'inventario']);


Route::get('/sendImage', [MainController::class, 'sendImage']);
Route::post('/deviceImage', [MainController::class, 'deviceImage'])->name('image.store');


