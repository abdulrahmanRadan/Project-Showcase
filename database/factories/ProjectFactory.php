<?php

namespace Database\Factories;
use App\Models\Project;
use App\Models\Category; 

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->catchPhrase(),
            'description'=> fake()->text(),
            'category_id' => Category::factory(),
            'status' =>fake()->randomElement(['completed', 'in_progress', 'on_hold'])
        ];
    }
}