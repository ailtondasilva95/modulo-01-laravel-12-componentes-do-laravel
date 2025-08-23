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
                    :extensions="['png', 'jpg']" :preview-image="asset('images/default-avatar.png')" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-1" :preview-image="asset('images/default-avatar.png')" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-2" label="Anexo 2" corner="tamanho máx. 5MB" :maxFileSize="5120" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-3" label="Anexo 3" required :preview-file="[asset('images/avatar.jpg')]" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-4" label="Anexo 4" corner="Extensões (PNG, JPG, JPEG)"
                    :extensions="['png', 'jpg', 'jpeg']" />
            </div>

            <div class="mb-2">
                <x-form.file name="input-file-5" label="Anexo 5" corner="Máximo 10 arquivos)" multiple :maxFileSize="5120"
                    :maxFileCount="10" :extensions="['pdf', 'zip', 'txt', 'jpg', 'docx', 'mp4']" :preview-file="[
                        asset('images/default-avatar.png'),
                        asset('images/avatar.jpg'),
                        // 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf',
                        // 'https://faa.ao/themes/admin/assets/img/logo/faa2.png',
                        // 'http://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/FullMoon2010.jpg/631px-FullMoon2010.jpg',
                        // 'http://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Earth_Eastern_Hemisphere.jpg/600px-Earth_Eastern_Hemisphere.jpg',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SampleTextFile_10kb.txt',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/pdf-sample.pdf',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/small.mp4',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SampleDOCFile_100kb.doc',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SampleXLSFile_38kb.xls',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SamplePPTFile_500kb.ppt',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/multipage_tiff_example.tif',
                        // 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SampleHTML.htm',
                    ]" />
            </div>
        </div>
    </div>
