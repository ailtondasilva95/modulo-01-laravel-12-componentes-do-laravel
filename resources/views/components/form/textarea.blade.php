@if ($label)
    <div class="d-flex justify-content-between">

        <label for="{{ $id }}" class="form-label mb-0">{{ $label }}{!! $requiredMark() !!}</label>

        @if ($corner)
            <small class="text-muted form-text">{{ $corner }}</small>
        @endif
    </div>
@endif

<div class="input-group">
    {{-- Ícone esquerdo --}}
    @if ($icon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $icon }}"></i>
        </label>
    @endif

    {{-- Textarea --}}
    <textarea id="{{ $id }}" name="{{ $dotName }}" rows="{{ $rows }}"
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        {{ $attributes->class(['form-control', 'is-invalid' => $hasError()]) }}>{{ $value }}</textarea>

    {{-- Ícone direito --}}
    @if ($rightIcon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $rightIcon }}"></i>
        </label>
    @endif

    {{-- Erro de validação --}}
    @error($hasError())
        <div class="invalid-feedback d-block">{{ $getErrorMessage() }}</div>
    @enderror
</div>
