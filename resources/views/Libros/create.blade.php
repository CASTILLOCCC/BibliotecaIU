@extends('layouts.base')
@section ('content')
@if ($errors != null && $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
             </ul>
    </div>
    @endif
  <form action="/Libros" method="POST">
    @csrf
    <div class="container mt-4">
        <h4>Crear Libro</h4>
    <br>

        <form>
          
          <div class="form-group col-6">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
          </div>
          <div class="form-group col-6">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" id="isbn" name="isbn">
          </div>
          <div class="form-group col-6">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" id="editorial" name="editorial">
          </div>
          <div class="form-group col-6">
            <label for="paginas">Páginas:</label>
            <input type="number" class="form-control" id="paginas" name="paginas">
          </div>
          <div class="form-group col-6" >
 <label for="codigoAutor">Autor:</label>
<select class="form-control" id="codigoAutor" name="codigoAutor">
    @foreach ($autor as $autor)
        <option value="{{$autor->id}}">{{$autor->nombreAutor}}</option>
        
    @endforeach
</select>

                 
</div>
     
          <br>
<a class="btn btn-primary" href="/libros">Regresar</a>
<button type= "submit" class="btn btn-primary ">Guardar</button>
</form>





@endsection







