<?php

namespace App\Http\Controllers;


use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Prestamos;
//use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Usuarios.Index',[
            'usuario'=>Usuarios::all(), 
             'error' => session('error')
            
        ]);
        
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.create',[
            'errors' => session('errors')
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
          'nombreUsuario' => 'required|max:50|','telefonoUsuario'=> 'required|min:7|max:10|','direccionUsuario'=> 'required|max:30|',
        ]);
    
        if ($validator->fails()) {
            return redirect('Usuarios/create')
                        ->withErrors($validator)
                        ->withInput();
 }
        $usuario = new Usuarios();
        $usuario->nombreUsuario =$request->get('nombreUsuario');
        $usuario->telefonoUsuario =$request->get('telefonoUsuario');
        $usuario->direccionUsuario =$request->get('direccionUsuario');
        $usuario->save();
 
        return redirect('/Usuarios');
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
        return view('Usuarios.edit',['usuario'=>Usuarios::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuarios::find($id);       
        $usuario->nombreUsuario =$request->get('nombreUsuario');
        $usuario->telefonoUsuario =$request->get('telefonoUsuario');
        $usuario->direccionUsuario =$request->get('direccionUsuario');
        $usuario->save();

        return redirect('/Usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function confirmDelete(string $id)
    {
     return view('Usuarios.confirmDelete',
     ['usuario'=>Usuarios::find($id)
    ]);
    }
     public function destroy(string $id)
    
    {
    $usuario = Usuarios::find($id);
     $prestamo = Prestamos::select('*')
        ->where('codigoUsuario', $id)
        ->get();

        if ($prestamo->count() > 0) {
            
            return redirect()->action([self::class, 'index'])->with('error', 'No puedes eliminar un usuario con prestamos asociados en el sistema.');
        } else {
            $usuario->delete();
    return redirect('/Usuarios');
        }
    
    }
}
  