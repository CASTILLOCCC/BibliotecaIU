<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EjemplarController;
use App\Http\Controllers\UsuarioController;

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


Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/prestamos', [PrestamosController::class, 'index'])->name('prestamos.index');
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::get('/ejemplares', [EjemplarController::class, 'index'])->name('ejemplares.index');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

