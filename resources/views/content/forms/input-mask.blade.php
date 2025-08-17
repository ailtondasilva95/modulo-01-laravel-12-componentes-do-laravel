<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#mask-input-fields">
            Campo de entrada com máscara usando Alpine e o seu plugin (alpinejs/mask)
        </button>
    </h2>
    <div id="mask-input-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="mb-2">
                <x-form.input name="field-mask-phone" label="Telefone" icon="telephone"
                    corner="Ex: +244 999 999 999" placeholder="com máscara para telefone" mask="+244 999 999 999" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-mask-identity" label="Bilhete de Idantidade" icon="person-vcard"
                    corner="Ex: 999999999XX999" placeholder="com máscara para bilhete" mask="999999999aa999" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-mask-money" label="Dinheiro" icon="currency-dollar"
                    corner="Ex: 1.000,00" placeholder="com máscara para dinheiro" mask:dynamic="$money($input, ',')" />
            </div>
            <div class="mb-2">
                <x-form.input name="field-mask-number" label="Número" corner="Ex: 1 000,00"
                    placeholder="com máscara para número com ponto flutuante" mask:dynamic="$money($input, ',', ' ')" />
            </div>
        </div>
    </div>
</div>
