<button {{ $attributes->class(["btn {$class}", 'rounded-pill' => $pill, 'rounded-circle py-2' => $circle]) }}>
    @isset($label)
        {{ __($label) }}
    @endisset

    @isset($icon)
        <i class="bi bi-{{ $icon }}"></i>
    @endisset

    {{ $slot }}
</button>
