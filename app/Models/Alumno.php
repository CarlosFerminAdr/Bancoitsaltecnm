<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = ['apaterno', 'amaterno', 'nombre', 'ncontrol', 'nip', 'correo', 'telefono', 'carrera_id', 'programa_id', 'proyecto_id', 'user_id'];

    //RELACION UNO A MUCHOS INVERSA
    public function programa(){
        return $this->belongsTo('App\Models\Programa');
    }

    public function proyecto(){
        return $this->belongsTo('App\Models\Proyecto');
    }

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

    //RELACION UNO A UNO
    public function solicita(){
        return $this->hasOne('App\Models\Solicita');
    }

}
