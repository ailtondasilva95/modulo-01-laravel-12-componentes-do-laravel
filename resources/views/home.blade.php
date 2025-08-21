<x-layout.app>
    @section('content')
        <div class="container-fluid mt-3">
            <div class="card">
                <div class="card-header text-center user-select-none">
                    <h2 class="card-title text-orange-500">{{ config('app.name') }}</h2>
                    <p class="card-text text-orange-300">{{ __('Laravel Components using Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine, FlatPickr, FullCalendar and SweetAlert2') }}</p>
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

                    <h2 class="text-center user-select-none">Bandira de Países</h2>
                    @include('content.flag-icons')

                    <h2 class="text-center user-select-none">Tabela</h2>
                    @include('content.table')

                    <h2 class="text-center user-select-none">Sweetalert2</h2>
                    @include('content.sweetalert2')

                    <h2 class="text-center user-select-none">Componentes de formulário</h2>
                    @include('content.inputs-fields')

                    <h2 class="text-center user-select-none">Full Calendar</h2>
                    @include('content.fullcalendar')
                </div>
            </div>
        </div>
    @endsection
</x-layout.app>
