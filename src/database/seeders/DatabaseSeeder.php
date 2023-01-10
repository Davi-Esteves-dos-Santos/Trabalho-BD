<?php

namespace Database\Seeders;

use App\Models\Campeonato;
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
        $this->call(ModalidadeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LocalidadeSeeder::class);
        $this->call(CampeonatoSeeder::class);
    }
}
