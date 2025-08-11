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

<div class="input-group">

    {{-- Ícone esquerdo --}}
    @if ($icon)
        <span class="input-group-text">
            <i class="bi bi-{{ $icon }}"></i>
        </span>
    @endif

    {{-- Select com o select2 --}}
    <select name="{{ $name }}" id="{{ $id }}" {{ $multiple ? 'multiple' : '' }}
        {{ $attributes->class(['form-select select2', 'is-invalid' => $hasError()]) }}
        data-placeholder="{{ $placeholder }}">

        <option></option>

        @foreach ($options as $value => $labelText)
            <option value="{{ $value }}" @selected($isSelected((string) $value))>
                {{ $labelText }}
            </option>
        @endforeach
    </select>

    {{-- Ícone direito --}}
    @if ($rightIcon)
        <span class="input-group-text">
            <i class="bi bi-{{ $rightIcon }}"></i>
        </span>
    @endif

    {{-- Erro de validação --}}
    @if ($hasError())
        <div class="invalid-feedback d-block">{{ $dotName }}</div>
    @endif
</div>

@pushOnce('scripts')
    <script type="module">
        $(".select2").select2({
            width: $(this).data("width") ? $(this).data("width") : $(this).hasClass("w-100") ? "100%" : "style",
            placeholder: $(this).data("placeholder"),
            theme: "bootstrap-5",
            language: {
                noResults: function() {
                    return "{{ __('select2.noResults') }}";
                },
                searching: function() {
                    return "{{ __('select2.searching') }}";
                }
            }
        });
    </script>
@endPushOnce
