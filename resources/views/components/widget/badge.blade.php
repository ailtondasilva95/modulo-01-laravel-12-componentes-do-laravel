@props([
    'type',
    'rounded' => false,
    'outline' => false,
])
<span
    {{ $attributes->class([
        'badge border',
        $outline ? "bg-{$type}-subtle text-{$type}-emphasis" : "text-bg-{$type}",
        $rounded ? 'rounded-pill' : '',
    ]) }}>
    {{ $slot }}
</span>
