@extends('layouts.base')
@section ('content')

  <form action="/Usuarios/{{$usuario->id}}"method="POST">
    @csrf
    @method('put')
    <div class="container mt-3">
        <h5>Editar Usuario</h5>
        <br>
         
          <div class="mb-3">
            <label for="nombreUsuario">Nombre Usuario:</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="{{$usuario->nombreUsuario}}">
          </div>

        
           <div class="mb-3">
            <label for="telefonoUsuario">Teléfono:</label>
            <input type="number" class="form-control" id="telefonoUsuario" name="telefonoUsuario" value="{{$usuario->telefonoUsuario}}">
          </div>

           <div class="mb-3">
            <label for="direccionUsuario">Dirección:</label>
            <input type="text" class="form-control" id="direccionUsuario" name="direccionUsuario" value="{{$usuario->direccionUsuario}}">
          </div>
          
     
          <br>
<a class="btn btn-primary" href="/Usuarios">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection

