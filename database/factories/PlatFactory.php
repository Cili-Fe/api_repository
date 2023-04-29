<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plats>
 */
class PlatFactory extends Factory
{
    protected $model = Plat::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            "name"  => $faker->name,
            "price" => $faker->numberBetween($min = 1, $max = 6000),
            "photo" => $faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
