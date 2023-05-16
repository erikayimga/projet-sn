<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\motivation>
 */
class MotivationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "intitule" => $this->faker->realText($maxNbChars=200, $indexSize=1),
        ];
    }
}
