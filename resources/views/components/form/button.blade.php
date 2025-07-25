@props(['label' => '', 'icon' => null, 'rounded' => false, 'spinner' => false])

<button {{ $attributes->class(['btn', 'rounded-pill' => $rounded]) }}>

    @if ($label)
        {{ __($label) }}
    @endif

    @if ($icon)
        <i class="{{ $icon }}"></i>
    @endif

</button>
