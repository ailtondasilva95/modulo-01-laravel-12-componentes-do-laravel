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
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $icon }}"></i>
        </label>
    @endif

    {{-- Input --}}
    <input id="{{ $id }}" name="{{ $name }}"
        @if ($hasValue()) value="{{ $value }}" @endif
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        {{ $attributes->class(['form-control', 'is-invalid' => $hasError()]) }} />

    {{-- Ícone direito --}}
    @if ($rightIcon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $rightIcon }}"></i>
        </label>
    @endif

    {{-- Erro de validação --}}
    @if ($hasError())
        <div class="invalid-feedback d-block">{{ $dotName }}</div>
    @endif
</div>

@push('scripts')
    <script type="module">
        // Id do componente
        const input = document.getElementById(@json($id));

        flatpickr(input, {
            plugins: [
                @if ($type === 'month')
                    new monthSelectPlugin({
                            dateFormat: "{{ $format }}"
                        }),
                @elseif ($type === 'week')
                    new weekSelectPlugin({}),
                @elseif ($type === 'datetime-local' || $type === 'datetime')
                    new confirmDatePlugin({
                            confirmText: "{{ __('flatpickr.confirm') }}",
                            confirmIcon: '',
                        }),
                @endif
            ],
            weekNumbers: {{ $type === 'week' ? 'true' : 'false' }},
            noCalendar: {{ $noCalendar() ? 'true' : 'false' }},
            enableTime: {{ $needsTime() ? 'true' : 'false' }},
            dateFormat: "{{ $format }}",
        });
    </script>
@endPush
