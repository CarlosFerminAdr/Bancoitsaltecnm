<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $fillable = ['actividades', 'tipo_id', 'user_id'];

    // RELACION UNO A UNO POLIMORFICA
    public function proyectograma(){
        return $this->morphOne('App\Models\Proyectograma','proyectograable');
    }

    // RELACION MUCHOS A MUCHOS POLIMORFICA
    public function periodos(){
        return $this->morphToMany('App\Models\Periodo','periodable');
    }

    // RELACION MUCHOS A MUCHOS POLIMORFICA
    public function carreras(){
        return $this->morphToMany('App\Models\Carrera','carreraable');
    }

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }
    /*
    // RELACION UNO A UNO POLIMORFICA
    public function convocatoria(){
        return $this->MorphOne('App\Models\Convocatoria', 'convocatoriaable');
    }
    */

    //RELACION UNO A UNO
    public function registro(){
        return $this->hasOne('App\Models\Registro');
    }

}
