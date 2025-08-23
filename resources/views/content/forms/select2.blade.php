<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#select-fields">
            Campo de entrada de Select com o Select2
        </button>
    </h2>
    <div id="select-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">

            <div class="mb-2">
                <x-form.select2 name="select2" placeholder="sem rótulo (etiqueta) e com tamanho padrão" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-sm" size="sm" placeholder="com tamanho pequeno" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-lg" size="lg" placeholder="com tamanho grande" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-label" label="Rótulo" required
                    placeholder="com rótulo (etiqueta) e com marcação de entrada obrigatória" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-corner" label="Rótulo" corner="com informação adicional" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-icon" label="Rótulo" icon="chat-dots" placeholder="com ícone à direita" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-left-icon" label="Rótulo" left-icon="chat-dots"
                    placeholder="com ícone à esquerda" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-icons" label="Rótulo" icon="chat-dots" left-icon="chat-dots"
                    placeholder="com ícone nos dois lados" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-required-options" label="Rótulo"
                    placeholder="com entrada obrigatória e as opções" required :options="[
                        'desktop' => 'Desktop',
                        'mobile' => 'Mobile',
                        'web' => 'Web',
                    ]" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-selected" label="Rótulo" selected="web" placeholder="com seleção padrão"
                    :options="[
                        'desktop' => 'Desktop',
                        'mobile' => 'Mobile',
                        'web' => 'Web',
                    ]" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-multiple" label="Rótulo" placeholder="com seleção multipla" multiple
                    :options="[
                        'desktop' => 'Desktop',
                        'mobile' => 'Mobile',
                        'web' => 'Web',
                    ]" />
            </div>
            <div class="mb-2">
                <x-form.select2 name="select2-multiple-selected" label="Rótulo"
                    placeholder="com seleção multipla e seleção padrão" multiple :selected="['php', 'laravel']" :options="[
                        'laravel' => 'Laravel',
                        'js' => 'JavaScript',
                        'vue' => 'Vue.js',
                        'php' => 'PHP',
                    ]" />
            </div>
        </div>
    </div>
</div>
