<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\abonne>
 */
class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->name(),
            "prenom" => $this->faker->name(),
            "age" => rand(21,100),
            "profession"=> str::random(30),
            "rue"=>str::random(30),
            "code_postal"=>str::random(30),
            "ville"=>$this->faker->city(),
            "pays"=>$this->faker->country(),
            "telephone" =>$this->faker->phoneNumber(),
            "email" =>$this->faker->email(),
            "id_motivation" => rand(1,10),
        ];
    }
}
