<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Office;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Office>
 */
class OfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Office::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'building_number' => $this->faker->buildingNumber(),
        ];
    }
}
