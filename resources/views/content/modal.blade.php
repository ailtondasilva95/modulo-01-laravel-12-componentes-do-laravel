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
                <x-button class="btn-default" label="Modal Normal" data-bs-toggle="modal"
                    data-bs-target="#modalNormal" />

                <x-modal id="modalNormal" title="Modal Normal">
                    Este é um modal normal.
                </x-modal>

                {{-- Modal Normal sem titulo --}}
                <x-button class="btn-default" label="Modal Normal sem Titulo" data-bs-toggle="modal"
                    data-bs-target="#modalNormalNoTitle" />

                <x-modal id="modalNormalNoTitle">
                    Este é um modal normal sem título.
                    Você pode adicionar conteúdo aqui.
                </x-modal>

                {{-- Modal Estático --}}
                <x-button class="btn-default" label="Modal Estático" data-bs-toggle="modal"
                    data-bs-target="#estatico" />

                <x-modal id="estatico" title="Modal Estático" static>
                    Este modal não pode ser fechado ao clicar fora dele ou pressionar a tecla ESC.
                </x-modal>

                {{-- Modal Centralizado --}}
                <x-button class="btn-default" label="Modal Centralizado" data-bs-toggle="modal"
                    data-bs-target="#centralizado" />

                <x-modal id="centralizado" title="Modal Centralizado" centered>

                    Este modal é centralizado verticalmente na tela.
                    Você pode fechá-lo normalmente.

                    <x-slot name="footer">
                        <x-button class="btn-secondary" label="Fechar" data-bs-dismiss="modal" />
                        <x-button class="btn-primary" label="Salvar alterações" />
                    </x-slot>

                </x-modal>

                {{-- Modal Estático e Centralizado --}}
                <x-button class="btn-default" label="Modal Estático e Centralizado" data-bs-toggle="modal"
                    data-bs-target="#estaticoEcentralizado" />

                <x-modal id="estaticoEcentralizado" title="Modal Estático e Centralizado" static centered>

                    Este modal é estático e também centralizado verticalmente.
                    Não pode ser fechado ao clicar fora dele ou pressionar a tecla ESC.

                    <x-slot name="footer">
                        <x-button class="btn-secondary" label="Fechar" data-bs-dismiss="modal" />
                        <x-button class="btn-primary" label="Salvar alterações" />
                    </x-slot>

                </x-modal>

            </div>
        </div>
    </div>

</div>
