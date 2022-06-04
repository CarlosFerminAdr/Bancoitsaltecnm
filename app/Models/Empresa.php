<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'giro', 'rfc', 'correo', 'telefono', 'titular', 'domicilio_id', 'user_id'];

    //RELACION UNO A UNO INVERSA
    public function domicilio(){
        return $this->belongsTo('App\Models\Domicilio');
    }

    //RELACION UNO A UNO INVERSA
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //RELACION UNO A MUCHOS
    public function proyectogramas(){
        return $this->hasMany('App\Models\Proyectograma');
    }

     //RELACION UNO A MUCHOS
     public function Proyectos(){
        return $this->hasMany('App\Models\Proyecto');
    }
}
