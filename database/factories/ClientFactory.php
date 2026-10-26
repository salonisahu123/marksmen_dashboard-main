<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'category' => fake()->randomElement(['key_customer', 'prime_customer', 'oem']),
            'logo' => null,
            'subtitle' => fake()->sentence(3),
            'website_url' => fake()->url(),
            'sort_order' => fake()->numberBetween(1, 20),
            'is_active' => true,
        ];
    }
}
