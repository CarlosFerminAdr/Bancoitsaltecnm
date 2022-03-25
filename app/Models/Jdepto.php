<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jdepto extends Model
{
    use HasFactory;

    //RELACION UNO A UNO INVERSA
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //RELACION UNO A MUCHOS
    public function carreras(){
        return $this->hasMany('App\Models\Carrera');
    }

}
