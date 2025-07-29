<div class="accordion mb-2" id="Swal">
    {{-- Sweetalert2 com classes do bootstrap --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#main-Swal">
                Sweetalert2 com classes do bootstrap
            </button>
        </h2>
        <div id="main-Swal" class="accordion-collapse collapse" data-bs-parent="#Swal">
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
