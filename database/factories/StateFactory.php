<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->state(),
            'mero' => [
                'hello' => Str::random(4),
                'haha' => [
                    'hehe' => Str::random(4),
                    'huhu' => Str::random(4),
                ],
                'jay' => Str::random(4),
            ],
            'abbr' => $this->faker->stateAbbr()
        ];
    }
}
