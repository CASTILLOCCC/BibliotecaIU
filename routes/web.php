<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\StockController;

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

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');


Route::get('/autors', [AutorController::class, 'index'])->name('autors.index');
Route::get('/prestamos', [PrestamosController::class, 'index'])->name('prestamos.index');
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::get('/editorial', [EditorialController::class, 'index'])->name('editorial.index');
Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
Route::get('/index')->name('index.index');