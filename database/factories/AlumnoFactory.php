<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre'            => $this->faker->firstName(),
            'apellido'          => $this->faker->lastName(),
            'email'             => $this->faker->unique()->email(),
            'fecha_nacimiento'  => $this->faker->date(),
        ];
    }
}