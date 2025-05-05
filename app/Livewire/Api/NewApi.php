<?php

namespace App\Livewire\Api;

use App\Actions\CreateApiAction;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportEvents\HandlesEvents;

class NewApi extends Component
{
    use HandlesEvents;

    #[Rule('required', message: 'Campo Nome é obrigatório')]
    #[Rule('max:64', message: 'Campo Nome é muito grande, no máximo 64 caracteres')]
    public string $name = '';

    public string $description = '';

    public bool $submited = false;

    /**
     * @throws BindingResolutionException
     */
    public function save(): void
    {
        $this->submited = true;
        $this->validate();

        app()->make(CreateApiAction::class, [
            'name' => $this->name,
            'userId' => auth()->id(),
            'description' => $this->description,
        ])();

        $this->name = '';
        $this->description = '';
        $this->submited = false;

        $this->dispatch('refreshUserList');
    }
}
