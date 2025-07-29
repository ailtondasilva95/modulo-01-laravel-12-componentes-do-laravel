@if ($label)
    <label class="form-label">{{ $label }}{!! $requiredMark() !!}</label>
@endif

<div class="radio-group {{ $inline ? 'radio-inline' : '' }}">

    @foreach ($options as $optionValue => $optionLabel)
        <div class="form-check {{ $inline ? 'form-check-inline' : '' }}">

            <input type="radio" id="{{ $getOptionId($optionValue) }}" name="{{ $dotName }}"
                value="{{ $optionValue }}" style="cursor: pointer" @checked($isChecked($optionValue))
                {{ $attributes->class(['form-check-input', 'is-invalid' => $hasError()]) }} />

            <label class="form-check-label" for="{{ $getOptionId($optionValue) }}" style="cursor: pointer">
                {{ $optionLabel }}
            </label>
        </div>
    @endforeach

</div>

@if ($helpText)
    <div class="form-text">
        <i class="bi bi-info-circle"></i> {{ $helpText }}
    </div>
@endif

@if ($hasError())
    <div class="invalid-feedback d-block">
        <i class="bi bi-exclamation-circle"></i> {{ $getErrorMessage() }}
    </div>
@endif
