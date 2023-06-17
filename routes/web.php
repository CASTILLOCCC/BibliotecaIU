<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EjemplarController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;

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
Route::get('/', [IndexController::class, 'Index']);
Route::resource('/Autores', AutorController::class);
Route::get('/Autores/{id}/confirmDelete',[AutorController::class,'confirmDelete']);

Route::resource('/Libros', LibroController::class);
Route::get('/Libros/{id}/confirmDelete',[LibroController::class,'confirmDelete']);

Route::post('/prestamos', [PrestamosController::class, 'consultarPrestamos'])->name('consultarPrestamos');




Route::post('/libros/store', [LibroController::class, 'store'])->name('libros.store');

Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
Route::get('/prestamos', [PrestamosController::class, 'index'])->name('prestamos.index');
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create');
Route::get('/ejemplares', [EjemplarController::class, 'index'])->name('ejemplares.index');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/dropdown', 'UserController@index');
Route::get('/index', [IndexController::class, 'index'])->name('index.index');


Route::get('/search', function (Request $request) {
    $query = $request->input('query');

    $results = ['Resultado 1', 'Resultado 2', 'Resultado 3'];

    return view('search', compact('results'));
})->name('search');

