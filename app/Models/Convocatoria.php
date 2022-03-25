<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $guarded = [];

    use HasFactory;

    //TABLA CONVOCATORIAS RALACION POLIMORFICA UNO A UNO
    public function convocatoriaable(){
        return $this->morphTo();
    }

}
