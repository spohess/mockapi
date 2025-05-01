<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Navbar extends Component
{
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->to(route('login'));
    }
}
