<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nombre' => 'Instituto Tecnológico de Salina Cruz',
            'giro' => 'Publico ',
            'rfc' => 'TNM140723GFA',
            'correo' => 'dir_salinacruz@tecnm.mx',
            'telefono' => '9717163242',
            'titular' => 'M. A. Macario Quiroz Cortés',
            'domicilio_id' => '1',
            'user_id' => '6'
        ]);
    }
}
