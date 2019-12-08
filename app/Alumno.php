<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public $timestamps=false;
    protected $fillable=[
        'control' ,'nombre','apellidos','email','celular','foto','genero'
    ];
}
