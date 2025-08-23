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
                    <x-avatar type="secondary" label="Ailton da Silva" />
                    <x-avatar type="primary" label="Ailton da Silva" />
                    <x-avatar type="warning" label="Ailton da Silva" />
                    <x-avatar type="success" label="Ailton da Silva" />
                    <x-avatar type="danger" label="Ailton da Silva" />
                    <x-avatar type="light" label="Ailton da Silva" />
                    <x-avatar type="dark" label="Ailton da Silva" />
                    <x-avatar type="info" label="Ailton da Silva" />
                </div>
                <div class="text-center mb-2">
                    <x-avatar type="secondary" label="Ailton da Silva" outline />
                    <x-avatar type="primary" label="Ailton da Silva" outline />
                    <x-avatar type="warning" label="Ailton da Silva" outline />
                    <x-avatar type="success" label="Ailton da Silva" outline />
                    <x-avatar type="danger" label="Ailton da Silva" outline />
                    <x-avatar type="light" label="Ailton da Silva" outline />
                    <x-avatar type="dark" label="Ailton da Silva" outline />
                    <x-avatar type="info" label="Ailton da Silva" outline />
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
                    <x-avatar type="yellow" label="Ailton da Silva" />
                    <x-avatar type="indigo" label="Ailton da Silva" />
                    <x-avatar type="purple" label="Ailton da Silva" />
                    <x-avatar type="orange" label="Ailton da Silva" />
                    <x-avatar type="green" label="Ailton da Silva" />
                    <x-avatar type="black" label="Ailton da Silva" />
                    <x-avatar type="blue" label="Ailton da Silva" />
                    <x-avatar type="gray" label="Ailton da Silva" />
                    <x-avatar type="teal" label="Ailton da Silva" />
                    <x-avatar type="cyan" label="Ailton da Silva" />
                    <x-avatar type="pink" label="Ailton da Silva" />
                    <x-avatar type="red" label="Ailton da Silva" />
                </div>
                <div class="text-center mb-2">
                    <x-avatar type="yellow" label="Ailton da Silva" outline />
                    <x-avatar type="indigo" label="Ailton da Silva" outline />
                    <x-avatar type="purple" label="Ailton da Silva" outline />
                    <x-avatar type="orange" label="Ailton da Silva" outline />
                    <x-avatar type="green" label="Ailton da Silva" outline />
                    <x-avatar type="black" label="Ailton da Silva" outline />
                    <x-avatar type="blue" label="Ailton da Silva" outline />
                    <x-avatar type="gray" label="Ailton da Silva" outline />
                    <x-avatar type="teal" label="Ailton da Silva" outline />
                    <x-avatar type="cyan" label="Ailton da Silva" outline />
                    <x-avatar type="pink" label="Ailton da Silva" outline />
                    <x-avatar type="red" label="Ailton da Silva" outline />
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
                    <x-avatar type="orange" label="João Manuel Quindai" outline :src="asset('images/avatar.jpg')" />

                    <x-avatar type="orange" label="Josemar Berbardo" :src="asset('images/avatar.jpg')" />

                    <x-avatar type="secondary" label="João Manuel Quindai" outline :src="asset('images/avatar.jpg')" />

                    <x-avatar type="secondary" label="Josemar Berbardo" :src="asset('images/avatar.jpg')" />
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
                    <x-avatar type="pink" label="Ailton Senna" class="avatar-xs" />
                    <x-avatar type="pink" label="Ailton da Silva" class="avatar-sm" outline />
                    <x-avatar type="pink" label="Guilherme da Paixão" />
                    <x-avatar type="pink" label="Josemar Berbardo" class="avatar-lg" outline />
                    <x-avatar type="pink" label="João Manuel Quindai" class="avatar-xl" />
                    <x-avatar type="pink" label="João Pedro" class="avatar-xxl" outline />
                </div>
                <div class="text-center mb-2">
                    <x-avatar type="pink" label="Ailton Senna" class="avatar-xs" :src="asset('images/avatar.jpg')" />

                    <x-avatar type="pink" label="Ailton da Silva" class="avatar-sm" outline :src="asset('images/avatar.jpg')" />

                    <x-avatar type="pink" label="Guilherme da Paixão" :src="asset('images/avatar.jpg')" />

                    <x-avatar type="pink" label="Josemar Berbardo" class="avatar-lg" outline :src="asset('images/avatar.jpg')" />

                    <x-avatar type="pink" label="João Manuel Quindai" class="avatar-xl" :src="asset('images/avatar.jpg')" />

                    <x-avatar type="pink" label="João Pedro" class="avatar-xxl" outline :src="asset('images/avatar.jpg')" />
                </div>
            </div>
        </div>
    </div>

</div>
