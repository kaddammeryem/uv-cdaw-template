<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word, // A single unique word
            'categorie_id' =>rand(2,13),
            'image' =>  $this->faker->unique()->word 
        ];
    }
}