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

<div class="input-group input-group-{{ $size }}">
    {{-- Ícone esquerdo --}}
    @if ($leftIcon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $leftIcon }}"></i>
        </label>
    @endif

    {{-- Input --}}
    <input id="{{ $id }}" name="{{ $name }}"
        @if ($hasValue()) value="{{ $value }}" @endif
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        {{ $attributes->class(['form-control', 'is-invalid' => $hasError()]) }} />

    {{-- Ícone direito --}}
    @if ($icon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $icon }}"></i>
        </label>
    @endif
</div>

{{-- Erro de validação --}}
@if ($hasError())
    <div class="invalid-feedback d-block">{{ $errors->first($dotName) }}</div>
@endif

@push('scripts')
    <script type="module">
        $(() => {
            flatpickr($(@json("#$id")), {
                plugins: [
                    @if ($type === 'month')
                        new monthSelectPlugin({
                                dateFormat: @json($format)
                            }),
                    @elseif ($type === 'week')
                        new weekSelectPlugin(),
                    @elseif ($type === 'datetime-local' || $type === 'datetime')
                        new confirmDatePlugin({
                                confirmText: @json(__('flatpickr.confirm')),
                                confirmIcon: '',
                            }),
                    @endif
                ],
                weekNumbers: {{ $type === 'week' ? 'true' : 'false' }},
                noCalendar: {{ $noCalendar() ? 'true' : 'false' }},
                enableTime: {{ $needsTime() ? 'true' : 'false' }},
                dateFormat: @json($format),
            });
        });
    </script>
@endPush
