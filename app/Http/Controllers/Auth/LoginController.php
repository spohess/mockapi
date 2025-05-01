<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Services\Recaptcha\ValidateRequestService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): RedirectResponse
    {
        if (!app()->make(ValidateRequestService::class)()) {
            return back()
                ->withErrors(['fail-login' => 'Desafio não cumprido, tente novamente'])
                ->withInput($request->except('password'));
        }

        if (Auth::attemptWhen(
            $request->validated(),
            function (User $user) {
                return $user->is_active;
            }
        )) {
            $request->session()->regenerate();

            return redirect(route('home'));
        }

        return back()
            ->withErrors(['fail-login' => 'Credenciais inválidas'])
            ->withInput($request->except('password'));
    }
}
