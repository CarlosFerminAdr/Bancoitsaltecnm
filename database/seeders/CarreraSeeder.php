<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
            'nombre' => 'INGENIERÍA EN ACUICULTURA',
            'jdepto_id' => '1'
        ]);

        Carrera::create([
            'nombre' => 'INGENIERÍA QUÍMICA',
            'jdepto_id' => '1'
        ]);

        Carrera::create([
            'nombre' => 'INGENIERÍA MECÁNICA',
            'jdepto_id' => '2'
        ]);

        Carrera::create([
            'nombre' => 'INGENIERÍA ELECTRÓNICA',
            'jdepto_id' => '3'
        ]);

        Carrera::create([
            'nombre' => 'INGENIERÍA EN TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIONES',
            'jdepto_id' => '3'
        ]);

        Carrera::create([
            'nombre' => 'INGENIERÍA EN GESTIÓN EMPRESARIAL',
            'jdepto_id' => '4'
        ]);
    }
}
