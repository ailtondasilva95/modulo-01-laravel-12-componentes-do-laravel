<x-layout.app>
    @section('content')
        <div class="container-fluid">
            <h5 class="text-center mt-3 mb-4">{{ __('translate.description') }}</h5>

            <h2 class="text-center">Badges</h2>
            @include('content.badge')

            <h2 class="text-center">Botões</h2>
            @include('content.button')

            <h2 class="text-center">Modal</h2>
            @include('content.modal')
            
            <h2 class="text-center">Sweetalert2</h2>
            @include('content.sweetalert2')

        </div>
    @endsection
</x-layout.app>
