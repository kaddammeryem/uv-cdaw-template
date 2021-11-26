<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tab=['acteur','directeur'];
        $i=rand(0,1);
        return [
            'nom' => $this->faker->unique()->lastName(), // A single unique word
            'prenom' => $this->faker->unique()->firstName(),
            'fonction' => $tab[0],
        ];
    }
}