<?php

namespace App\Http\Controllers;
use App\Models\autorLibro;
use App\Models\usuarioPrestamo;
use App\Models\Usuarios;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use App\Models\Prestamos;
use App\Models\Autores;
use App\Models\Ejemplar;
use Carbon\Carbon;


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
                    'ListaLibros' => Ejemplar::join('libro', 'libro.id', '=', 'ejemplar.codigoLibro')
            ->join('autores','libro.codigoAutor', '=', 'autores.id')
            ->select('libro.titulo', 'autores.nombreAutor', 'ejemplar.cantidad', 'ejemplar.id')
            ->where('autores.id', '0')
            ->get(),
            'ValorUsuario' => 0,
            'ValorAutor' => 0
            ];

        return view('Prestamos.agregarPrestamos',[
            "superPantalla" =>$superPantalla]);
    }

    public function consultarPrestamos(Request $request)
    {
        $usuarioId = $request->input('persona');
        $autoresId = $request->input('autores');
        $accionId = $request->input('idAccion');
        $devolverId = $request->input('idDevolver');
        $prestarId = $request->input('idPrestar');
        $fechaActual = Carbon::now();

        if ($accionId === 'Devolver') {

            $prestamo = Prestamos::find((int)$devolverId);
            $prestamo->fechaDevolucion = $fechaActual;
            $prestamo->cantidad = 0;
            $prestamo->save();

            $ejemplar = Ejemplar::find($prestamo->codigoEjemplar);
            $ejemplar->cantidad = $ejemplar->cantidad + 1;
            $ejemplar->save();
    
        }
        else {

        }
        

        $superPantalla = [
            'ListaPrestamoPersonal' => Prestamos::join('ejemplar','prestamos.codigoEjemplar', '=', 'ejemplar.id')
            ->join('libro','ejemplar.codigoLibro', '=', 'libro.id')
            ->join('autores','libro.codigoAutor', '=', 'autores.id')
            ->join('usuarios','prestamos.codigoUsuario', '=', 'usuarios.id')
                ->select('libro.titulo', 'prestamos.*', 'autores.nombreAutor', 'libro.editorial')
                ->where('usuarios.id', $usuarioId)
                ->where('prestamos.cantidad', '>', 0)
                ->get(),
            'ListaUsuarios' => Usuarios::all(),
            'ListaAutores' => Autores::all(),
            'ListaLibros' => Ejemplar::join('libro', 'libro.id', '=', 'ejemplar.codigoLibro')
            ->join('autores','libro.codigoAutor', '=', 'autores.id')
            ->select('libro.titulo', 'autores.nombreAutor', 'ejemplar.cantidad','ejemplar.id')
            ->where('autores.id', $autoresId)
            ->get(),
            'ValorUsuario' => $usuarioId,
            'ValorAutor' => $autoresId
        ];

    return view('Prestamos.agregarPrestamos',[
        "superPantalla" =>$superPantalla]);
    }
 

}


