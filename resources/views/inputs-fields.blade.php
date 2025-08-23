<x-layout.app>

    @section('title', "Componentes de entrada de dados (inputs)")

    @section('content')
        <div class="container my-3">
            <div class="card">
                <div class="card-header text-center user-select-none">
                    <h2 class="card-title text-orange-500">{{ config('app.name') }}</h2>
                    <p class="card-text text-orange-300">
                        {{ __('Laravel Components using Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine, FlatPickr, FullCalendar and SweetAlert2') }}
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-sm btn-default">Home</a>
                    <a href="{{ route('table') }}" class="btn btn-sm btn-default">Tables</a>
                    <a href="{{ route('chart') }}" class="btn btn-sm btn-default">Componente do Chart.JS</a>
                    <a href="{{ route('fullcalendar') }}" class="btn btn-sm btn-default">Componente do Full
                        Calendar</a>
                </div>
                <div class="card-body">
                    <div class="accordion mb-2" id="inputs-fields">
                        {{-- Campo de entrada básica --}}
                        @include('content.forms.input-basic')

                        {{-- Campo de entrada de TextArea --}}
                        @include('content.forms.textarea')

                        {{-- Campo de entrada do tipo radio --}}
                        @include('content.forms.radio')

                        {{-- Campo de entrada do tipo checkbox --}}
                        @include('content.forms.checkbox')

                        {{-- Campo de entrada com máscara usando Alpine e o seu plugin (alpinejs/mask) --}}
                        @include('content.forms.input-mask')

                        {{-- Campo de entrada de data/hora com (Flatpickr) --}}
                        @include('content.forms.flatpickr')

                        {{-- Campo de entrada select com (Select2) --}}
                        @include('content.forms.select2')

                        {{-- Campo de entrada file para Upload com (Bootstrap-Fileinput) --}}
                        @include('content.forms.file')
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-layout.app>
