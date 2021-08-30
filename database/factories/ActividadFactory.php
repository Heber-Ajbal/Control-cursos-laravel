<?php

namespace Database\Factories;

use App\Models\Actividad;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Actividad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'valor'=>$this->faker->numberBetween($min = 1, $max = 100),
            'curso_id'=>Curso::all()->random()->id,
        ];
    }
}
