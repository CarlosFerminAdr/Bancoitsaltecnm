<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectograma extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS INVERSA
    public function empresa(){
        return $this->belongsTo('App\Models\Empresa');
    }

    //RELACION MUCHOS A MUCHOS
    public function carreras(){
        return $this->belongsToMany('App\Models\Carrera');
    }

    //RELACION MUCHOS A MUCHOS
    public function periodos(){
        return $this->belongsToMany('App\Models\Periodo');
    }

}
