<div class="accordion mb-2" id="flag-icons-and-swal">

    {{-- Bandira de Países --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#flag-icons">
                Bandira de Países
            </button>
        </h2>
        <div id="flag-icons" class="accordion-collapse collapse" data-bs-parent="#flag-icons-and-swal">
            <div class="accordion-body text-center">
                <p>
                    <i class="fi fi-mz" data-bs-toggle="tooltip" data-bs-title="bandira de moçambique"></i>
                    <i class="fi fi-cv" data-bs-toggle="tooltip" data-bs-title="bandira do cabo verde"></i>
                    <i class="fi fi-pt" data-bs-toggle="tooltip" data-bs-title="bandira de portugal"></i>
                    <i class="fi fi-ao" data-bs-toggle="tooltip" data-bs-title="bandira de angola"></i>
                    <i class="fi fi-br" data-bs-toggle="tooltip" data-bs-title="bandira do brasil"></i>
                    <i class="fi fi-ru" data-bs-toggle="tooltip" data-bs-title="bandira da russia"></i>
                    <i class="fi fi-fr" data-bs-toggle="tooltip" data-bs-title="bandira da frança"></i>
                    <i class="fi fi-it" data-bs-toggle="tooltip" data-bs-title="bandira da itatia"></i>
                    <i class="fi fi-jp" data-bs-toggle="tooltip" data-bs-title="bandira do japão"></i>
                    <i class="fi fi-cn" data-bs-toggle="tooltip" data-bs-title="bandira da china"></i>
                </p>
                <p>
                    <i class="fi fi-mz fis" data-bs-toggle="popover" data-bs-content="bandira de moçambique"></i>
                    <i class="fi fi-cv fis" data-bs-toggle="popover" data-bs-content="bandira do cabo verde"></i>
                    <i class="fi fi-pt fis" data-bs-toggle="popover" data-bs-content="bandira de portugal"></i>
                    <i class="fi fi-ao fis" data-bs-toggle="popover" data-bs-content="bandira de angola"></i>
                    <i class="fi fi-br fis" data-bs-toggle="popover" data-bs-content="bandira do brasil"></i>
                    <i class="fi fi-ru fis" data-bs-toggle="popover" data-bs-content="bandira da russia"></i>
                    <i class="fi fi-fr fis" data-bs-toggle="popover" data-bs-content="bandira da frança"></i>
                    <i class="fi fi-it fis" data-bs-toggle="popover" data-bs-content="bandira da itatia"></i>
                    <i class="fi fi-jp fis" data-bs-toggle="popover" data-bs-content="bandira do japão"></i>
                    <i class="fi fi-cn fis" data-bs-toggle="popover" data-bs-content="bandira da china"></i>
                </p>
            </div>
        </div>
    </div>

    {{-- Sweetalert2 --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#Swal">
                Sweetalert2 com classes do bootstrap
            </button>
        </h2>
        <div id="Swal" class="accordion-collapse collapse" data-bs-parent="#flag-icons-and-swal">
            <div class="accordion-body text-center">
                <x-button id="basic" label="Básica" />
                <x-button id="success" label="Sucesso" />
                <x-button id="error" label="Erro" />
                <x-button id="confirm" label="Confirmar" />
                <x-button id="cancel" label="Cancelar" />
                <x-button id="tree-button" label="Três Botões" />
                <x-button id="toast-top-end" label="Toast" />
                <x-button id="bootstrap-class" label="Com classes do bootstrap" />
            </div>
        </div>
    </div>
</div>

{{-- Sweetalert2 JS --}}
@push('scripts')
    <script type="module">
        // Básica
        $('#basic').on('click', () => {
            Swal.fire("SweetAlert2 is working!");
        });

        // Mensagem de Sucesso
        $('#success').on('click', () => {
            Swal.fire({
                icon: "success",
                title: "Good job!",
                text: "You clicked the button!",
            });
        });

        // Mensagem de erro
        $('#error').on('click', () => {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Why do I have this issue?</a>'
            });
        });

        // Confirmar
        $('#confirm').on('click', () => {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        });

        // Cancelar
        $('#cancel').on('click', () => {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger me-2"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        icon: "error"
                    });
                }
            });
        });

        // Três Botões
        $('#tree-button').on('click', () => {
            Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Saved!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        });

        // Exemplo de Toast
        $('#toast-top-end').on('click', () => {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Signed in successfully"
            });
        });

        // Sweetalert2 com classes do bootstrap
        $('#bootstrap-class').on('click', () => {
            Swal.fire({
                title: "Atenção",
                text: "Alerta que segue o tema do Bootstrap",
                icon: "info",
                showConfirmButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: "Confirmar",
                cancelButtonText: "Cancelar",
                buttonsStyling: false,
                customClass: {
                    confirmButton: "btn btn-green me-2",
                    cancelButton: "btn btn-black",
                },
                width: '400px',
            });
        });
    </script>
@endpush
