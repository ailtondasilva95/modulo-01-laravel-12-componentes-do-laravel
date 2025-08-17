<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#basic-input-fields">
            Campo de entrada básica
        </button>
    </h2>
    <div id="basic-input-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="mb-2">
                <x-form.input name="field" placeholder="sem rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-sm" size="sm" placeholder="com tamanho pequeno" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-lg" size="lg" placeholder="com tamanho grande" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-label-required" label="Rótulo" required
                    placeholder="com rótulo (etiqueta) e com marcação de entrada obrigatória" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-corner" label="Rótulo" corner="com informação adicional" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-icon" label="Rótulo" icon="person" placeholder="com ícone à direita" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-icon-left" label="Rótulo" left-icon="person"
                    placeholder="com ícone à esquerda" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-icons" label="Rótulo" icon="person" left-icon="pen"
                    placeholder="com ícone nos dois lados" />
            </div>
            <div class="mb-2">
                <x-form.input type="password" name="field-password" label="Rótulo" placeholder="palavra-passe" />
            </div>
            <div class="mb-2">
                <x-form.input type="search" name="field-search" placeholder="pesquisar" icon="search" />
            </div>
            <div class="mb-2">
                <x-form.input type="number" name="field-number" label="Rótulo" placeholder="número" />
            </div>
            <div class="mb-2">
                <x-form.input type="color" name="field-color" label="Rótulo" placeholder="cor" value="#0000FF" />
            </div>
        </div>
    </div>
</div>
