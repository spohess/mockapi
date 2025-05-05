<?php

namespace Database\Seeders;

use App\Models\Method;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    public function run(): void
    {
        Method::factory()->create(['name' => 'GET']);
        Method::factory()->create(['name' => 'POST']);
        Method::factory()->create(['name' => 'PUT']);
        Method::factory()->create(['name' => 'PATCH']);
        Method::factory()->create(['name' => 'DELETE']);
        Method::factory()->create(['name' => 'HEAD']);
        Method::factory()->create(['name' => 'OPTIONS']);
    }
}
