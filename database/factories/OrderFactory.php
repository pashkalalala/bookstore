<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement(User::pluck('id')),
            'product_id' => fake()->randomElement(Product::pluck('id')),
            'status_id' => fake()->randomElement(Status::pluck('id')),
            'comment' => fake()->realText(250),
        ];
    }
}
