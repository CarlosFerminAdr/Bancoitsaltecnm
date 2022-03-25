<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    //RELACION UNO A UNO INVERSA
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //RELACION UNO A MUCHOS INVERSA
    public function carrera(){
        return $this->belongsTo('App\Models\Carrera');
    }

    //RELACION UNO A UNO
    public function registro(){
        return $this->hasOne('App\Models\Registro');
    }

}
