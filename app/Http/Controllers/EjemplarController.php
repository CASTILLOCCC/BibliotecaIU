<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Ejemplar;
class EjemplarController extends Controller
{
    
    public function index()
{
    return view('Ejemplares.index', [
        'ejemplar' => Ejemplar::select('ejemplar.*', 'libro.titulo as libro_titulo')
            ->join('libro', 'ejemplar.codigoLibro', '=', 'libro.id')
            ->get()
    ]);
}
        
        //,[
            //'libros'=>Libro::select('libro.*','autores.nombre as autor_nombre')
           //->join('autores','libro.codigoAutor','=','autor.id')
           //->get()
       // ]
    
    public function create()
    {
        return view('Ejemplares.create',['libro'=>Libro::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ejemplar = new Ejemplar ();
        $ejemplar->localizacion =$request->get('localizacion');
        $ejemplar->cantidad =$request->get('cantidad');
        $ejemplar->codigoLibro =$request->get('codigoLibro');
        $ejemplar->save();
 
        return redirect('/Ejemplares');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view('Ejemplares.edit',['ejemplar'=>Ejemplar::find($id),'libro'=>Libro::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ejemplar = Ejemplar::find($id);
        $ejemplar->localizacion =$request->get('localizacion');
        $ejemplar->cantidad =$request->get('cantidad');
        $ejemplar->codigoLibro =$request->get('codigoLibro');
        $ejemplar->save();

        return redirect('/Ejemplares');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
     return view('Ejemplares.confirmDelete',['ejemplar'=>Ejemplar::find($id)]);
    }
    
    
     public function destroy(string $id)
    {
        $ejemplar = Ejemplar::find($id);
     $ejemplar->delete();
        return redirect('/Ejemplares');
    }
}
