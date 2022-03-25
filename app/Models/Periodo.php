<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    //RELACION MUCHOS A MUCHOS
    public function proyectogramas(){
        return $this->belongsToMany('App\Models\Proyectograma');
    }
}
