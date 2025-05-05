<?php

namespace App\Livewire\Api;

use App\Models\Api;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SetMethod extends Component
{
    public Api $api;

    public function mount(Api $api): void
    {
        $this->api = $api;
    }

    public function render(): View
    {
        return view('livewire.api.set-method');
    }
}
