<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Autores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutorController extends Controller


{
    private $id;
    private $nombreAutor;
    private $libro;
    private $autor;
   
    public function index()
    
    {
        return view('Autores.index',[
            'autor'=>Autores::all(),
            'error' => session('error')
        ]);
    }
    public function create()
    {
         return view('Autores.create', [
            'errors' => session('errors')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'nombreAutor' => 'required|max:50|',
        ]);
    
        if ($validator->fails()) {
            return redirect('Autores/create')
                        ->withErrors($validator)
                        ->withInput();
        }
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
        return view('Autores.edit',[
            'autor'=>Autores::find($id)
        ]);
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
     $libro = Libro::select('*')
        ->where('codigoAutor', $id)
        ->get();

        if ($libro->count() > 0) {
            
            return redirect()->action([self::class, 'index'])->with('error', 'No puedes eliminar un autor, tienes libros asociados en el sistema.');
        } else {
            $autor->delete();
    return redirect('/Autores');
        }
    
    }
        
}
 
