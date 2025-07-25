<x-layout.app>
    @section('content')
        <div class="container-fluid">
            <h5 class="text-center mt-3 mb-4 text-orange-500">{{ __('translate.description') }}</h5>

            <h2 class="text-center">Badges</h2>
            @include('content.badge')

            <h2 class="text-center">Botões</h2>
            @include('content.button')

            <h2 class="text-center">Avatar</h2>
            @include('content.avatar')

            <h2 class="text-center">Modal</h2>
            @include('content.modal')

            <h2 class="text-center">Sweetalert2</h2>
            @include('content.sweetalert2')
            
            <h2 class="text-center">Componentes de formulário</h2>
            @include('content.inputs-fields')
{{-- 
            <div class="input-group mb-3">
                <label class="input-group-text" for="fp-test">
                    <i class="bi bi-calendar-event"></i>
                </label>
                <input type="date" id="fp-test" class="form-control" placeholder="Selecione uma data" />
            </div>

            @pushOnce('scripts')
                <script type="module">
                    flatpickr("#fp-test", {
                        dateFormat: "d/m/Y",
                    });
                </script>
            @endPushOnce --}}

        </div>
    @endsection
</x-layout.app>
