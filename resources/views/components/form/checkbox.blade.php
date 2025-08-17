@if ($label)
    <label class="form-label mb-0">
        {{ $label }}{!! $requiredMark() !!}
    </label>
@endif

<div>
    @foreach ($options as $optionValue => $optionLabel)
        <div class="form-check {{ $switch ? 'form-switch' : '' }} {{ $inline ? 'form-check-inline' : '' }}">
            {{-- Input Checkbox --}}
            <input type="checkbox" id="{{ $getOptionId($optionValue) }}" name="{{ $name }}"
                value="{{ $optionValue }}" @checked($isChecked($optionValue)) style="cursor: pointer"
                {{ $attributes->class(['form-check-input', 'is-invalid' => $hasError()]) }}>
            {{-- Label do Input --}}
            <label class="form-check-label" for="{{ $getOptionId($optionValue) }}" style="cursor: pointer">
                {{ $optionLabel }}
            </label>
        </div>
    @endforeach

    {{-- Texto de ajuda --}}
    @if ($helpText)
        <div class="form-text"><i class="bi bi-info-circle"></i> {{ $helpText }}</div>
    @endif

    {{-- Erro de validação --}}
    @if ($hasError())
        <div class="invalid-feedback d-block">{{ $errors->first($dotName) }}</div>
    @endif
</div>
