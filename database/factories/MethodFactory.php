<?php

namespace Database\Factories;

use App\Models\Method;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Method>
 */
class MethodFactory extends Factory
{
    protected $model = Method::class;

    public function definition(): array
    {
        return [
            'name' => fake()->word(),
        ];
    }
}
