@if ($label)
    <label class="form-label">{{ $label }}{!! $requiredMark() !!}</label>
@endif

<div>
    @foreach ($options as $optionValue => $optionLabel)
        <div class="form-check {{ $switch ? 'form-switch' : '' }} {{ $inline ? 'form-check-inline' : '' }}">
            {{-- Input Checkbox --}}
            <input type="checkbox" id="{{ $getOptionId($optionValue) }}" name="{{ $name }}"
                value="{{ $optionValue }}" style="cursor: pointer" @checked($isChecked($optionValue))
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
    @error($hasError())
        <div class="invalid-feedback d-block">{{ $getErrorMessage() }}</div>
    @enderror
</div>
