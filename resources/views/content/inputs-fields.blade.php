<div class="accordion mb-2" id="inputs-fields">
    {{-- Campo de entrada básica --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#basic-input-fields">
                Campo de entrada básica
            </button>
        </h2>
        <div id="basic-input-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
            <div class="accordion-body">
                <div class="mb-2">
                    <x-form.input name="no-label" placeholder="sem rótulo (etiqueta) e com entrada opcional" />
                </div>
                <div class="mb-2">
                    <x-form.input name="yes-label" label="Label"
                        placeholder="com rótulo (etiqueta) e com entrada opcional" />
                </div>
                <div class="mb-2">
                    <x-form.input name="yes-required" label="Name" placeholder="com entrada obrigatória" required />
                </div>
                <div class="mb-2">
                    <x-form.input name="yes-corner" label="E-mail" placeholder="com canto de exemplo"
                        corner="Ex: example@gmail.com" />
                </div>
                <div class="mb-2">
                    <x-form.input name="icon-left" label="Username" icon="person" placeholder="com ícone à esquerda" />
                </div>
                <div class="mb-2">
                    <x-form.input name="icon-right" label="Username" right-icon="person"
                        placeholder="com ícone à direita" />
                </div>
                <div class="mb-2">
                    <x-form.input name="icon-left-and-right" label="Username" icon="person" right-icon="pen"
                        placeholder="com ícone nos dois lados" />
                </div>
                <div class="mb-2">
                    <x-form.input type="password" name="password" label="Palavra-passe" placeholder="palavra-passe" />
                </div>
                <div class="mb-2">
                    <x-form.input type="search" name="search" placeholder="pesquisar" right-icon="search" />
                </div>
                <div class="mb-2">
                    <x-form.input type="number" name="number" label="Número" placeholder="número" />
                </div>
            </div>
        </div>
    </div>
    {{-- Campo de entrada avançado --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                data-bs-target="#advanced-input-fields">
                Campo de entrada avançado
            </button>
        </h2>
        <div id="advanced-input-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
            <div class="accordion-body">
                <div class="mb-2">
                    <x-form.input name="phone" label="Telefone" right-icon="telephone" corner="Ex: +244 999 999 999"
                        placeholder="com máscara para telefone" mask="+244 999 999 999" />
                </div>
                <div class="mb-2">
                    <x-form.input name="identity" label="Bilhete de Idantidade" right-icon="person-vcard"
                        corner="Ex: 999999999XX999" placeholder="com máscara para bilhete" mask="999999999aa999" />
                </div>
                <div class="mb-2">
                    <x-form.input name="money" label="Dinheiro" right-icon="currency-dollar" corner="Ex: 1.000,00"
                        placeholder="com máscara para dinheiro" mask:dynamic="$money($input, ',')" />
                </div>
                <div class="mb-2">
                    <x-form.input name="number" label="Número" corner="Ex: 1 000,00"
                        placeholder="com máscara para número com ponto flutuante"
                        mask:dynamic="$money($input, ',', ' ')" />
                </div>
            </div>
        </div>
    </div>
</div>
