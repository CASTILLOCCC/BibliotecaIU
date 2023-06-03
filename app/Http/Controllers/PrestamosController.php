<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamosController extends Controller
{
    public function index()
    {
        $ListaPrestamoPersonal = Prestamo::join('libro','prestamos.codigoLibro', '=', 'libro.id')
        ->join('autor','libro.codigoAutor', '=', 'autor.id')
        ->join('ejemplar','libro.codigoAutor', '=', 'autor.id')
            ->select('libro.titulo', 'prestamos.*', 'autor.nombreAutor')
            ->get();
             
        return view('Prestamos.agregarPrestamos',[
            "ListaPrestamoPersonal" =>$ListaPrestamoPersonal]);
    }

}
