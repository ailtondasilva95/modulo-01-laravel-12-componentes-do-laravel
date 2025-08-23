<x-layout.app>

    @section('title', 'Componente do Full Calendar')

    @section('content')
        <div class="container mt-3">
            <div class="card">
                <div class="card-header text-center user-select-none">
                    <h2 class="card-title text-orange-500">{{ config('app.name') }}</h2>
                    <p class="card-text text-orange-300">
                        {{ __('Laravel Components using Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine, FlatPickr, FullCalendar, SweetAlert2.js and Chart.js') }}
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-sm btn-default">Home</a>
                    <a href="{{ route('inputs') }}" class="btn btn-sm btn-default">Componentes de entrada de
                        dados (inputs)</a>
                    <a href="{{ route('table') }}" class="btn btn-sm btn-default">Tables</a>
                    <a href="{{ route('chart') }}" class="btn btn-sm btn-default">Componente do Chart.JS</a>
                </div>
                <div class="card-body">
                    <x-full-calendar id="calendar-basic" />

                    <x-full-calendar id="calendar-no-selectable" :selectable="false" />

                    <x-full-calendar id="calendar-no-week-numbers" :weekNumbers="false" />

                    <x-full-calendar id="calendar-focus-weekend" :focusWeekend="false" />

                    <x-full-calendar id="calendar-static-api-no-editable" initial-date="2023-01-12"
                        :editable="false" :dayMaxEvents="false" :api="route('api.static.fullcalendar')" />

                    <x-full-calendar id="calendar-dinamic-api" :initial-date="now()"
                        :api="route('api.dinamic.fullcalendar')" />

                    <x-full-calendar id="calendar-editable" initial-date="2023-01-12"
                        :api="route('api.static.fullcalendar')" />

                    <x-full-calendar id="calendar-array" initial-date="2023-01-12"
                        :config="[
                            [
                                'title' => 'Event Array 1',
                                'start' => '2023-01-01',
                                'end' => '2023-01-02',
                                'color' => '#f39c12',
                            ],
                            [
                                'title' => 'Event Array 2',
                                'start' => '2023-01-05',
                                'end' => '2023-01-06',
                                'color' => '#00a65a',
                            ],
                            [
                                'title' => 'Event Array 3',
                                'start' => '2023-01-10',
                                'end' => '2023-01-12',
                                'color' => '#f56954',
                            ],
                            [
                                'title' => 'Event Array 4',
                                'start' => '2023-01-15',
                                'end' => '2023-01-16',
                                'color' => '#00c0ef',
                            ],
                            [
                                'title' => 'Event Array 5',
                                'start' => '2023-01-20',
                                'end' => '2023-01-22',
                                'color' => '#3c8dbc',
                            ],
                            [
                                'title' => 'Event Array 6',
                                'start' => '2023-01-25',
                                'end' => '2023-01-26',
                                'color' => '#605ca8',
                            ],
                            [
                                'title' => 'Event Array 7',
                                'start' => '2023-01-30',
                                'end' => '2023-01-31',
                                'color' => '#f39c12',
                            ],
                            [
                                'title' => 'Event Array 8',
                                'start' => '2023-02-01',
                                'end' => '2023-02-02',
                                'color' => '#00a65a',
                            ],
                            [
                                'title' => 'Event Array 9',
                                'start' => '2023-02-05',
                                'end' => '2023-02-06',
                                'color' => '#f56954',
                            ],
                            [
                                'title' => 'Event Array 10',
                                'start' => '2023-02-10',
                                'end' => '2023-02-12',
                                'color' => '#00c0ef',
                            ],
                            [
                                'title' => 'Event Array 11',
                                'start' => '2023-02-15 15:30:00',
                                'color' => '#3c8dbc',
                                'editable' => false,
                            ],
                            [
                                'title' => 'Event Array 12',
                                'start' => '2023-02-19 15:30:00',
                                'color' => '#605ca8',
                                'editable' => false,
                            ],
                        ]" />

                </div>
            </div>
        </div>
    @endsection
</x-layout.app>
