<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Autores;
use App\Models\Ejemplar;
use Illuminate\Support\Facades\Validator;
class LibroController extends Controller
{
    
    public function index()
    {
        
         return view('Libros.index',[
            'libro'=>Libro::select('libro.*','autores.nombreAutor as autor_nombre')
            ->join('autores','libro.codigoAutor', '=','autores.id')
            ->get(), 'error' => session('error')
            
        ]);
        
        
    }
    public function create()
    {
        return view('Libros.create',['autor'=>Autores::all(),[
            'errors' => session('errors')]]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

         $validator = Validator::make($request->all(), [
          'titulo' => 'required|max:30|','isbn'=> 'required|max:20|', 'editorial' => 'required|max:30|','paginas'=> 'required|max:4|',
        ]);
    
        if ($validator->fails()) {
            return redirect('Libros/create')
                        ->withErrors($validator)
                        ->withInput();
         }
        $libro = new Libro ();
        $libro->titulo =$request->get('titulo');
        $libro->isbn =$request->get('isbn');
        $libro->Editorial =$request->get('editorial');
        $libro->paginas =$request->get('paginas');
        $libro->codigoAutor =$request->get('codigoAutor');
        $libro->save();
 
        return redirect('/Libros');
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
       return view('Libros.edit',['libro'=>Libro::find($id),'autor'=>Autores::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libro = Libro::find($id);
        $libro->titulo =$request->get('titulo');
        $libro->isbn =$request->get('isbn');
        $libro->Editorial =$request->get('editorial');
        $libro->paginas =$request->get('paginas');
        $libro->codigoAutor =$request->get('codigoAutor');
        $libro->save();

        return redirect('/Libros');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
     return view('Libros.confirmDelete',['libro'=>Libro::find($id),'autor'=>Autores::all()]);
    }
    
    
     public function destroy(string $id)
    
    {
    $libro = Libro::find($id);
     $ejemplar = Ejemplar::select('*')
        ->where('codigoLibro', $id)
        ->get();

        if ($ejemplar->count() > 0) {
            
            return redirect()->action([self::class, 'index'])->with('error', 'No puedes eliminar un libro con ejemplares asociados en el sistema.');
        } else {
            $libro->delete();
    return redirect('/Libros');
        }
    
}
}
