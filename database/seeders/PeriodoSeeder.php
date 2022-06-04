<?php

namespace Database\Seeders;

use App\Models\Periodo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodoSeeder extends Seeder
{

    public function run(){

        Periodo::create([
            'nombre' => 'FEBRERO-JUNIO 2022'
        ]);

        Periodo::create([
            'nombre' => 'VERANO 2022'
        ]);

        Periodo::create([
            'nombre' => 'AGOSTO-DICIEMBRE 2022'
        ]);
    }
}
