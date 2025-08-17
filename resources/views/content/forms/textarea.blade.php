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
                <x-form.textarea name="field-textarea-label-required" label="Rótulo" required
                    placeholder="com rótulo (etiqueta) e com marcação de entrada obrigatória" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-corner" label="Rótulo" corner="com informação adicional" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-icon" label="Rótulo" icon="chat-dots"
                    placeholder="com ícone à direita" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-icon-left" label="Rótulo" left-icon="chat-dots"
                    placeholder="com ícone à esquerda" />
            </div>
            <div class="mb-2">
                <x-form.textarea name="field-textarea-icons" label="Rótulo" icon="chat-dots" left-icon="pen"
                    placeholder="com ícone nos dois lados" />
            </div>
        </div>
    </div>
</div>
