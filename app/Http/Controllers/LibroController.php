<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    private $id;
    private $titulo;
    private $isbn;
    private $editorial;
    private $paginas;
    private $codigoAutor;
    
    public function index()
    {
        
        return view('Libros.index',['libros'=>Libro::all()]);
    }
    public function create()
    {
        return view('Libros.agregarLibros',['libros'=>Libro::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor = new Libro ();
        $autor->titulo =$request->get('titulo');
        $autor->ISBN =$request->get('isbn');
        $autor->Editorial =$request->get('editorial');
        $autor->paginas =$request->get('paginas');
        $autor->codigoAutor =$request->get('autor');
        $autor->save();
 
        return redirect('/libros');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
