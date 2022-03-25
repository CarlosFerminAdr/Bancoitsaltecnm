<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    //RELACION UNO A UNO
    public function empresa(){
        return $this->hasOne('App\Models\Empresa');
    }
}
