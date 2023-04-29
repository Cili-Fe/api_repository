<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'prenom' => $this->faker->name,
            'adresse' => $this->faker->address,
            'email' => $this->faker->email,
            'pass' => $this->faker->password,
            'photo' => $this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
