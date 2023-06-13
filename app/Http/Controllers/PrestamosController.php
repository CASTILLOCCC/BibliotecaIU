<?php

namespace App\Http\Controllers;
use App\Models\autorLibro;
use App\Models\usuarioPrestamo;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Models\Prestamos;
use App\Models\Autores;
use App\Models\Ejemplar;


class PrestamosController extends Controller
{    
    public function index()
    {            
           $superPantalla = [
                'ListaPrestamoPersonal' => Prestamos::join('ejemplar','prestamos.codigoEjemplar', '=', 'ejemplar.id')
                ->join('libro','ejemplar.codigoLibro', '=', 'libro.id')
                ->join('autores','libro.codigoAutor', '=', 'autores.id')
                    ->select('libro.titulo', 'prestamos.*', 'autores.nombreAutor', 'libro.editorial')
                    ->where('prestamos.id', '0')
                    ->get(),
                    'ListaUsuarios' => Usuarios::all(),
                    'ListaAutores' => Autores::all(),
                    'ListaLibrosStock' => Ejemplar::join('libro','libro.id', '=', 'ejemplar.codigoLibro')
                ->join('autores','libro.codigoAutor', '=', 'autores.id')
                    ->select('libro.titulo', 'ejemplar.cantidad', 'autores.nombreAutor', 'libro.editorial')
                    ->get(),
            ];


        return view('Prestamos.agregarPrestamos',[
            "superPantalla" =>$superPantalla]);
    }

    public function consultarPrestamos(Request $request)
    {
        $usuarioId = $request->input('persona');
        $superPantalla = [
            'ListaPrestamoPersonal' => Prestamos::join('ejemplar','prestamos.codigoEjemplar', '=', 'ejemplar.id')
            ->join('libro','ejemplar.codigoLibro', '=', 'libro.id')
            ->join('autores','libro.codigoAutor', '=', 'autores.id')
            ->join('usuarios','prestamos.codigoUsuario', '=', 'usuarios.id')
                ->select('libro.titulo', 'prestamos.*', 'autores.nombreAutor', 'libro.editorial')
                ->where('usuarios.id', $usuarioId)
                ->get(),
            'ListaUsuarios' => Usuarios::all(),
            'ListaAutores' => Autores::all()
        ];

     

    return view('Prestamos.agregarPrestamos',[
        "superPantalla" =>$superPantalla]);
    }
 
}


