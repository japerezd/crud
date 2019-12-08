@extends('application.parent')
@section('title','Alumnos')

@section('main')
@if($errors->any())
    <div class="alert alert-danger">
            <ul>
               
                
                @foreach($errors->all as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif


<center>
<h1 align="center">Bienvenido al sistema</h1>

                    
<a href="{{ route('alumnos.create') }}" align="center" class="btn btn-info">
    Registrar alumno
</a>


</center>

@endsection