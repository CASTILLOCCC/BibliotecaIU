<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Ejemplar;
use App\Models\Prestamos;
use Illuminate\Support\Facades\Validator;
class EjemplarController extends Controller
{
    
    public function index()
{
    return view('Ejemplares.index', [
        'ejemplar' => Ejemplar::select('ejemplar.*', 'libro.titulo as libro_titulo')
            ->join('libro', 'ejemplar.codigoLibro', '=', 'libro.id')
            ->get(), 'error' => session('error')
    ]);
}
        
        //,[
            //'libros'=>Libro::select('libro.*','autores.nombre as autor_nombre')
           //->join('autores','libro.codigoAutor','=','autor.id')
           //->get()
       // ]
    
    public function create()
    {
        return view('Ejemplares.create',['libro'=>Libro::all(),[
            'errors' => session('errors')]]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $validator = Validator::make($request->all(), [
          'localizacion' => 'required|max:30|','cantidad'=> 'required|max:4|',
        ]);
    
        if ($validator->fails()) {
            return redirect('Ejemplares/create')
                        ->withErrors($validator)
                        ->withInput();
         }
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
     $prestamo = Prestamos::select('*')
        ->where('codigoEjemplar', $id)
        ->get();

        if ($prestamo->count() > 0) {
            
            return redirect()->action([self::class, 'index'])->with('error', 'No puedes eliminar un ejemplar con prestamos esta asociado en el sistema.');
        } else {
            $ejemplar->delete();
    return redirect('/Ejemplares');
        }
    
    }
}
