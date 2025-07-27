<span
    {{ $attributes->class([
        'avatar badge border rounded-circle',
        $outline ? "bg-{$type}-subtle text-{$type}-emphasis" : "text-bg-{$type}",
    ]) }}>

    @if ($src)
        <img src="{{ $src }}" alt="{{ $label }}" class="avatar-img img-fluid rounded-circle" />
    @else
        {{ $initials }}
    @endif
</span>
