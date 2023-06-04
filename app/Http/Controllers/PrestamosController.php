<?php

namespace App\Http\Controllers;
use App\Models\autorLibro;
use App\Models\usuarioPrestamo;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Models\Prestamos;
use App\Models\Autores;


class PrestamosController extends Controller
{    
    public function index()
    {            
           $superPantalla = [
                'ListaPrestamoPersonal' => Prestamos::join('ejemplar','prestamos.codigoEjemplar', '=', 'ejemplar.id')
                ->join('libro','ejemplar.codigoLibro', '=', 'libro.id')
                ->join('autores','libro.codigoAutor', '=', 'autores.id')
                    ->select('libro.titulo', 'prestamos.*', 'autores.nombreAutor', 'libro.editorial')
                    ->get(),
                    'ListaUsuarios' => Usuarios::all()
            ];


        return view('Prestamos.agregarPrestamos',[
            "superPantalla" =>$superPantalla]);
    }

    public function consumoUno()
    {
        $superPantalla = [
            'ListaPrestamoPersonal' => Prestamos::join('ejemplar','prestamos.codigoEjemplar', '=', 'ejemplar.id')
            ->join('libro','ejemplar.codigoLibro', '=', 'libro.id')
            ->join('autores','libro.codigoAutor', '=', 'autores.id')
                ->select('libro.titulo', 'prestamos.*', 'autores.nombreAutor', 'libro.editorial')
                ->get(),
            'ListaUsuarios' => Usuarios::where('id', '2')->get()
        ];

     

    return view('Prestamos.agregarPrestamos',[
        "superPantalla" =>$superPantalla]);
    }
 
}


