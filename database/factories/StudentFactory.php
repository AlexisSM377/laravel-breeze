<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'lastname_p' => $this->faker->lastName(),
            'lastname_m' => $this->faker->lastName(),
            'img' => 'studens/'. $this->faker->image('public/storage/students',640, 480, null, false),
            'email' => $this->faker->email(),
            'phone' => $this->faker->bankAccountNumber(),
            'birthdate' => $this->faker->date(),
            'gender' => $this->faker->word(),
            'curp' => $this->faker->swiftBicNumber(),
        ];
    }
}
