<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicita extends Model
{
    use HasFactory;

    //RELACION UNO A UNO INVERSA
    public function alumno(){
        return $this->belongsTo('App\Models\Alumno');
    }

    //RELACION UNO A UNO INVERSA
    public function programa(){
        return $this->belongsTo('App\Models\Programa');
    }

    //RELACION UNO A UNO INVERSA
    public function proyecto(){
        return $this->belongsTo('App\Models\Proyecto');
    }
}
