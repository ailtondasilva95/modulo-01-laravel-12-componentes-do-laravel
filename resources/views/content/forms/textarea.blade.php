<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#textarea-fields">
            Campo de entrada de TextArea
        </button>
    </h2>
    <div id="textarea-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="mb-2">
                <x-form.textarea name="field-textarea" placeholder="sem rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-label" label="Label" placeholder="com rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-required" label="Área de texto"
                    placeholder="com entrada obrigatória" required />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-corner" label="Área de texto"
                    placeholder="com informação adicional" corner="Ex: um texto longo" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-icon" label="Área de texto" icon="chat-dots"
                    placeholder="com ícone à esquerda" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-icon-right" label="Área de texto" right-icon="chat-dots"
                    placeholder="com ícone à direita" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-icons" label="Área de texto" icon="chat-dots" right-icon="pen"
                    placeholder="com ícone nos dois lados" />
            </div>
        </div>
    </div>
</div>
