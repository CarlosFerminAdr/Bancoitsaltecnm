<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{

    public function run(){

        Estado::create([
            'tipo_status' => 'EN PROCESO'
        ]);

        Estado::create([
            'tipo_status' => 'ASIGNADO'
        ]);

        Estado::create([
            'tipo_status' => 'DISPONIBLE'
        ]);
    }
}
