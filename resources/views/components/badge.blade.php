<span
    {{ $attributes->class([
        'badge border',
        'rounded-pill' => $pill,
        'rounded-circle py-2' => $circle,
        $outline ? "bg-{$type}-subtle text-{$type}-emphasis" : "text-bg-{$type}",
    ]) }}>

    @isset($label)
        {{ __($label) }}
    @endisset

    @isset($icon)
        <i class="bi bi-{{ $icon }}"></i>
    @endisset

    {{ $slot }}
</span>
