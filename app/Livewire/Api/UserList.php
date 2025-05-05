<?php

namespace App\Livewire\Api;

use App\Models\Api;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UserList extends Component
{
    protected $listeners = ['refreshUserList' => '$refresh'];

    public function render(): View
    {
        return view('livewire.api.user-list', [
            'apis' => Api::whereUserId(auth()->id())->get(),
        ]);
    }
}
