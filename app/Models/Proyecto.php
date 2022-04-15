<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['objetivo', 'problematica', 'user_id'];

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

    //RELACION UNO A MUCHOS INVERSA
    public function empresa(){
        return $this->belongsTo('App\Models\Empresa');
    }

    //RELACION MUCHOS A MUCHOS
    /*public function periodos(){
        return $this->belongsToMany('App\Models\Periodo');
    }*/

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
