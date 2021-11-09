<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->text(30),
            'slug' => $this->faker->slug(),
            'summary' => $this->faker->text(),
            'description' => $this->faker->text(),
            'condition' => ['default', 'new', 'hot'][rand(0, 2)],
            'status' => ['active', 'inactive'][rand(0, 1)],
        ];
    }
}
