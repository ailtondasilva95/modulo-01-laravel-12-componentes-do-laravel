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

{{-- Input --}}
<input type="file" id="{{ $id }}" name="{{ $name }}" accept="{{ $getAcceptAttr() }}"
    {{ $attributes->class(['is-invalid' => $hasError()]) }} />

{{-- Erro de validação --}}
@if ($hasError())
    <div class="invalid-feedback d-block">{{ $errors->first($dotName) }}</div>
@endif

@once
    @push('css')
        <style>
            .kv-file-remove,
            .file-upload-indicator {
                display: none;
            }
        </style>
    @endpush
@endonce

@push('scripts')
    <script type="module">
        $(() => {
            $(@json("#$id")).fileinput({
                // Imagem inicial (avatar padrão)
                initialPreview: @json($previewImage) ? '<img src="' + @json($previewImage) +
                    '">' : [],

                allowedFileExtensions: @json($extensions), // Extensões aceites
                maxFileSize: @json($maxFileSize), // Tamanho máximo de cada arquivo aceite em KB
                browseClass: "btn btn-sm btn-default", // classe do botão procurar
                mainClass: "d-flex justify-content-end",
                initialPreviewFileType: 'image',
                showCaption: false, // O input do arquivo
                showRemove: false, // Botão remover
                showUpload: false, // Botão enviar

                fileActionSettings: {
                    showRotate: false,
                    showRemove: false,
                    showUpload: false,
                    showZoom: false,
                    showDrag: false,
                },
            });
        });
    </script>
@endpush
