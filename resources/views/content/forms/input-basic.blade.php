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
                <x-form.input name="field-label" label="Label" placeholder="com rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-required" label="Name" placeholder="com entrada obrigatória" required />
            </div>
            <div class="mb-2">
                <x-form.input name="field-corner" label="E-mail" placeholder="com informação adicional"
                    corner="Ex: example@gmail.com" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-icon" label="Username" icon="person" placeholder="com ícone à esquerda" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-icon-right" label="Username" right-icon="person"
                    placeholder="com ícone à direita" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-icons" label="Username" icon="person" right-icon="pen"
                    placeholder="com ícone nos dois lados" />
            </div>
            <div class="mb-2">
                <x-form.input type="password" name="field-password" label="Palavra-passe" placeholder="palavra-passe" />
            </div>
            <div class="mb-2">
                <x-form.input type="search" name="field-search" placeholder="pesquisar" right-icon="search" />
            </div>
            <div class="mb-2">
                <x-form.input type="number" name="field-number" label="Número" placeholder="número" />
            </div>
            <div class="mb-2">
                <x-form.input type="color" name="field-color" label="Cor" placeholder="cor" />
            </div>
        </div>
    </div>
</div>
