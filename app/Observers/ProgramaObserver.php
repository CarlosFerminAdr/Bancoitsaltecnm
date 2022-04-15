<?php

namespace App\Observers;

use App\Models\Programa;
use App\Models\Proyectograma;

class ProgramaObserver
{

    public function creating(Programa $programa)
    {
        if(! \App::runningInConsole()){
            $programa->user_id = auth()->user()->id;
        }
    }

    public function deleting(Programa $programa)
    {
        if($programa->proyectograma){
            $programa->proyectograma()->delete(
                $programa->proyectograma->nombre,
                $programa->proyectograma->nalumnos,
                $programa->proyectograma->flimite,
                $programa->proyectograma->status,
                $programa->proyectograma->empresa_id
            );
        }

        if($programa->periodos){
            $programa->periodos()->detach($programa->periodos);
        }

        if($programa->carreras){
            $programa->carreras()->detach($programa->carreras);
        }
    }

}
