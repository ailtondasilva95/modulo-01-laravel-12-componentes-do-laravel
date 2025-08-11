@if ($label)
    <div class="d-flex justify-content-between">

        <label for="{{ $id }}" class="form-label mb-0">
            {{ $label }}{!! $requiredMark() !!}
        </label>

        @if ($corner)
            <small class="text-muted form-text">{{ $corner }}</small>
        @endif
    </div>
@endif

<div class="input-group" @if ($isPasswordType()) x-data="{ show: false }" @endif>
    {{-- Ícone esquerdo --}}
    @if ($icon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $icon }}"></i>
        </label>
    @endif

    {{-- Input --}}
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
        @if ($hasStaticMask()) x-data x-mask="{{ $mask }}" @endif
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($hasValue() && !$isPasswordType()) value="{{ $value }}" @endif
        @if ($isPasswordType()) :type="show ? 'text' : 'password'" autocomplete="off" @endif
        @if ($hasDynamicMask()) x-data x-mask:dynamic="{{ $attributes->get('mask:dynamic') }}" @endif
        {{ $attributes->class(['form-control', 'form-control-color' => $isColor(), 'is-invalid' => $hasError()])->except(['mask', 'mask:dynamic']) }} />

    {{-- Ícone direito --}}
    @if ($rightIcon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $rightIcon }}"></i>
        </label>
    @endif

    {{-- Toggle de senha (apenas se for password) --}}
    @if ($isPasswordType())
        <label class="input-group-text" for="{{ $id }}" x-on:click="show = !show" style="cursor: pointer">
            <i :class="show ? 'bi bi-eye' : 'bi bi-eye-slash'"></i>
        </label>
    @endif

    {{-- Erro de validação --}}
    @if ($hasError())
        <div class="invalid-feedback d-block">{{ $dotName }}</div>
    @endif
</div>
