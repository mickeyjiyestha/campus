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
            'slug' => $this->faker->slug(),
            'First_Name' => $this->faker->firstName(),
            'Last_Name' => $this->faker->lastName(),
            'Phone' => $this->faker->phoneNumber(),
            'Address' => $this->faker->address(),
            'Birth' => $this->faker->dateTime(),
            'Mother_Name' => $this->faker->name(),
            'Father_Name' => $this->faker->name(),
            'Religion' => 'Hindu'
        ];
    }
}