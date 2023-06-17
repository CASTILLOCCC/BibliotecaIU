@extends('layouts.base')
@section ('content')

  <form action="/Usuarios" method="POST">
    @csrf
    <div class="container mt-3">
        <h5>Crear Usuario</h5>
        <br>
         
          <div class="mb-3">
            <label for="nombreUsuario">Nombre Usuario:</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
          </div>

          
           <div class="mb-3">
            <label for="telefonoUsuario">Teléfono:</label>
            <input type="integer" class="form-control" id="telefonoUsuario" name="telefonoUsuario">
          </div>

           <div class="mb-3">
            <label for="direccionUsuario">Dirección:</label>
            <input type="text" class="form-control" id="direccionUsuario" name="direccionUsuario">
          </div>
          
     
          <br>
<a class="btn btn-primary" href="/Usuarios">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection







