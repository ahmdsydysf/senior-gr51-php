<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => fake()->name(),
                'code' => fake()->numberBetween(1, 1000),
                'description' => fake()->sentence(25),
                'status' => fake()->randomElement(['actv' ,'not_actv']),
                'parent_category_id' => Category::inRandomOrder()?->first()?->id ,
        ];
    }
}
