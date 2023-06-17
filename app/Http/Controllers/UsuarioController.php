<?php

namespace App\Http\Controllers;


use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Usuarios.Index',[
            'usuario'=>Usuarios::all()
            
        ]);
        
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    $usuario->delete();
    return redirect('/Usuarios');
    }
}
  