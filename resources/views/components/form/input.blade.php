@php
    // Dot notation para erros e old
    $dotName = preg_replace('/\[(\d+)?\]/', '.$1', $name);
    $dotName = str_replace(['[', ']'], ['.', ''], $dotName);

    // ID único
    $id = $dotName . '-' . uniqid();

    // Valor antigo ou padrão
    $inputValue = old($dotName, $value);

    // Verifica máscaras
    $hasStaticMask = filled($mask);
    $hasDynamicMask = $attributes->has('mask:dynamic');

    // Ícones
    $hasLeftIcon = !!$icon;
    $hasRightIcon = !!$rightIcon;
    $isPassword = $type === 'password';

    // Marca de campo obrigatório
    $requiredMark = $required
        ? '<sup class="text-danger" data-bs-toggle="tooltip" title="Campo obrigatório">*</sup>'
        : '';
@endphp

@if ($label)
    <div class="d-flex justify-content-between">

        <label for="{{ $id }}" class="form-label mb-0">
            {{ $label }}{!! $requiredMark !!}
        </label>

        @if ($corner)
            <small class="text-muted form-text">{{ $corner }}</small>
        @endif
    </div>
@endif

<div class="input-group" x-data="{ show: false }">
    {{-- Ícone esquerdo --}}
    @if ($hasLeftIcon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $icon }}"></i>
        </label>
    @endif

    {{-- Input --}}
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $dotName }}"
        placeholder="{{ $placeholder }}" @if ($inputValue && !$isPassword) value="{{ $inputValue }}" @endif
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($dotName)])->except(['mask', 'mask:dynamic']) }}
        @if ($isPassword) :type="show ? 'text' : 'password'" autocomplete="off" @endif
        @if ($hasStaticMask || $hasDynamicMask) x-data @endif
        @if ($hasStaticMask) x-mask="{{ $mask }}" @endif
        @if ($hasDynamicMask) x-mask:dynamic="{{ $attributes->get('mask:dynamic') }}" @endif />

    {{-- Toggle de senha (apenas se for password) --}}
    @if ($isPassword)
        <label class="input-group-text" for="{{ $id }}" x-on:click="show = !show" style="cursor: pointer">
            <i :class="show ? 'bi bi-eye-slash' : 'bi bi-eye'"></i>
        </label>
    @endif

    {{-- Ícone direito --}}
    @if ($hasRightIcon && !$isPassword)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $rightIcon }}"></i>
        </label>
    @endif

    {{-- Erro de validação --}}
    @error($dotName)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
