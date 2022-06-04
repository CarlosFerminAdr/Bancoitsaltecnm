<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@salinacruz.tecnm.mx',
            'password' => bcrypt('admin'),
            'tipo_user' => 'Administrador',
            'status' => '1'
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Jorge Armando',
            'email' => 'ingenierias@salinacruz.tecnm.mx',
            'password' => bcrypt('1234'),
            'tipo_user' => 'Jefe Depto',
            'status' => '1'
        ])->assignRole('Jefe-Ingenierías');

        User::create([
            'name' => 'Sergio',
            'email' => 'metal-mecanica@salinacruz.tecnm.mx',
            'password' => bcrypt('1234'),
            'tipo_user' => 'Jefe Depto',
            'status' => '1'
        ])->assignRole('Jefe-Metal-Mecánica');

        User::create([
            'name' => 'Anita del Carmen',
            'email' => 'electrica–electronica@salinacruz.tecnm.mx',
            'password' => bcrypt('1234'),
            'tipo_user' => 'Jefe Depto',
            'status' => '1'
        ])->assignRole('Jefe-Eléctrica-Electrónica');

        User::create([
            'name' => 'Dolores',
            'email' => 'economico-administrativas@salinacruz.tecnm.mx',
            'password' => bcrypt('1234'),
            'tipo_user' => 'Jefe Depto',
            'status' => '1'
        ])->assignRole('Jefe-Económico-Administrativas');

        /*User::create([
            'name' => 'Empresa1',
            'email' => 'empresa1@gmail.com',
            'password' => bcrypt('1234'),
            'tipo_user' => 'Empresa',
            'status' => '1'
        ])->assignRole('Empresa');*/

        User::create([
            'name' => 'Cayetano',
            'email' => 'vinculacion@salinacruz.tecnm.mx',
            'password' => bcrypt('1234'),
            'tipo_user' => 'Jefe Depto',
            'status' => '1'
        ])->assignRole('Vinculación');
    }
}
