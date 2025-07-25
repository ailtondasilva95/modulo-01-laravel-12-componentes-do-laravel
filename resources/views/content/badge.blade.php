<div class="mb-2 accordion" id="badges">

    {{-- Badges com as cores principais do bootstrap --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#main-badges">
                Badges com as cores principais do bootstrap
            </button>
        </h2>
        <div id="main-badges" class="accordion-collapse collapse" data-bs-parent="#badges">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-widget.badge type="secondary" label="secondary" />
                    <x-widget.badge type="primary" label="primary" />
                    <x-widget.badge type="warning" label="warning" />
                    <x-widget.badge type="success" label="success" />
                    <x-widget.badge type="danger" label="danger" />
                    <x-widget.badge type="light" label="light" />
                    <x-widget.badge type="dark" label="dark" />
                    <x-widget.badge type="info" label="info" />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="secondary" label="secondary" outline />
                    <x-widget.badge type="primary" label="primary" outline />
                    <x-widget.badge type="warning" label="warning" outline />
                    <x-widget.badge type="success" label="success" outline />
                    <x-widget.badge type="danger" label="danger" outline />
                    <x-widget.badge type="light" label="light" outline />
                    <x-widget.badge type="dark" label="dark" outline />
                    <x-widget.badge type="info" label="info" outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="secondary" label="secondary" pill />
                    <x-widget.badge type="primary" label="primary" pill />
                    <x-widget.badge type="warning" label="warning" pill />
                    <x-widget.badge type="success" label="success" pill />
                    <x-widget.badge type="danger" label="danger" pill />
                    <x-widget.badge type="light" label="light" pill />
                    <x-widget.badge type="dark" label="dark" pill />
                    <x-widget.badge type="info" label="info" pill />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="secondary" label="secondary" pill outline />
                    <x-widget.badge type="primary" label="primary" pill outline />
                    <x-widget.badge type="warning" label="warning" pill outline />
                    <x-widget.badge type="success" label="success" pill outline />
                    <x-widget.badge type="danger" label="danger" pill outline />
                    <x-widget.badge type="light" label="light" pill outline />
                    <x-widget.badge type="dark" label="dark" pill outline />
                    <x-widget.badge type="info" label="info" pill outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="success" label="success" icon="github" />
                    <x-widget.badge type="success" label="success" icon="github" pill outline />
                    <x-widget.badge type="success" label="success" icon="github" pill />
                    <x-widget.badge type="success" label="success" icon="github" outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="success" icon="github" />
                    <x-widget.badge type="success" icon="github" pill outline />
                    <x-widget.badge type="success" icon="github" pill />
                    <x-widget.badge type="success" icon="github" outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="success" icon="github" circle outline />
                    <x-widget.badge type="success" icon="github" circle />
                </div>
            </div>
        </div>
    </div>

    {{-- Badges com cores personalizadas --}}
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#custom-badges">
                Badges com cores personalizadas
            </button>
        </h2>
        <div id="custom-badges" class="accordion-collapse collapse" data-bs-parent="#badges">
            <div class="accordion-body">
                <div class="text-center mb-2">
                    <x-widget.badge type="yellow" label="yellow" />
                    <x-widget.badge type="indigo" label="indigo" />
                    <x-widget.badge type="purple" label="purple" />
                    <x-widget.badge type="orange" label="orange" />
                    <x-widget.badge type="green" label="green" />
                    <x-widget.badge type="black" label="black" />
                    <x-widget.badge type="blue" label="blue" />
                    <x-widget.badge type="gray" label="gray" />
                    <x-widget.badge type="teal" label="teal" />
                    <x-widget.badge type="cyan" label="cyan" />
                    <x-widget.badge type="pink" label="pink" />
                    <x-widget.badge type="red" label="red" />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="yellow" label="yellow" outline />
                    <x-widget.badge type="indigo" label="indigo" outline />
                    <x-widget.badge type="purple" label="purple" outline />
                    <x-widget.badge type="orange" label="orange" outline />
                    <x-widget.badge type="green" label="green" outline />
                    <x-widget.badge type="black" label="black" outline />
                    <x-widget.badge type="blue" label="blue" outline />
                    <x-widget.badge type="gray" label="gray" outline />
                    <x-widget.badge type="teal" label="teal" outline />
                    <x-widget.badge type="cyan" label="cyan" outline />
                    <x-widget.badge type="pink" label="pink" outline />
                    <x-widget.badge type="red" label="red" outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="yellow" label="yellow" pill />
                    <x-widget.badge type="indigo" label="indigo" pill />
                    <x-widget.badge type="purple" label="purple" pill />
                    <x-widget.badge type="orange" label="orange" pill />
                    <x-widget.badge type="green" label="green" pill />
                    <x-widget.badge type="black" label="black" pill />
                    <x-widget.badge type="blue" label="blue" pill />
                    <x-widget.badge type="gray" label="gray" pill />
                    <x-widget.badge type="teal" label="teal" pill />
                    <x-widget.badge type="cyan" label="cyan" pill />
                    <x-widget.badge type="pink" label="pink" pill />
                    <x-widget.badge type="red" label="red" pill />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="yellow" label="yellow" pill outline />
                    <x-widget.badge type="indigo" label="indigo" pill outline />
                    <x-widget.badge type="purple" label="purple" pill outline />
                    <x-widget.badge type="orange" label="orange" pill outline />
                    <x-widget.badge type="green" label="green" pill outline />
                    <x-widget.badge type="black" label="black" pill outline />
                    <x-widget.badge type="blue" label="blue" pill outline />
                    <x-widget.badge type="gray" label="gray" pill outline />
                    <x-widget.badge type="teal" label="teal" pill outline />
                    <x-widget.badge type="cyan" label="cyan" pill outline />
                    <x-widget.badge type="pink" label="pink" pill outline />
                    <x-widget.badge type="red" label="red" pill outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="orange" label="orange" icon="github" />
                    <x-widget.badge type="orange" label="orange" icon="github" pill outline />
                    <x-widget.badge type="orange" label="orange" icon="github" pill />
                    <x-widget.badge type="orange" label="orange" icon="github" outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="orange" icon="github" />
                    <x-widget.badge type="orange" icon="github" pill outline />
                    <x-widget.badge type="orange" icon="github" pill />
                    <x-widget.badge type="orange" icon="github" outline />
                </div>
                <div class="text-center mb-2">
                    <x-widget.badge type="orange" icon="github" circle outline />
                    <x-widget.badge type="orange" icon="github" circle />
                </div>
            </div>
        </div>
    </div>

</div>
