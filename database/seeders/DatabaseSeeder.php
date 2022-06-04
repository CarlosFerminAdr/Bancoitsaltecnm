<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(PeriodoSeeder::class);

        $this->call(EstadoSeeder::class);

        $this->call(TipoSeeder::class);

        $this->call(JdeptoSeeder::class);

        $this->call(CarreraSeeder::class);

        $this->call(DomicilioSeeder::class);

        $this->call(EmpresaSeeder::class);

    }
}
