<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flatpickr-fields">
            Campo de entrada com flatpickr (data/hora)
        </button>
    </h2>
    <div id="flatpickr-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="mb-2">
                <x-form.flatpickr name="flatpickr-date" placeholder="sem rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="flatpickr-date-label" label="Data" placeholder="com rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="flatpickr-date-required" label="Data" placeholder="com entrada obrigatória"
                    required />
            </div>
            <div class="mb-2">
                <x-form.flatpickr name="flatpickr-date-corner" label="Data" placeholder="com informação adicional"
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
                <x-form.flatpickr name="flatpickr-date-icons" label="Data" icon="calendar-event" right-icon="pen"
                    placeholder="com ícone nos dois lados" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr type="datetime" name="flatpickr-date-time" label="Data e hora"
                    right-icon="calendar-event" placeholder="data e hora" />
            </div>
            <div class="mb-2">
                <x-form.flatpickr type="month" name="flatpickr-month" label="Mês do ano" right-icon="calendar-month"
                    placeholder="mês do ano" />
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
