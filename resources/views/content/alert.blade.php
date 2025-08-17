<div class="accordion mb-2" id="alert">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#main-alert">
                Tipos de Alertas
            </button>
        </h2>
        <div id="main-alert" class="accordion-collapse collapse" data-bs-parent="#alert">
            <div class="accordion-body">
                <x-alert icon="person" />
                <x-alert title="Default Alert" />
                <x-alert type="secondary" icon="person" title="Secondary" />
                <x-alert type="warning" icon="person" title="Warning" />
                <x-alert type="primary" icon="person" title="Primary" />
                <x-alert type="success" icon="person" title="Success" />
                <x-alert type="danger" icon="person" title="Danger" />
                <x-alert type="light" icon="person" title="Light" />
                <x-alert type="info" icon="person" title="Info" />
                <x-alert type="dark" icon="person" title="Dark" />
                <x-alert type="warning" icon="alarm" title="Alert Warning com conteúdo">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquid minima earum
                        doloremque
                        commodi expedita quos, <a href="#" class="alert-link">an example link</a> error blanditiis
                        tempora
                        libero neque magni tenetur omnis illo veritatis eius ipsum eaque quia!
                    </p>
                    <hr>
                    <p class="my-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                        tidy.
                    </p>
                </x-alert>
            </div>
        </div>
    </div>
</div>
