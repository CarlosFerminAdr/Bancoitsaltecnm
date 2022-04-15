<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    //RELACION MUCHOS A MUCHOS INVERSA POLIMORFICA
    public function proyectos(){
        return $this->morphedByMany('App\Models\Proyecto', 'carreraable');
    }

    //RELACION MUCHOS A MUCHOS INVERSA POLIMORFICA
    public function programas(){
        return $this->morphedByMany('App\Models\Programa', 'carreraable');
    }

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
