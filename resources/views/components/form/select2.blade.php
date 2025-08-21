@once
    @push('css')
        <style>
            /* Ajustes específicos para o Select2 quando o tema do Bootstrap estiver no modo escuro */
            [data-bs-theme="dark"] .select2-container--bootstrap-5 {

                /* Área de seleção */
                .select2-selection {
                    background-color: var(--bs-body-bg);
                    color: var(--bs-body-color);
                    border-color: var(--bs-border-color);
                }

                /* Dropdown de opções */
                .select2-dropdown {
                    background-color: var(--bs-body-bg);
                    color: var(--bs-body-color);
                    border-color: var(--bs-border-color);
                }

                /* Campo de pesquisa no dropdown */
                .select2-search__field {
                    background-color: var(--bs-body-bg);
                    color: var(--bs-light) !important;
                    border-color: var(--bs-border-color);
                }

                /* Opções */
                .select2-results__option {
                    background-color: var(--bs-body-bg);
                    color: var(--bs-body-color);
                }

                /* Estilo cor do placeholder */
                .select2-selection__placeholder,
                .select2-search__field::placeholder {
                    color: #adb5bd !important;
                }

                .select2-dropdown .select2-search .select2-search__field {
                    background: var(--bs-dark) !important;
                    color: var(--bs-light) !important;
                }

                /* Valor selecionado */
                .select2-selection__rendered {
                    color: var(--bs-light) !important;
                }

                .select2-selection--multiple {
                    background: var(--bs-dark) !important;
                    color: var(--bs-light) !important;
                }

                /* Etiquetas em múltiplos (tags) */
                .select2-selection--multiple .select2-selection__rendered .select2-selection__choice {
                    background-color: transparent !important;
                    color: #f8f9fa;
                    border: 1px solid #e9ecef;
                }
            }
        </style>
    @endpush
@endonce

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
    @if ($leftIcon)
        <label class="input-group-text" for="{{ $id }}">
            <i class="bi bi-{{ $leftIcon }}"></i>
        </label>
    @endif

    {{-- Select com o select2 --}}
    <select name="{{ $name }}" id="{{ $id }}" {{ $multiple ? 'multiple' : '' }}
        {{ $attributes->class(["form-select select2 form-select-{$size}", 'is-invalid' => $hasError()]) }}
        data-placeholder="{{ $placeholder }}">

        <option></option>

        @foreach ($options as $value => $labelText)
            <option value="{{ $value }}" @selected($isSelected((string) $value))>
                {{ $labelText }}
            </option>
        @endforeach
    </select>

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

@pushOnce('scripts')
    <script type="module">
        $(() => {
            $(".select2").each(function() {
                $(this).select2({
                    width: $(this).data("width") ?
                        $(this).data("width") : $(this).hasClass("w-100") ? "100%" : "style",
                    placeholder: $(this).data("placeholder"),
                    theme: "bootstrap-5",
                    language: {
                        noResults: () => @json(__('No results found')),
                        searching: () => @json(__('Searching…'))
                    }
                });
            });
        });
    </script>
@endPushOnce
