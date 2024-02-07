<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //Get user from the faker object gotten from the user factory
            'user_id' => \App\Models\User::factory(),
            'name' => $this->faker->text(5),
            'description' => $this->faker->sentence(5),
            'completed' => $this->faker->boolean,
        ];
    }
}
