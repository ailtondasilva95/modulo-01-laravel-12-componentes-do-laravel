<div class="mb-2 accordion" id="avatar">

    {{-- Avatar com as cores principais do bootstrap --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#main-avatar">
                Avatar com as cores principais do bootstrap
            </button>
        </h2>
        <div id="main-avatar" class="accordion-collapse collapse" data-bs-parent="#avatar">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-widget.avatar type="secondary" label="Ailton da Silva" />
                    <x-widget.avatar type="primary" label="Ailton da Silva" />
                    <x-widget.avatar type="warning" label="Ailton da Silva" />
                    <x-widget.avatar type="success" label="Ailton da Silva" />
                    <x-widget.avatar type="danger" label="Ailton da Silva" />
                    <x-widget.avatar type="light" label="Ailton da Silva" />
                    <x-widget.avatar type="dark" label="Ailton da Silva" />
                    <x-widget.avatar type="info" label="Ailton da Silva" />
                </div>
                <div class="text-center mb-2">
                    <x-widget.avatar type="secondary" label="Ailton da Silva" outline />
                    <x-widget.avatar type="primary" label="Ailton da Silva" outline />
                    <x-widget.avatar type="warning" label="Ailton da Silva" outline />
                    <x-widget.avatar type="success" label="Ailton da Silva" outline />
                    <x-widget.avatar type="danger" label="Ailton da Silva" outline />
                    <x-widget.avatar type="light" label="Ailton da Silva" outline />
                    <x-widget.avatar type="dark" label="Ailton da Silva" outline />
                    <x-widget.avatar type="info" label="Ailton da Silva" outline />
                </div>
            </div>
        </div>
    </div>

    {{-- Avatar com as cores personalizadas --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#custom-avatar">
                Avatar com as cores personalizadas
            </button>
        </h2>
        <div id="custom-avatar" class="accordion-collapse collapse" data-bs-parent="#avatar">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-widget.avatar type="yellow" label="Ailton da Silva" />
                    <x-widget.avatar type="indigo" label="Ailton da Silva" />
                    <x-widget.avatar type="purple" label="Ailton da Silva" />
                    <x-widget.avatar type="orange" label="Ailton da Silva" />
                    <x-widget.avatar type="green" label="Ailton da Silva" />
                    <x-widget.avatar type="black" label="Ailton da Silva" />
                    <x-widget.avatar type="blue" label="Ailton da Silva" />
                    <x-widget.avatar type="gray" label="Ailton da Silva" />
                    <x-widget.avatar type="teal" label="Ailton da Silva" />
                    <x-widget.avatar type="cyan" label="Ailton da Silva" />
                    <x-widget.avatar type="pink" label="Ailton da Silva" />
                    <x-widget.avatar type="red" label="Ailton da Silva" />
                </div>
                <div class="text-center mb-2">
                    <x-widget.avatar type="yellow" label="Ailton da Silva" outline />
                    <x-widget.avatar type="indigo" label="Ailton da Silva" outline />
                    <x-widget.avatar type="purple" label="Ailton da Silva" outline />
                    <x-widget.avatar type="orange" label="Ailton da Silva" outline />
                    <x-widget.avatar type="green" label="Ailton da Silva" outline />
                    <x-widget.avatar type="black" label="Ailton da Silva" outline />
                    <x-widget.avatar type="blue" label="Ailton da Silva" outline />
                    <x-widget.avatar type="gray" label="Ailton da Silva" outline />
                    <x-widget.avatar type="teal" label="Ailton da Silva" outline />
                    <x-widget.avatar type="cyan" label="Ailton da Silva" outline />
                    <x-widget.avatar type="pink" label="Ailton da Silva" outline />
                    <x-widget.avatar type="red" label="Ailton da Silva" outline />
                </div>
            </div>
        </div>
    </div>

    {{-- Avatar com imagem --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#image-avatar">
                Avatar com imagem
            </button>
        </h2>
        <div id="image-avatar" class="accordion-collapse collapse" data-bs-parent="#avatar">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-widget.avatar type="orange" label="João Manuel Quindai" outline :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="orange" label="Josemar Berbardo" :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="secondary" label="João Manuel Quindai" outline :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="secondary" label="Josemar Berbardo" :src="asset('avatar.jpg')" />
                </div>
            </div>
        </div>
    </div>

    {{-- Avatar com vários tamanhos --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#size-avatar">
                Avatar com vários tamanhos
            </button>
        </h2>
        <div id="size-avatar" class="accordion-collapse collapse" data-bs-parent="#avatar">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-widget.avatar type="pink" label="Ailton Senna" class="avatar-xs" />
                    <x-widget.avatar type="pink" label="Ailton da Silva" class="avatar-sm" outline />
                    <x-widget.avatar type="pink" label="Guilherme da Paixão" />
                    <x-widget.avatar type="pink" label="Josemar Berbardo" class="avatar-lg" outline />
                    <x-widget.avatar type="pink" label="João Manuel Quindai" class="avatar-xl" />
                    <x-widget.avatar type="pink" label="João Pedro" class="avatar-xxl" outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.avatar type="pink" label="Ailton Senna" class="avatar-xs" :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="pink" label="Ailton da Silva" class="avatar-sm" outline
                        :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="pink" label="Guilherme da Paixão" :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="pink" label="Josemar Berbardo" class="avatar-lg" outline
                        :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="pink" label="João Manuel Quindai" class="avatar-xl"
                        :src="asset('avatar.jpg')" />

                    <x-widget.avatar type="pink" label="João Pedro" class="avatar-xxl" outline
                        :src="asset('avatar.jpg')" />
                </div>
            </div>
        </div>
    </div>

</div>
