<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'leader_id' => $this->faker->numberBetween(1,5),
            'owner' => $this->faker->randomElement(['YHC','BCTI','Digitaliz','Hafecs','Pemuda Bakti Banua']),
            'progress' => $this->faker->numberBetween(0,100),
            'description' => $this->faker->paragraph(40),
            'deadline' => $this->faker->dateTime(),            
        ];
    }
}
