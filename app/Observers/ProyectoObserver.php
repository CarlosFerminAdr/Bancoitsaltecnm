<?php

namespace App\Observers;

use App\Models\Proyecto;
use App\Models\Proyectograma;

class ProyectoObserver
{

    public function creating(Proyecto $proyecto)
    {
        if(! \App::runningInConsole()){
            $proyecto->user_id = auth()->user()->id;
        }
    }

    public function deleting(Proyecto $proyecto)
    {
        if($proyecto->proyectograma){
            $proyecto->proyectograma()->delete(
                $proyecto->proyectograma->nombre,
                $proyecto->proyectograma->nalumnos,
                $proyecto->proyectograma->flimite,
                $proyecto->proyectograma->status,
                $proyecto->proyectograma->empresa_id
            );
        }

        if($proyecto->periodos){
            $proyecto->periodos()->detach($proyecto->periodos);
        }

        if($proyecto->carreras){
            $proyecto->carreras()->detach($proyecto->carreras);
        }
    }

}
