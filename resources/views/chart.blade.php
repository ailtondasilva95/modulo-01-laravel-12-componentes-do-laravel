<x-layout.app>

    @section('title', 'Chart.JS')

    @section('content')
        <div class="container my-3">
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
                    <a href="{{ route('fullcalendar') }}" class="btn btn-sm btn-default">Componente do Full
                        Calendar</a>
                </div>
                <div class="card-body">
                    <div class="accordion my-2" id="chartJS">

                        {{-- Chart.js do tipo bar  --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-bar">
                                    Chart.js em barra
                                </button>
                            </h2>
                            <div id="type-bar" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart :config="[
                                        'labels' => ['Janeiro', 'Fevereiro', 'Março'],
                                        'datasets' => [
                                            [
                                                'label' => 'Vendas',
                                                'data' => [150, 200, 180],
                                                'backgroundColor' => ['#4BC0C0', '#FF6384', '#36A2EB'],
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js do tipo line --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-line">
                                    Chart.js em linha
                                </button>
                            </h2>
                            <div id="type-line" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="line" :config="[
                                        'labels' => ['Janeiro', 'Fevereiro', 'Março'],
                                        'datasets' => [
                                            [
                                                'label' => 'Lucro',
                                                'data' => [50, 75, 60],
                                                'borderColor' => '#36A2EB',
                                                'backgroundColor' => '#FF6384',
                                                'fill' => true,
                                                'tension' => 0.3, // curva suave
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js do tipo pie --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-pie">
                                    Chart.js em pizza
                                </button>
                            </h2>
                            <div id="type-pie" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="pie" :config="[
                                        'labels' => ['Produto A', 'Produto B', 'Produto C'],
                                        'datasets' => [
                                            [
                                                'data' => [120, 90, 50],
                                                'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js do tipo doughnut --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-doughnut">
                                    Chart.js em rosca
                                </button>
                            </h2>
                            <div id="type-doughnut" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="doughnut" :config="[
                                        'labels' => ['Chrome', 'Firefox', 'Safari'],
                                        'datasets' => [
                                            [
                                                'data' => [65, 20, 15],
                                                'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js do tipo radar --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-radar">
                                    Chart.js em radar
                                </button>
                            </h2>
                            <div id="type-radar" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="radar" :config="[
                                        'labels' => ['Força', 'Velocidade', 'Inteligência', 'Resistência', 'Agilidade'],
                                        'datasets' => [
                                            [
                                                'label' => 'Personagem X',
                                                'data' => [80, 70, 90, 60, 85],
                                                'borderColor' => '#FF6384',
                                                'backgroundColor' => 'rgba(255,99,132,0.2)',
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js do tipo polarArea --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-polarArea">
                                    Chart.js em area polar
                                </button>
                            </h2>
                            <div id="type-polarArea" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="polarArea" :config="[
                                        'labels' => ['Norte', 'Sul', 'Leste', 'Oeste'],
                                        'datasets' => [
                                            [
                                                'data' => [11, 16, 7, 14],
                                                'backgroundColor' => ['#4BC0C0', '#FF6384', '#FFCE56', '#36A2EB'],
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js do tipo bubble --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-bubble">
                                    Chart.js em bolhas
                                </button>
                            </h2>
                            <div id="type-bubble" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="bubble" :config="[
                                        'datasets' => [
                                            [
                                                'label' => 'Bolinhas',
                                                'data' => [
                                                    ['x' => 20, 'y' => 30, 'r' => 15],
                                                    ['x' => 40, 'y' => 10, 'r' => 10],
                                                    ['x' => 25, 'y' => 20, 'r' => 8],
                                                    ['x' => 5, 'y' => 20, 'r' => 8],
                                                ],
                                                'backgroundColor' => '#36A2EB',
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js do tipo scatter --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-scatter">
                                    Chart.js em dispersão
                                </button>
                            </h2>
                            <div id="type-scatter" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="scatter" :config="[
                                        'datasets' => [
                                            [
                                                'label' => 'Pontos',
                                                'data' => [
                                                    ['x' => -10, 'y' => 0],
                                                    ['x' => 0, 'y' => 5],
                                                    ['x' => 10, 'y' => 8],
                                                ],
                                                'backgroundColor' => '#FF6384',
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js pela API dinâmica --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-dinamic-api">
                                    Chart.js pela API dinâmica
                                </button>
                            </h2>
                            <div id="type-dinamic-api" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart :api="route('api.dinamic.chart')" />
                                    <x-chart type="pie" :api="route('api.dinamic.chart')" />
                                    <x-chart type="line" :api="route('api.dinamic.chart')" :options="[
                                        'plugins' => [
                                            'title' => [
                                                'display' => true,
                                                'text' => 'Evolução de Novos Usuários',
                                            ],
                                        ],
                                        'scales' => [
                                            'y' => [
                                                'beginAtZero' => true,
                                            ],
                                        ],
                                    ]" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js pela API estática 1 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-static-api-1">
                                    Chart.js pela API estática 1
                                </button>
                            </h2>
                            <div id="type-static-api-1" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart :api="route('api.static.chart1')" />
                                </div>
                            </div>
                        </div>

                        {{-- Chart.js pela API estática 2 --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#type-static-api-2">
                                    Chart.js pela API estática 2
                                </button>
                            </h2>
                            <div id="type-static-api-2" class="accordion-collapse collapse" data-bs-parent="#chartJS">
                                <div class="accordion-body">
                                    <x-chart type="doughnut" :api="route('api.static.chart2')" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-layout.app>
