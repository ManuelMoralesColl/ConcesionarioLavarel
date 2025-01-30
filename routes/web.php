<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CochesController;

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

Route::get('/', function () {
    return view('welcome');

});

Route::get('/coches', [CochesController::class, 'index'])->name('listaCoches');
Route::get('/crearCoche', [CochesController::class, 'create'])->name('crearCoche');
Route::post('/coches', [CochesController::class, 'store'])->name('guardarCoche');
Route::get('/editarCoche/{id}', [CochesController::class, 'edit'])->name('editarCoche');
Route::put('/coches/{id}', [CochesController::class, 'update'])->name('actualizarCoche');
Route::delete('/coches/{id}', [CochesController::class, 'destroy'])->name('eliminarCoche');