<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }

    // RELACION UNO A UNO POLIMORFICA
    public function convocatoria(){
        return $this->MorphOne('App\Models\Convocatoria', 'convocatoriaable');
    }

    //RELACION UNO A UNO
    public function registro(){
        return $this->hasOne('App\Models\Registro');
    }

}
