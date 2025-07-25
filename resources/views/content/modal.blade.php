<div class="mb-2 accordion" id="modal">

    {{-- Modal --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#main-modal">
                Modal
            </button>
        </h2>
        <div id="main-modal" class="accordion-collapse collapse" data-bs-parent="#modal">
            <div class="accordion-body text-center">

                {{-- Modal Normal --}}
                <x-form.button class="btn-default" label="Modal Normal" data-bs-toggle="modal"
                    data-bs-target="#modalNormal" />

                <x-widget.modal id="modalNormal" title="Modal Normal">
                    Este é um modal normal.
                </x-widget.modal>

                {{-- Modal Normal sem titulo --}}
                <x-form.button class="btn-default" label="Modal Normal sem Titulo" data-bs-toggle="modal"
                    data-bs-target="#modalNormalNoTitle" />

                <x-widget.modal id="modalNormalNoTitle">
                    Este é um modal normal sem título.
                    Você pode adicionar conteúdo aqui.
                </x-widget.modal>

                {{-- Modal Estático --}}
                <x-form.button class="btn-default" label="Modal Estático" data-bs-toggle="modal"
                    data-bs-target="#estatico" />

                <x-widget.modal id="estatico" title="Modal Estático" static>
                    Este modal não pode ser fechado ao clicar fora dele ou pressionar a tecla ESC.
                </x-widget.modal>

                {{-- Modal Centralizado --}}
                <x-form.button class="btn-default" label="Modal Centralizado" data-bs-toggle="modal"
                    data-bs-target="#centralizado" />

                <x-widget.modal id="centralizado" title="Modal Centralizado" centered>

                    Este modal é centralizado verticalmente na tela.
                    Você pode fechá-lo normalmente.

                    <x-slot name="footer">
                        <x-form.button class="btn-secondary" label="Fechar" data-bs-dismiss="modal" />
                        <x-form.button class="btn-primary" label="Salvar alterações" />
                    </x-slot>

                </x-widget.modal>

                {{-- Modal Estático e Centralizado --}}
                <x-form.button class="btn-default" label="Modal Estático e Centralizado" data-bs-toggle="modal"
                    data-bs-target="#estaticoEcentralizado" />

                <x-widget.modal id="estaticoEcentralizado" title="Modal Estático e Centralizado" static centered>

                    Este modal é estático e também centralizado verticalmente.
                    Não pode ser fechado ao clicar fora dele ou pressionar a tecla ESC.

                    <x-slot name="footer">
                        <x-form.button class="btn-secondary" label="Fechar" data-bs-dismiss="modal" />
                        <x-form.button class="btn-primary" label="Salvar alterações" />
                    </x-slot>

                </x-widget.modal>

            </div>
        </div>
    </div>

</div>
