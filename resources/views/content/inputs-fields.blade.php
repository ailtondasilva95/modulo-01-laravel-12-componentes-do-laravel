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
                    <x-form.input name="input" placeholder="sem rótulo (etiqueta) e com entrada opcional" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-label" label="Label"
                        placeholder="com rótulo (etiqueta) e com entrada opcional" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-required" label="Name" placeholder="com entrada obrigatória" required />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-corner" label="E-mail" placeholder="com canto de exemplo"
                        corner="Ex: example@gmail.com" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-icon" label="Username" icon="person"
                        placeholder="com ícone à esquerda" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-icon-right" label="Username" right-icon="person"
                        placeholder="com ícone à direita" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-icons" label="Username" icon="person" right-icon="pen"
                        placeholder="com ícone nos dois lados" />
                </div>
                <div class="mb-2">
                    <x-form.input type="password" name="input-password" label="Palavra-passe"
                        placeholder="palavra-passe" />
                </div>
                <div class="mb-2">
                    <x-form.input type="search" name="input-search" placeholder="pesquisar" right-icon="search" />
                </div>
                <div class="mb-2">
                    <x-form.input type="number" name="input-number" label="Número" placeholder="número" />
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
                    <x-form.input name="input-mask-phone" label="Telefone" right-icon="telephone"
                        corner="Ex: +244 999 999 999" placeholder="com máscara para telefone" mask="+244 999 999 999" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-mask-identity" label="Bilhete de Idantidade" right-icon="person-vcard"
                        corner="Ex: 999999999XX999" placeholder="com máscara para bilhete" mask="999999999aa999" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-mask-money" label="Dinheiro" right-icon="currency-dollar"
                        corner="Ex: 1.000,00" placeholder="com máscara para dinheiro"
                        mask:dynamic="$money($input, ',')" />
                </div>
                <div class="mb-2">
                    <x-form.input name="input-mask-number" label="Número" corner="Ex: 1 000,00"
                        placeholder="com máscara para número com ponto flutuante"
                        mask:dynamic="$money($input, ',', ' ')" />
                </div>
            </div>
        </div>
    </div>

    {{-- Campo de entrada com data/hora --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#date-input-fields">
                Campo de entrada com data/hora
            </button>
        </h2>
        <div id="date-input-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
            <div class="accordion-body">
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date"
                        placeholder="sem rótulo (etiqueta) e com entrada opcional" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-label" label="Data"
                        placeholder="com rótulo (etiqueta) e com entrada opcional" />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-required" label="Data"
                        placeholder="com entrada obrigatória" required />
                </div>
                <div class="mb-2">
                    <x-form.flatpickr name="flatpickr-date-corner" label="Data" placeholder="com canto de exemplo"
                        corner="Ex: dia-mês-ano" />
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
