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
                    <x-form.input name="field-icon" label="Username" icon="person"
                        placeholder="com ícone à esquerda" />
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
                    <x-form.input type="password" name="field-password" label="Palavra-passe"
                        placeholder="palavra-passe" />
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

    {{-- Campo de entrada com máscara --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#mask-input-fields">
                Campo de entrada com máscara
            </button>
        </h2>
        <div id="mask-input-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
            <div class="accordion-body">
                <div class="mb-2">
                    <x-form.input name="field-mask-phone" label="Telefone" right-icon="telephone"
                        corner="Ex: +244 999 999 999" placeholder="com máscara para telefone" mask="+244 999 999 999" />
                </div>
                <div class="mb-2">
                    <x-form.input name="field-mask-identity" label="Bilhete de Idantidade" right-icon="person-vcard"
                        corner="Ex: 999999999XX999" placeholder="com máscara para bilhete" mask="999999999aa999" />
                </div>
                <div class="mb-2">
                    <x-form.input name="field-mask-money" label="Dinheiro" right-icon="currency-dollar"
                        corner="Ex: 1.000,00" placeholder="com máscara para dinheiro"
                        mask:dynamic="$money($input, ',')" />
                </div>
                <div class="mb-2">
                    <x-form.input name="field-mask-number" label="Número" corner="Ex: 1 000,00"
                        placeholder="com máscara para número com ponto flutuante"
                        mask:dynamic="$money($input, ',', ' ')" />
                </div>
            </div>
        </div>
    </div>

    {{-- Campo de entrada de TextArea --}}
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
                    <x-form.textarea name="field-textarea-label" label="Label"
                        placeholder="com rótulo (etiqueta)" />
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
                    <x-form.textarea name="field-textarea-icon" label="Área de texto" icon="word"
                        placeholder="com ícone à esquerda" />
                </div>
                <div class="mb-2">
                    <x-form.textarea name="field-textarea-icon-right" label="Área de texto" right-icon="word"
                        placeholder="com ícone à direita" />
                </div>
                <div class="mb-2">
                    <x-form.textarea name="field-textarea-icons" label="Área de texto" icon="word"
                        right-icon="pen" placeholder="com ícone nos dois lados" />
                </div>
            </div>
        </div>
    </div>

    {{-- Campo de entrada com data/hora --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flatpickr-fields">
                Campo de entrada com data/hora
            </button>
        </h2>
        <div id="flatpickr-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
            <div class="accordion-body">
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date" placeholder="sem rótulo (etiqueta)" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-label" label="Data"
                        placeholder="com rótulo (etiqueta)" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-required" label="Data"
                        placeholder="com entrada obrigatória" required />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-corner" label="Data"
                        placeholder="com informação adicional" corner="Ex: dia-mês-ano" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-icon" label="Data" icon="calendar-event"
                        placeholder="com ícone à esquerda" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-icon-right" label="Data" right-icon="calendar-event"
                        placeholder="com ícone à direita" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-icons" label="Data" icon="calendar-event"
                        right-icon="pen" placeholder="com ícone nos dois lados" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr type="datetime" name="flatpickr-date-time" label="Data e hora"
                        right-icon="calendar-event" placeholder="data e hora" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr type="month" name="flatpickr-month" label="Mês do ano"
                        right-icon="calendar-month" placeholder="mês do ano" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr type="week" name="flatpickr-week" label="Semana" right-icon="calendar-week"
                        placeholder="semana do ano" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr type="time" name="flatpickr-time" label="Hora" right-icon="clock"
                        placeholder="hora" />
                </div>
            </div>
        </div>
    </div>
