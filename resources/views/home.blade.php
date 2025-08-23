<x-layout.app>
    @section('content')
        <div class="container my-3">
            <div class="card">
                <div class="card-header text-center user-select-none">
                    <h2 class="card-title text-orange-500">{{ config('app.name') }}</h2>
                    <p class="card-text text-orange-300">
                        {{ __('Laravel Components using Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine, FlatPickr, FullCalendar, SweetAlert2.js and Chart.js') }}
                    </p>
                    <a href="{{ route('inputs') }}" class="btn btn-sm btn-default">Componentes de entrada de
                        dados (inputs)</a>
                    <a href="{{ route('table') }}" class="btn btn-sm btn-default">Tables</a>
                    <a href="{{ route('chart') }}" class="btn btn-sm btn-default">Componente do Chart.JS</a>
                    <a href="{{ route('fullcalendar') }}" class="btn btn-sm btn-default">Componente do Full
                        Calendar</a>
                </div>
                <div class="card-body">
                    <h2 class="text-center user-select-none">Badges</h2>
                    @include('content.badge')

                    <h2 class="text-center user-select-none">Alertas</h2>
                    @include('content.alert')

                    <h2 class="text-center user-select-none">Botões</h2>
                    @include('content.button')

                    <h2 class="text-center user-select-none">Avatar</h2>
                    @include('content.avatar')

                    <h2 class="text-center user-select-none">Modal</h2>
                    @include('content.modal')

                    <h2 class="text-center user-select-none">Bandira de Países e Sweetalert2</h2>
                    @include('content.flag-icons-and-sweetalert2')
                </div>
            </div>
        </div>
    @endsection
</x-layout.app>
