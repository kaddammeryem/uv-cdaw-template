<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'avatar' => $this->faker->imageUrl(),
            'phone' => '0628797679',
            'naissance' => $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
            'email' => $this->faker->unique()->safeEmail(),
            'quote'=>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'role' => 'normal',
            'remember_token' => Str::random(10),
        ];
    }
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
