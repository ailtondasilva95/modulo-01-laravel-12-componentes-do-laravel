<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flatpickr-fields">
            Campo de entrada com flatpickr (data/hora)
        </button>
    </h2>
    <div id="flatpickr-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr" placeholder="sem rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr-sm" size="sm" placeholder="com tamanho pequeno" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr-lg" size="lg" placeholder="com tamanho grande" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr-label-required" label="Rótulo" required
                    placeholder="com rótulo (etiqueta) e com marcação de entrada obrigatória" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr-corner" label="Data" corner="com informação adicional" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr-icon" label="Data" icon="calendar-event"
                    placeholder="com ícone à direita" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr-icon-left" label="Data" left-icon="calendar-event"
                    placeholder="com ícone à esquerda" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="field-flatpickr-icons" label="Data" icon="calendar-event" left-icon="pen"
                    placeholder="com ícone nos dois lados" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr type="datetime" name="field-flatpickr-datetime" label="Data e hora"
                    placeholder="data e hora" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr type="month" name="field-flatpickr-month" label="Mês do ano"
                    placeholder="mês do ano" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr type="week" name="field-flatpickr-week" label="Semana"
                    placeholder="semana do ano" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr type="time" name="field-flatpickr-time" label="Hora" placeholder="hora" />
            </div>
        </div>
    </div>
</div>
