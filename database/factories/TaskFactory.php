<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_id' => fake()->numberBetween(1,50),
            'name' => fake()->name(),
            'description' => fake()->text(),
            'status' => fake()->randomElement(['PENDING','ON PROGRESS','DONE']),
        ];
    }
}
