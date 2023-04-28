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
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 0,50),
            'reference' => $this->faker->word(),
            'picture' => $this->faker->word(),
            'visibility' => $this->faker->randomElement(['Publie','Non Publie']),
            'state' => $this->faker->randomElement(['On Sale','Standard']),
        ];
    }
}
