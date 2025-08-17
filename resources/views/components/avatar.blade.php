@once
    @push('css')
        <style>
            .avatar {
                justify-content: center;
                vertical-align: middle;
                display: inline-flex;
                align-items: center;
                font-size: 0.875rem;
                border-radius: 50%;
                text-align: center;
                position: relative;
                overflow: hidden;
                font-weight: 600;
                height: 3rem;
                width: 3rem;
            }

            .avatar-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .avatar-xs {
                width: 2rem;
                height: 2rem;
                font-size: 0.65rem;
            }

            .avatar-sm {
                width: 2.5rem;
                height: 2.5rem;
                font-size: 0.75rem;
            }

            .avatar-lg {
                width: 3.5rem;
                height: 3.5rem;
                font-size: 1rem;
            }

            .avatar-xl {
                width: 4rem;
                height: 4rem;
                font-size: 1.25rem;
            }

            .avatar-xxl {
                width: 4.5rem;
                height: 4.5rem;
                font-size: 1.5rem;
            }
        </style>
    @endpush
@endonce
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
