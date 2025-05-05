<div>
    <h4>Nova API</h4>
    <form class="needs-validation @if ($submited) was-validated @endif" novalidate wire:submit="save">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                wire:model="name" required maxlength="64">
            <div class="invalid-feedback">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" id="description" name="description" rows="5" wire:model="description"></textarea>
            <div class="invalid-feedback">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
</div>
