<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => '1',
            'category_id' => Category::all()->random()->id,
            'name' => fake()->name(),
            'amount' => fake()->numberBetween('1', '2000'),
            'type' => fake()->randomElement(['expense', 'income']),
            'created_at' => fake()->dateTimeBetween('-3 months', 'now')
        ];
    }
}
