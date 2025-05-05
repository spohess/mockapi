<div>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Nome</th>
            <th>URI</th>
            <th>Criação</th>
            <th>Configurar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($apis as $api)
            <tr wire:key="{{ $api->id }}">
                <td>{{ $api->name }}</td>
                <td>{{ $api->hash }}</td>
                <td>{{ $api->created_at->format('d/m/Y H:i') }}</td>
                <td class="text-center">
                    <a href="#" data-bs-toggle="modal"
                       data-bs-target="#apiModal{{ $api->id }}"
                       class="text-dark">
                        <i class="bi bi-search"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @foreach($apis as $api)
        <div class="modal fade" id="apiModal{{ $api->id }}" tabindex="-1"
             aria-labelledby="apiModalLabel{{ $api->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="apiModalLabel{{ $api->id }}">Configurar
                            API: {{ $api->name }}</h5>
                        <button type="button" class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @livewire('api.set-method', ['api' => $api], key('api-method-' . $api->id))
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
