<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    protected $fillable = ['calle', 'numero', 'colonia', 'cp', 'municipio', 'estado', 'user_id'];

    //RELACION UNO A UNO
    public function empresa(){
        return $this->hasOne('App\Models\Empresa');
    }
}
