<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $fillable =['nombre'];

    public function proyectos(){
        return $this->hasMany('App\Models\Proyecto');
    }

    public function programas(){
        return $this->hasMany('App\Models\Programa');
    }

    /*
    //RELACION MUCHOS A MUCHOS INVERSA POLIMORFICA
    public function proyectos(){
        return $this->morphedByMany('App\Models\Proyecto', 'periodable');
    }


    //RELACION MUCHOS A MUCHOS INVERSA POLIMORFICA
    public function programas(){
        return $this->morphedByMany('App\Models\Programa', 'periodable');
    }
    */

    //RELACION MUCHOS A MUCHOS
    public function proyectogramas(){
        return $this->belongsToMany('App\Models\Proyectograma');
    }
}
