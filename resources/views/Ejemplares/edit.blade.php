@extends('layouts.base')
@section ('content')

  <form action="/Ejemplares/{{$ejemplar->id}}"method="POST">
    @csrf
    @method('put')
    <div class="container mt-4">
        <h2>Editar Ejemplar</h2>
    
        <form>
          
          <div class="form-group col-6">
            <label for="localizacion">Localización:</label>
            <input type="text" class="form-control" id="localizacion" name="localizacion" value="{{$ejemplar->localizacion}}">
          </div>
          <div class="form-group col-6">
            <label for="cantidad">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad"value="{{$ejemplar->cantidad}}">
          </div>
          
          <div class="form-group col-6" >
 <label for="codigoLibro"><h5>Nombre Título:</h5></label>
<select class="form-control" id="codigoLibro" name="codigoLibro" value="{{$ejemplar->codigoLibro}}"> 
    @foreach ($libro as $libro)
    @if($libro->id == $ejemplar->codigoLibro)
        <option value="{{$libro->id}}"selected>{{$libro->titulo}}</option>
      @else
     <option value="{{$libro->id}}">{{$libro->titulo}}</option> 
  @endif
    @endforeach
</select>
                 
</div>
     
<br>
<a class="btn btn-primary" href="/Ejemplares">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection







