@extends('layouts.base')
@section ('content')

  <form action="/Ejemplares" method="POST">
    @csrf
    <div class="container mt-4">
        <h4>Crear Ejemplar</h4>
    <br>

        <form>
          
          <div class="form-group col-6">
            <label for="localizacion">Localización:</label>
            <input type="text" class="form-control" id="localizacion" name="localizacion">
          </div>
          <div class="form-group col-6">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad">
          </div>
          <div class="form-group col-6" >
 <label for="codigoLibro">Titulo Libro:</label>
<select class="form-control" id="codigoLibro" name="codigoLibro">
    @foreach ($libro as $libro)
        <option value="{{$libro->id}}">{{$libro->titulo}}</option>
        
    @endforeach
</select>

                 
</div>
     
          <br>
<a class="btn btn-primary" href="/Ejemplares">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>





@endsection







