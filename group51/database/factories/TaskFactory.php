<?php

namespace Database\Factories;

use App\Models\Project;
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
        return [
            'name' => $this->faker->userName(),
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->password(5, 16),
            'is_active' => fake()->boolean(90),
            'last_name' => fake()->lastName(),
            'img' => fake()->imageUrl(format :'png', word : 'senior'),
            'words' => fake()->word(),
            'sentence' => fake()->sentence(2),
            'paragraph' => fake()->paragraph(1),
            'human_w' => fake()->realText(20),
            'non_human_word' => fake()->text(20),
            'nums' => fake()->numberBetween(56, 1354885),
            'this_year' => fake()->dateTimeThisYear(),
            'this_Month' => fake()->dateTimeThisMonth(),
            'project_id' =>  Project::inRandomOrder()->first()->id ,
            'emoji' => fake()->emoji(),

        ];
    }
}
