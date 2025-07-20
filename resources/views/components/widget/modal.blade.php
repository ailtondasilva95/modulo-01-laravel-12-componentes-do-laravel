@props([
    'id' => 'modalDefault',
    'title' => 'Modal title',
    'static' => false, // Define se o modal é estático
    'centered' => false, // Define se o modal é centralizado verticalmente
    'footer' => null, // Rodapé personalizado
])

<div class="modal fade" id="{{ $id }}" tabindex="-1"
    @if ($static) data-bs-backdrop="static" data-bs-keyboard="false" @endif
    aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog @if ($centered) modal-dialog-centered @endif">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="{{ $id }}Label">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @if ($footer)
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
