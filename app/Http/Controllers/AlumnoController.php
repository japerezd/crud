<?php

namespace App\Http\Controllers;
use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('alumnos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(([
            'control'               => 'required',
            'nombre'                => 'required',
            'apellidos'              => 'required',
            'email'                 => 'required|email',
            'celular'               => 'required|min:10|max:10',
            'foto'                  => 'required|image|max:2048',
            'genero'                => 'required',
        ]));


        
        $imagen= $request->file('foto');
        $new_name=rand().'.'.$imagen->
                getClientOriginalExtension();
        $imagen->move(public_path('fotografias'),$new_name);
        $datos=array(
                'control'               => $request->control,
                'nombre'                => $request->nombre,
                'apellidos'              => $request->apellidos,
                'email'                 => $request->email,
                'celular'               => $request->celular,
                'foto'                  => $new_name,
                'genero'                => $request->genero
        );

        Alumno::create($datos);
       
        $datosEnviar = new Alumno();
        $datosEnviar->control=$request->control;
        $datosEnviar->nombre=$request->nombre;
        $datosEnviar->apellidos=$request->apellidos;
        $datosEnviar->email=$request->email;
        $datosEnviar->celular=$request->celular;
        $datosEnviar->foto=$new_name;
        $datosEnviar->genero=$request->genero;
    
        return view('alumnos.confirmarDatos',['datos'=>$datosEnviar]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
