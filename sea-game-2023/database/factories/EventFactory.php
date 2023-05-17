<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sport_Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->unique()->sentence(),
            'type' => $this->faker->unique()->sentence(),
            'available_ticket' => $this->faker->numberBetween(1, 10),
            'stadium_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
