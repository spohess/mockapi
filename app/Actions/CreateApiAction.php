<?php

namespace App\Actions;

use App\Models\Api;
use Illuminate\Support\Str;

class CreateApiAction implements ActionInterface
{
    public function __construct(
        private Api $api,
        private readonly int $userId,
        private readonly string $name,
        private readonly ?string $description = null
    ) {}

    public function __invoke(): Api
    {
        $this->api->fill([
            'uuid' => Str::uuid(),
            'user_id' => $this->userId,
            'name' => $this->name,
            'hash' => hash('sha256', Str::random()),
            'description' => $this->description,
        ]);

        $this->api->save();

        return $this->api;
    }
}
