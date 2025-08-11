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
<div class="file-loading">
    <input type="file" id="{{ $id }}" name="{{ $name }}" {{ $multiple ? 'multiple' : '' }}
        {{ $attributes->class(['file-loading', 'is-invalid' => $hasError()]) }} accept="{{ $getAcceptAttr() }}" />
</div>

{{-- Erro de validação --}}
@if ($hasError())
    <div class="invalid-feedback d-block">{{ $dotName }}</div>
@endif

@once
    @push('css')
        <style>
            .icon-4x {
                font-size: 6.5rem;
                width: 6.5rem;
                height: 6.5rem;
            }

            .kv-file-remove,
            .file-upload-indicator {
                display: none;
            }
        </style>
    @endpush
@endonce

@push('scripts')
    <script type="module">
        // Id do componente
        const input = document.getElementById(@json($id));

        $(input).fileinput({
            allowedFileExtensions: @json($extensions), // Extensões aceites
            maxFileCount: @json($maxFileCount), // Quantidade máxima de arquivos aceites
            maxFileSize: @json($maxFileSize), // Tamanho máximo de cada arquivo aceite em KB
            browseClass: "btn btn-sm btn-default", // classe do botão procurar
            mainClass: "d-flex justify-content-end",
            showCaption: false, // O input do arquivo
            showRemove: false, // Botão remover
            showUpload: false, // Botão enviar
            theme: 'bs5',

            initialPreviewAsData: true,
            initialPreview: @json($previewFile),
            initialPreviewConfig: @json($getInitialPreviewConfig()),
            previewFileIconSettings: @json($getPreviewFileIconSettings()), // Configurações de ícones

            fileActionSettings: {
                showRotate: false,
                showRemove: false,
                showUpload: false,
                showZoom: false,
                showDrag: false,
            }
        });
    </script>
@endpush
