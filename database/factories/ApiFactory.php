<?php

namespace Database\Factories;

use App\Models\Api;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Api>
 */
class ApiFactory extends Factory
{
    protected $model = Api::class;

    public function definition(): array
    {
        return [
            'uuid' => fake()->unique()->uuid(),
            'user_id' => User::factory(),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'hash' => fake()->sha256(),
            'active' => fake()->boolean(),
        ];
    }
}
