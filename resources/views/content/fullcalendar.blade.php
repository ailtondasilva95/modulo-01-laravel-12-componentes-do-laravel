<x-full-calendar id="calendar-basic" class="mb-2" />

<x-full-calendar id="calendar-no-selectable" class="mb-2" :selectable="false" />

<x-full-calendar id="calendar-no-week-numbers" class="mb-2" :weekNumbers="false" />

<x-full-calendar id="calendar-focus-weekend" class="mb-2" focusWeekend />

<x-full-calendar id="calendar-static-api" class="mb-2" initial-date="2023-01-12" :events="route('api.static.events')" />

<x-full-calendar id="calendar-static-api-no-editable" class="mb-2" initial-date="2023-01-12" :editable="false" :events="route('api.static.events')" />

<x-full-calendar id="calendar-dinamic-api" class="mb-2" :initial-date="now()" selectable dayMaxEvents :events="route('api.dinamic.events')" />

<x-full-calendar id="calendar-editable" class="mb-2" initial-date="2023-01-12" editable :events="route('api.static.events')" />

<x-full-calendar id="calendar-array" class="mb-2" initial-date="2023-01-12" editable :events="[
    ['title' => 'Event Array 1', 'start' => '2023-01-01', 'end' => '2023-01-02', 'color' => '#f39c12'],
    ['title' => 'Event Array 2', 'start' => '2023-01-05', 'end' => '2023-01-06', 'color' => '#00a65a'],
    ['title' => 'Event Array 3', 'start' => '2023-01-10', 'end' => '2023-01-12', 'color' => '#f56954'],
    ['title' => 'Event Array 4', 'start' => '2023-01-15', 'end' => '2023-01-16', 'color' => '#00c0ef'],
    ['title' => 'Event Array 5', 'start' => '2023-01-20', 'end' => '2023-01-22', 'color' => '#3c8dbc'],
    ['title' => 'Event Array 6', 'start' => '2023-01-25', 'end' => '2023-01-26', 'color' => '#605ca8'],
    ['title' => 'Event Array 7', 'start' => '2023-01-30', 'end' => '2023-01-31', 'color' => '#f39c12'],
    ['title' => 'Event Array 8', 'start' => '2023-02-01', 'end' => '2023-02-02', 'color' => '#00a65a'],
    ['title' => 'Event Array 9', 'start' => '2023-02-05', 'end' => '2023-02-06', 'color' => '#f56954'],
    ['title' => 'Event Array 10', 'start' => '2023-02-10', 'end' => '2023-02-12', 'color' => '#00c0ef'],
    ['title' => 'Event Array 11', 'start' => '2023-02-15 15:30:00', 'color' => '#3c8dbc', 'editable' => false],
    ['title' => 'Event Array 12', 'start' => '2023-02-19 15:30:00', 'color' => '#605ca8', 'editable' => false],
]" />
