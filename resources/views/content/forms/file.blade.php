<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#file-pond-fields">
            Campo de entrada file para Upload com (Bootstrap-Fileinput)
        </button>
    </h2>
    <div id="file-pond-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="mb-2">
                <x-form.file-avatar name="input-avatar-1" label="Foto de Perfil" />
            </div>

            <div class="mb-2">
                <x-form.file-avatar name="input-avatar-2" label="Foto de Perfil" corner="escolha uma imagem" required
                    :extensions="['png', 'jpg']" />
            </div>

            <div class="mb-2">
                <x-form.file-avatar name="input-avatar-3" label="Foto de Perfil" corner="Extensões (PNG, JPG, JPEG)"
                    required :extensions="['png', 'jpg', 'jpeg']" />
            </div>

            <div class="mb-2">
                <x-form.file-avatar name="input-avatar-4" label="Foto de Perfil" corner="escolha uma imagem" required
                    :extensions="['png', 'jpg']" :preview-image="Storage::url('images/default-avatar.png')" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-1" :preview-image="Storage::url('images/default-avatar.png')" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-2" label="Anexo 2" corner="tamanho máx. 5MB" :maxFileSize="5120" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-3" label="Anexo 3" required :preview-file="[Storage::url('images/avatar.jpg')]" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-4" label="Anexo 4" corner="Extensões (PNG, JPG, JPEG)"
                    :extensions="['png', 'jpg', 'jpeg']" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-5" label="Anexo 5" corner="Máximo 10 arquivos)" multiple :maxFileSize="5120"
                    :maxFileCount="10" :extensions="['pdf', 'zip', 'txt', 'jpg', 'docx', 'mp4']" :preview-file="[
                        Storage::url('images/default-avatar.png'),
                        Storage::url('images/avatar.jpg'),
                    ]" />
            </div>
        </div>
    </div>
