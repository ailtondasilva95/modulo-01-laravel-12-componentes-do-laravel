<div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flatpickr-fields">
            Campo de entrada com flatpickr (data/hora)
        </button>
    </h2>
    <div id="flatpickr-fields" class="accordion-collapse collapse" data-bs-parent="#inputs-fields">
        <div class="accordion-body">
            <div class="mb-2">
                <x-form.date name="field-flatpickr-1" placeholder="sem rótulo (etiqueta)" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-3" default-date="1995-03-16 12:30:59" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-sm" size="sm" placeholder="com tamanho pequeno" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-lg" size="lg" placeholder="com tamanho grande" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-label-required" label="Rótulo" required
                    placeholder="com rótulo (etiqueta) e com marcação de entrada obrigatória" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-corner" label="Data" corner="com informação adicional" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-icon" label="Data" icon="calendar-event"
                    placeholder="com ícone à direita" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-icon-left" label="Data" left-icon="calendar-event"
                    placeholder="com ícone à esquerda" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-icons" label="Data" icon="calendar-event" left-icon="pen"
                    placeholder="com ícone nos dois lados" default-date="1995-03-16" />
            </div>
            <div class="mb-2">
                <x-form.date type="datetime" name="field-flatpickr-datetime-1" label="Data e hora"
                    placeholder="data e hora sem valor inicial" />
            </div>
            <div class="mb-2">
                <x-form.date type="datetime" name="field-flatpickr-datetime-2" label="Data e hora"
                    placeholder="data e hora" default-date="1995/03/16 12:30:59" />
            </div>
            <div class="mb-2">
                <x-form.date type="month" name="field-flatpickr-month-1" label="Mês do ano"
                    placeholder="mês do ano sem valor inicial" />
            </div>
            <div class="mb-2">
                <x-form.date type="month" name="field-flatpickr-month-2" label="Mês do ano" placeholder="mês do ano"
                    default-date="1995/03/16 12:30:59" />
            </div>
            <div class="mb-2">
                <x-form.date type="week" name="field-flatpickr-week-1" label="Semana"
                    placeholder="semana do ano sem valor inicial" />
            </div>
            <div class="mb-2">
                <x-form.date type="week" name="field-flatpickr-week-2" label="Semana" placeholder="semana do ano"
                    default-date="1995/03/16 12:30:59" />
            </div>
            <div class="mb-2">
                <x-form.date type="time" name="field-flatpickr-time-1" label="Hora"
                    placeholder="hora sem valor inicial" />
            </div>
            <div class="mb-2">
                <x-form.date type="time" name="field-flatpickr-time-2" label="Hora" placeholder="hora"
                    default-date="1995/03/16 12:30:59" />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-range-1" label="Intervalo"
                    placeholder="intervalo de datas sem valor inicial" range />
            </div>
            <div class="mb-2">
                <x-form.date name="field-flatpickr-range-2" label="Intervalo" placeholder="intervalo" range
                    :default-date="['2016-10-10', '2016-10-20']" />
            </div>
            <div class="mb-2">
                <x-form.date type="datetime" name="field-flatpickr-range-3" label="Intervalo"
                    placeholder="intervalo" range :default-date="['1995/03/16 12:30:59', '1995/04/08 12:30:59']" />
            </div>
        </div>
    </div>
</div>
