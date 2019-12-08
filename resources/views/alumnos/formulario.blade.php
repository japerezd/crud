@extends('application.parent')
@section('title','Alumnos')

@section('main')

@if($errors->any())
    <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif



<form class="form-group" method="POST" action="/crud/public/alumnos" enctype="multipart/form-data">
    @csrf
    <br>
    <h1 align="center">Registrar</h1>
    <div class="form-group">
        <label for="">Numero de control </label>
        <input type="text" name="control" class="form-control @error('control') is-invalid @enderror" >
         @error('control')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>


    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror">
         @error('nombre')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>


    <div class="form-group">
        <label for="">Apellidos</label>
        <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror">
         @error('apellidos')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
   </div>



   <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
         @error('email')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
   </div>

    
   <div class="form-group">
        <label for="">Celular</label>
        <input type="tel" name="celular" class="form-control @error('celular') is-invalid @enderror">
         @error('celular')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
   </div>


   <div class="form-group">
        <label for="">Seleccione la imagen</label>
      
   </div>
   <div class="form-group">
        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror"/>
        @error('foto')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>

    <div>
        <label for="genero" class="form-group">Seleccione su genero</label>
        <select name="genero" id="genero" class="form-control @error('genero') is-invalid @enderror">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
        @error('genero')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
    </div>

    <div>
    <br>
    <button type="submit" name="add" class="btn btn-primary" value="Add">
        Guardar
    </button>

    <a href=" {{ route('alumnos.index') }}" class="btn btn-primary" align="right">
       Cancelar
    </a>
    </div>
   

    
</form>



@endsection