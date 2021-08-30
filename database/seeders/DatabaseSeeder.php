<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::factory(20)->create();
        Curso::factory(10)->create();
        $this->call(ActividadSeeder::class);
        $this->call(AsignacionSeeder::class);
    }
}
