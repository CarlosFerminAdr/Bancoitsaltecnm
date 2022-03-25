<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS INVERSA
    public function jdepto(){
        return $this->belongsTo('App\Models\Jdepto');
    }

    //RELACION UNO A MUCHOS
    public function alumnos(){
        return $this->hasMany('App\Models\Alumno');
    }

    //RELACION MUCHOS A MUCHOS
    public function proyectogramas(){
        return $this->belongsToMany('App\Models\Proyectograma');
    }

}
