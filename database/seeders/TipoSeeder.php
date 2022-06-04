<?php

namespace Database\Seeders;

use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{

    public function run(){

        Tipo::create([
            'tipo_programa' => 'Educación para adultos'
        ]);

        Tipo::create([
            'tipo_programa' => 'Desarrollo de comunidad'
        ]);

        Tipo::create([
            'tipo_programa' => 'Actividades deportivas'
        ]);

        Tipo::create([
            'tipo_programa' => 'Actividades culturales'
        ]);

        Tipo::create([
            'tipo_programa' => 'PRONASOL'
        ]);

        Tipo::create([
            'tipo_programa' => 'Otros'
        ]);
    }
}
