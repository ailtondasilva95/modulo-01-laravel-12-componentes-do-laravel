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
                <x-alert>
                    <samp>Whenever you need to, be sure to use margin utilities to keep things tidy.</samp>
                </x-alert>
                <x-alert type="secondary" title="Secondary" />
                <x-alert type="warning" title="Warning" />
                <x-alert type="success" title="Success" />
                <x-alert type="danger" title="Danger" />
                <x-alert type="light" title="Light" />
                <x-alert type="info" title="Info" />
                <x-alert type="dark" title="Dark" />
                <x-alert title="Alert Warning com conteúdo">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquid minima earum
                        doloremque
                        commodi expedita quos, <a href="#" class="alert-link">an example link</a> error blanditiis
                        tempora
                        libero neque magni tenetur omnis illo veritatis eius ipsum eaque quia!
                    </p>
                    <hr>
                    <samp>Whenever you need to, be sure to use margin utilities to keep things nice and
                        tidy.
                    </samp>
                </x-alert>
            </div>
        </div>
    </div>
</div>
