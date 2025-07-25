@props(['type', 'label' => '', 'icon' => null, 'rounded' => false, 'outline' => false])

<span
    {{ $attributes->class([
        'badge border',
        $outline ? "bg-{$type}-subtle text-{$type}-emphasis" : "text-bg-{$type}",
        'rounded-pill' => $rounded,
    ]) }}>

     @if($label)
        {{ __($label) }}
    @endif

     @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
</span>
