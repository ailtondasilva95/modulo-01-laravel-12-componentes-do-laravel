<div class="alert alert-{{ $type }} alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    @if ($title || $icon)
        <h5 class="alert-heading">
            @if ($icon)
                <i class="bi bi-{{ $icon }}"></i>
            @endif
            {{ $title }}
        </h5>
        <hr class="mt-0">
    @endif

    {{ $slot }}

</div>
