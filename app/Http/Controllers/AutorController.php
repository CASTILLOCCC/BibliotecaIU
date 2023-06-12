<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autores;
class AutorController extends Controller


{
    private $id;
    private $nombreAutor;
    private $libro;
    private $autor;
  
    public function index()
    
    {
        
        return view('Autores.index',[
            'autores'=>Autores::all()
            
        ]);
    }
    public function create()
    {
         return view('Autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autor = new Autores ();
        $autor->nombreAutor =$request->get('nombreAutor');
                $autor->save();
 
        return redirect('/Autores');
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
        return view('Autores.edit',['autor'=>Autores::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    
    
     public function update(Request $request,string $id)
    {
        $autor = Autores::find($id);
        $autor->nombreAutor =$request->get('nombreAutor');
        $autor->save();

        return redirect('/Autores');
    }
   public function confirmDelete(string $id)
    {
     return view('Autores.confirmDelete',
     ['autor'=>Autores::find($id)
    ]);

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $autor = Autores::find($id);
    $autor->delete();

     //$libros = Libro::select('*')

    //->where('autores','libro.codigoAutor',$id)
   //->get();

    //if ($libros->count()> 0) {
    //return redirect()->action('AutorController@index');
    //} else {
    //$autor->delete();
    return redirect('/Autores');
    }
        
}
 
