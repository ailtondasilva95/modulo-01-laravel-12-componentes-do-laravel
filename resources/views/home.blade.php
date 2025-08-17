<x-layout.app>
    @section('content')
        <div class="container mb-4">

            <h6 class="text-center mt-3 mb-4 text-orange-500">{{ __('app.description') }}</h6>

            <h2 class="text-center">Badges</h2>
            @include('content.badge')

            <h2 class="text-center">Botões</h2>
            @include('content.button')

            <h2 class="text-center">Avatar</h2>
            @include('content.avatar')

            <h2 class="text-center">Modal</h2>
            @include('content.modal')

            <h2 class="text-center">Bandira de Países</h2>
            @include('content.flag-icons')

            <h2 class="text-center">Tabela</h2>
            @include('content.table')

            <h2 class="text-center">Sweetalert2</h2>
            @include('content.sweetalert2')

            <h2 class="text-center">Componentes de formulário</h2>
            @include('content.inputs-fields')

            

            <div class="mt-2">
                <div class="mt-2 alert alert-primary alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading"><i class="bi bi-alarm me-2"></i> Well done!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquid minima earum doloremque
                        commodi expedita quos, <a href="#" class="alert-link">an example link</a> error blanditiis
                        tempora
                        libero neque magni tenetur omnis illo veritatis eius ipsum eaque quia!
                    </p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.
                    </p>
                </div>
            </div>
        </div>
    @endsection
</x-layout.app>
