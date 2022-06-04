<?php

namespace Database\Seeders;

use App\Models\Jdepto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JdeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jdepto::create([
            'apaterno' => 'Hernández',
            'amaterno' => 'Valencia',
            'nombre' => 'Má. Jorge Armando',
            'departamento' => 'Departamento de Ingenierías',
            'user_id' => '2'
        ]);

        Jdepto::create([
            'apaterno' => 'Matías',
            'amaterno' => 'Matías',
            'nombre' => 'M.E. Sergio',
            'departamento' => 'Departamento Metal-Mecánica',
            'user_id' => '3'
        ]);

        Jdepto::create([
            'apaterno' => 'Morales',
            'amaterno' => 'Cruz',
            'nombre' => 'Ing. Anita del Carmen',
            'departamento' => 'Departamento Eléctrica-Electrónica',
            'user_id' => '4'
        ]);

        Jdepto::create([
            'apaterno' => 'Sosa',
            'amaterno' => 'Pérez',
            'nombre' => 'Lic. Dolores',
            'departamento' => 'Departamento de Ciencias Económico-Administrativas',
            'user_id' => '5'
        ]);
    }
}
