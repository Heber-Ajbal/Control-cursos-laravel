<?php

namespace Database\Factories;

use App\Models\Asignacion;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsignacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asignacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nota'=>$this->faker->numberBetween($min = 25, $max = 100),
            'curso_id'=>Curso::all()->random()->id,
            'user_id'=>User::all()->random()->id

        ];
    }
}
