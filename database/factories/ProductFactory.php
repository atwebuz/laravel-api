<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1,5),
            'name' => [
                "uz" => $this->faker->sentence(2),
                "ru" => $this->faker->sentence(2),
            ],
            'price' => rand(50000, 100000),
            'description' => [
                "uz" => $this->faker->paragraph(5),
                "ru" => $this->faker->paragraph(5),
            ],

        ];
    }
}
