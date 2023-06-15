<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cologne' => $this->fake(),
            'cp' => $this->fake()->postcode(),
            'street' => $this->fake()->streetName(),
            'no_ext' => $this->fake()->buildingNumber(),
            'state_id' => $this->fake()->state(),
            'city_id' => $this->fake()->citySuffix(),
        ];
    }
}
