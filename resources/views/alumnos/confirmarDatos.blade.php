@extends('application.parent')
@section('title','Alumnos')

@section('main')
<div class="jumbotron text-center">
    <div align="right">
        <a href="{{ route('alumnos.index') }}" class="btn btn-info">Regresar</a>
    </div>


    <br/>
    <img src="{{ URL::to('/') }}/fotografias/{{ $datos->foto }}" class="img-thumbnail" alt="">
    
        <h3>Numero de control - {{ $datos->control }}</h3>
        <h3>Nombre - {{ $datos->nombre }}</h3>
        <h3>Apellidos - {{ $datos->apellidos }}</h3>
        <h3>Email - {{ $datos->email }}</h3>
        <h3>Celular - {{ $datos->celular }}</h3>
        <h3>Genero - {{ $datos->genero }}</h3> 
</div>




@endsection