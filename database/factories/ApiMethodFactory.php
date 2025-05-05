<?php

namespace Database\Factories;

use App\Models\Api;
use App\Models\ApiMethod;
use App\Models\Method;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ApiMethod>
 */
class ApiMethodFactory extends Factory
{
    protected $model = ApiMethod::class;

    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),
            'api_id' => Api::factory(),
            'method_id' => Method::factory(),
            'output' => json_encode(Api::factory()->make()),
        ];
    }
}
