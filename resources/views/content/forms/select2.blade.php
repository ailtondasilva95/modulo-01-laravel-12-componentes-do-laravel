<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#select-fields">
            Campo de entrada de Select com o Select2
        </button>
    </h2>
    <div id="select-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">

            <div class="mb-2">
                <x-form.select2 name="select2" placeholder="sem rótulo (etiqueta)" :options="[
                    'web' => 'Web',
                    'mobile' => 'Mobile',
                    'desktop' => 'Desktop',
                ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-label" label="Categoria" placeholder="com rótulo (etiqueta)"
                    :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-required" label="Categoria" placeholder="com entrada obrigatória" required
                    :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-required" label="Categoria" corner="seleção obrigatória"
                    placeholder="com informação adicional" :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-icon" label="Categoria" icon="chat-dots"
                    placeholder="com ícone à esquerda" :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-right-icon" label="Categoria" right-icon="chat-dots"
                    placeholder="com ícone à direita" :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-right-icon" label="Categoria" icon="chat-dots" right-icon="chat-dots"
                    placeholder="com ícone nos dois lados" :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-selected" label="Categoria" selected="web"
                    placeholder="com seleção padrão" :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-multiple[]" label="Categoria" placeholder="com seleção multipla" multiple
                    :options="[
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ]" />
            </div>

            <div class="mb-2">
                <x-form.select2 name="select2-multiple-selected[]" label="Categoria"
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
