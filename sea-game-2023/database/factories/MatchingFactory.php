<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Request;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matching>
 */
class MatchingFactory extends Factory
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
            'title' => $this->faker->unique()->sentence(),
            'time' => $this->faker->time('h:i'),
            'event_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
