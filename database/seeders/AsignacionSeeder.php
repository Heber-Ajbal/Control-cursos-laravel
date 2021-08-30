<?php

namespace Database\Seeders;

use App\Models\Asignacion;
use Illuminate\Database\Seeder;

class AsignacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asignacion::factory(15)->create();
    }
}
