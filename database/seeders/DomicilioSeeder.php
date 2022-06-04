<?php

namespace Database\Seeders;

use App\Models\Domicilio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domicilio::create([
            'calle' => 'Carretera a San Antonio Monterrey, KM. 1.7',
            'numero' => 'S/N',
            'colonia' => 'Granadillo',
            'cp' => '70701',
            'municipio' => 'Salina Cruz',
            'estado' => 'Oaxaca',
            'user_id' => '6'
        ]);
    }
}
