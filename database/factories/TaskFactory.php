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
    public function definition(): array
    {
        $status = $this->faker->randomElement(['pending', 'in_progress', 'completed']);

        return [
            'title' => $this->faker->title(),
            'status' => $status,
            'description' => $this->faker->name(),
            'due_date' => $this->faker->dateTimeThisDecade()
        ];

    }
}
