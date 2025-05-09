<?php

namespace App\Services\Recaptcha;

use App\Services\ServiceInterface;
use Illuminate\Support\Facades\Http;

class ValidateRequestService implements ServiceInterface
{
    public function __invoke(): bool
    {
        if (!config('services.recaptcha.enable')) {
            return true;
        }
        $url = config('services.recaptcha.uri');
        $data = [
            'secret' => config('services.recaptcha.secret'),
            'response' => request()->input('g-recaptcha-response'),
        ];

        $response = Http::asForm()->post($url, $data);
        $result = $response->json();

        return $result['success'] ?? false;
    }
}
