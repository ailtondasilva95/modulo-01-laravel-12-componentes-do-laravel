@once
    @push('css')
        <style>
            /* Ajustes específicos para o FullCalendar quando o tema do Bootstrap estiver no modo escuro */
            [data-bs-theme="dark"] .fc-theme-bootstrap5 {

                & .fc-list,
                & .fc-scrollgrid,
                & td,
                & th {
                    border-color: var(--bs-border-color);
                }

                & .fc-theme-bootstrap5-shaded {
                    background-color: var(--bs-gray-800);
                }

                & .fc-day-today {
                    background-color: var(--bs-warning-bg-subtle);
                    color: var(--bs-warning-text-emphasis);
                }

                & .fc-day-past,
                & .fc-day-future {
                    background-color: var(--bs-body-bg);
                }

                & .fc-day-disabled {
                    background-color: var(--bs-gray-800);
                }

                & .fc-event:hover {
                    color: var(--bs-black);
                }
            }
        </style>
    @endpush
@endonce

<div id="{{ $generateId() }}" {{ $attributes->class(['card p-3']) }}></div>

@push('scripts')
    <script type="module">
        $(() => {
            const calendar = new Calendar(document.getElementById(@json($generateId())), {

                plugins: DEFAULT_PLUGINS_FULL_CALENDAR, // plugins padrão do FullCalendar

                headerToolbar: @json($headerToolbar), // cabecalho do calendário

                timeZone: @json(config('app.timezone')), // fuso horário do calendário

                initialView: @json($initialView), // visualização inicial do calendário

                initialDate: @json($initialDate), // data inicial do calendário

                businessHours: @json($focusWeekend), // destacar os finais de semana (true ou false)
                dayMaxEvents: @json($dayMaxEvents), // limitar o número de eventos por dia (true ou false)
                weekNumbers: @json($weekNumbers), // se os números das semanas devem ser exibidos
                selectable: @json($selectable), // permitir seleção de datas (true ou false)
                firstDay: @json($firstDay), // primeiro dia da semana de 0 (Domingo) a 6 (Sábado)
                editable: @json($editable), // se o calendário deve permitir edição de eventos

                events: @json($events), // eventos do calendário, pode ser uma URL ou um array de eventos

                themeSystem: "bootstrap5", // tema do Bootstrap 5

                multiMonthMaxColumns: 2, // número máximo de colunas para visualização de vários meses

                locales: fullcalendarLocales, // aqui ele já terá todos os idiomas disponíveis
                locale: document.documentElement.lang, // idioma do atributo lang da tag <html>
            });

            calendar.render();
        });
    </script>
@endpush
