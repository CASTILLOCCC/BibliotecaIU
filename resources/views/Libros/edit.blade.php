@extends('layouts.base')
@section ('content')

  <form action="/Libros/{{$libro->id}}"method="POST">
    @csrf
    @method('put')
    <div class="container mt-4">
        <h2>Crear Libro</h2>
    
        <form>
          
          <div class="form-group col-6">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{$libro->titulo}}">
          </div>
          <div class="form-group col-6">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn"value="{{$libro->isbn}}">
          </div>
          <div class="form-group col-6">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" id="editorial" name="editorial" value="{{$libro->Editorial}}">
          </div>
          <div class="form-group col-6">
            <label for="paginas">Páginas:</label>
            <input type="number" class="form-control" id="paginas" name="paginas" value="{{$libro->paginas}}">
          </div>
          <div class="form-group col-6" >
 <label for="codigoAutor"><h5>Autor:</h5></label>
<select class="form-control" id="codigoAutor" name="codigoAutor" value="{{$libro->codigoAutor}}"> 
    @foreach ($autor as $autor)
    @if($autor->id == $libro->codigoAutor)
        <option value="{{$autor->id }}"selected>{{$autor->nombreAutor}}</option>
      @else
     <option value="{{$autor->id}}">{{$autor->nombreAutor}}</option> 
  @endif
    @endforeach
</select>
                 
</div>
     
<br>
<a class="btn btn-primary" href="/Libros">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>


@endsection







