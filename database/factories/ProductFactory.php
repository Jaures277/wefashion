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
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text(300),
            'price' => $this->faker->randomFloat(2, 10,100),
            'reference' => $this->faker->unique()->regexify('[A-Za-z0-9]{15}'),
            'picture' => fake()->numberBetween(1, 10).'.jpg',
            'visibility' => $this->faker->randomElement(['Publie','Non Publie']),
            'state' => $this->faker->randomElement(['En solde','Standard']),
        ];
    }
}
