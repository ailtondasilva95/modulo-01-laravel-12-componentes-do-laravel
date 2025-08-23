<x-layout.app>

    @section('title', 'Tabelas responsivas')

    @section('content')
        <div class="container my-3">
            <div class="card">
                <div class="card-header text-center user-select-none">
                    <h2 class="card-title text-orange-500">{{ config('app.name') }}</h2>
                    <p class="card-text text-orange-300">
                        {{ __('Laravel Components using Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine, FlatPickr, FullCalendar, SweetAlert2.js and Chart.js') }}
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-sm btn-default">Home</a>
                    <a href="{{ route('inputs') }}" class="btn btn-sm btn-default">Componentes de entrada de
                        dados (inputs)</a>
                    <a href="{{ route('chart') }}" class="btn btn-sm btn-default">Componente do Chart.JS</a>
                    <a href="{{ route('fullcalendar') }}" class="btn btn-sm btn-default">Componente do Full
                        Calendar</a>
                </div>
                <div class="card-body">
                    <div class="accordion mb-2" id="tables">

                        {{-- Tabela principal --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#main-tables">
                                    Tabela principal
                                </button>
                            </h2>
                            <div id="main-tables" class="accordion-collapse collapse" data-bs-parent="#tables">
                                <div class="accordion-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="my-auto fw-bold">
                                                <i class="bi bi-person"></i> Usuários do Sistema
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center g-2 divider-row">
                                                {{-- ORDER BY --}}
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="row g-1">
                                                        <div class="col-6">
                                                            <select name="orderby" id="orderby"
                                                                class="form-select form-select-sm">
                                                                <option value="">Nenhum</option>
                                                                <option value="name">Nome</option>
                                                                <option value="email">E-Mail</option>
                                                                <option value="created_at">Data de Registo</option>
                                                                <option value="updated_at">Última Atualização</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <select name="asc_desc" id="asc_desc"
                                                                class="form-select form-select-sm">
                                                                <option value="asc">Ascendente</option>
                                                                <option value="desc" selected>Descendente</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Filters --}}
                                                <div
                                                    class="btn-group btn-group-sm col-12 text-center col-md-auto ms-md-auto">
                                                    <button class="btn btn-default filter" data-filter="not_deleted">
                                                        <i class="bi bi-person-check"></i> Ativos
                                                    </button>
                                                    <button class="btn btn-default filter active" data-filter="">
                                                        <i class="bi bi-people"></i> Todos
                                                    </button>
                                                    <button class="btn btn-default filter" data-filter="deleted">
                                                        <i class="bi bi-person-dash"></i> Suspensos
                                                    </button>
                                                </div>

                                                {{-- SEARCH --}}
                                                <div class="col-12 col-md-auto ms-md-auto">
                                                    <div class="input-group input-group-sm">
                                                        <input type="search" id="search" name="search"
                                                            placeholder="pesquisar" class="form-control" />
                                                        <label class="input-group-text" for="search">
                                                            <i class="bi bi-search"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            {{-- TABLE --}}
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">E-Mail</th>
                                                            <th scope="col">Data de Criação</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        @forelse($users as $user)
                                                            <tr>
                                                                <th scope="row">{{ $user->id }}</th>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>{{ $user->created_at }}</td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end gap-1">
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-outline-info"
                                                                            data-bs-toggle="tooltip" title="Visualizar">
                                                                            <i class="bi bi-eye"></i>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-outline-warning"
                                                                            data-bs-toggle="tooltip" title="Editar">
                                                                            <i class="bi bi-pencil"></i>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-outline-danger"
                                                                            data-bs-toggle="tooltip" title="Excluir">
                                                                            <i class="bi bi-trash"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="5" class="text-muted text-center">Nenhum
                                                                    registro
                                                                    encontrado.</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                    <caption>
                                                        {{ $users->onEachSide(0)->links('pagination::bootstrap-5') }}
                                                    </caption>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Tabela simples (só ordenação) esquerdo --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#simple1-tables">
                                    Tabela simples (só ordenação) esquerdo
                                </button>
                            </h2>
                            <div id="simple1-tables" class="accordion-collapse collapse" data-bs-parent="#tables">
                                <div class="accordion-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="my-auto fw-bold">
                                                <i class="bi bi-person"></i> Usuários do Sistema
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            {{-- ORDER BY --}}
                                            <div class="row align-items-center g-2 divider-row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="row g-1">
                                                        <div class="col-6">
                                                            <select name="orderby" id="orderby"
                                                                class="form-select form-select-sm">
                                                                <option value="">Nenhum</option>
                                                                <option value="name">Nome</option>
                                                                <option value="email">E-Mail</option>
                                                                <option value="created_at">Data de Registo</option>
                                                                <option value="updated_at">Última Atualização</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <select name="asc_desc" id="asc_desc"
                                                                class="form-select form-select-sm">
                                                                <option value="asc">Ascendente</option>
                                                                <option value="desc" selected>Descendente</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            {{-- TABLE --}}
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">E-Mail</th>
                                                            <th scope="col" class="text-end">Data de Criação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr>
                                                            <td colspan="4" class="text-muted text-center">
                                                                Nenhum registro encontrado.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Tabela simples (só filtro) centro --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#simple2-tables">
                                    Tabela simples (só filtro) centro
                                </button>
                            </h2>
                            <div id="simple2-tables" class="accordion-collapse collapse" data-bs-parent="#tables">
                                <div class="accordion-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="my-auto fw-bold">
                                                <i class="bi bi-person"></i> Usuários do Sistema
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            {{-- Filters --}}
                                            <div class="d-flex justify-content-center">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-default filter" data-filter="not_deleted">
                                                        <i class="bi bi-person-check"></i> Ativos
                                                    </button>
                                                    <button class="btn btn-default filter active" data-filter="">
                                                        <i class="bi bi-people"></i> Todos
                                                    </button>
                                                    <button class="btn btn-default filter" data-filter="deleted">
                                                        <i class="bi bi-person-dash"></i> Suspensos
                                                    </button>
                                                </div>
                                            </div>
                                            <hr>
                                            {{-- TABLE --}}
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">E-Mail</th>
                                                            <th scope="col" class="text-end">Data de Criação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr>
                                                            <td colspan="4" class="text-muted text-center">
                                                                Nenhum registro encontrado.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Tabela simples (só campo de pesquisa) direito --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#simple3-tables">
                                    Tabela simples (só campo de pesquisa) direito
                                </button>
                            </h2>
                            <div id="simple3-tables" class="accordion-collapse collapse" data-bs-parent="#tables">
                                <div class="accordion-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="my-auto fw-bold">
                                                <i class="bi bi-person"></i> Usuários do Sistema
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center g-2 divider-row">
                                                {{-- SEARCH --}}
                                                <div class="col-12 col-md-auto d-flex justify-content-end ms-md-auto">
                                                    <div class="input-group input-group-sm w-100 w-md-auto">
                                                        <input type="search" id="search" name="search"
                                                            placeholder="pesquisar" class="form-control" />
                                                        <label class="input-group-text" for="search">
                                                            <i class="bi bi-search"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            {{-- TABLE --}}
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">E-Mail</th>
                                                            <th scope="col" class="text-end">Data de Criação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr>
                                                            <td colspan="4" class="text-muted text-center">
                                                                Nenhum registro encontrado.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Tabela simples (só ordenação e campo de pesquisa) esquerdo e direito --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#simple4-tables">
                                    Tabela simples (só ordenação e campo de pesquisa) esquerdo e direito
                                </button>
                            </h2>
                            <div id="simple4-tables" class="accordion-collapse collapse" data-bs-parent="#tables">
                                <div class="accordion-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="my-auto fw-bold">
                                                <i class="bi bi-person"></i> Usuários do Sistema
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center g-2 divider-row">
                                                {{-- ORDER BY --}}
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="row g-1">
                                                        <div class="col-6">
                                                            <select name="orderby" id="orderby"
                                                                class="form-select form-select-sm">
                                                                <option value="name">Nome</option>
                                                                <option value="email">E-Mail</option>
                                                                <option value="updated_at" selected>Nenhum</option>
                                                                <option value="created_at">Data de Registo</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <select name="asc_desc" id="asc_desc"
                                                                class="form-select form-select-sm">
                                                                <option value="asc">Ascendente</option>
                                                                <option value="desc" selected>Descendente</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- SEARCH --}}
                                                <div class="col-12 col-md-auto d-flex justify-content-end ms-md-auto">
                                                    <div class="input-group input-group-sm w-100 w-md-auto">
                                                        <input type="search" id="search" name="search"
                                                            placeholder="pesquisar" class="form-control" />
                                                        <label class="input-group-text" for="search">
                                                            <i class="bi bi-search"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            {{-- TABLE --}}
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">E-Mail</th>
                                                            <th scope="col" class="text-end">Data de Criação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr>
                                                            <td colspan="4" class="text-muted text-center">
                                                                Nenhum registro encontrado.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Tabela simples (só ordenação e filtro) esquerdo e direito --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#simple5-tables">
                                    Tabela simples (só ordenação e filtro) esquerdo e direito
                                </button>
                            </h2>
                            <div id="simple5-tables" class="accordion-collapse collapse" data-bs-parent="#tables">
                                <div class="accordion-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="my-auto fw-bold">
                                                <i class="bi bi-person"></i> Usuários do Sistema
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center g-2 divider-row">
                                                {{-- ORDER BY --}}
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="row g-1">
                                                        <div class="col-6">
                                                            <select name="orderby" id="orderby"
                                                                class="form-select form-select-sm">
                                                                <option value="name">Nome</option>
                                                                <option value="email">E-Mail</option>
                                                                <option value="updated_at" selected>Nenhum</option>
                                                                <option value="created_at">Data de Registo</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <select name="asc_desc" id="asc_desc"
                                                                class="form-select form-select-sm">
                                                                <option value="asc">Ascendente</option>
                                                                <option value="desc" selected>Descendente</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Filters --}}
                                                <div
                                                    class="btn-group btn-group-sm col-12 text-center col-md-auto ms-md-auto">
                                                    <button class="btn btn-default filter" data-filter="not_deleted">
                                                        <i class="bi bi-person-check"></i> Ativos
                                                    </button>
                                                    <button class="btn btn-default filter active" data-filter="">
                                                        <i class="bi bi-people"></i> Todos
                                                    </button>
                                                    <button class="btn btn-default filter" data-filter="deleted">
                                                        <i class="bi bi-person-dash"></i> Suspensos
                                                    </button>
                                                </div>
                                            </div>
                                            <hr>
                                            {{-- TABLE --}}
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">E-Mail</th>
                                                            <th scope="col" class="text-end">Data de Criação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr>
                                                            <td colspan="4" class="text-muted text-center">
                                                                Nenhum registro encontrado.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Tabela simples (só filtro e campo de pesquisa) esquerdo e direito --}}
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#simple6-tables">
                                    Tabela simples (só filtro e campo de pesquisa) esquerdo e direito
                                </button>
                            </h2>
                            <div id="simple6-tables" class="accordion-collapse collapse" data-bs-parent="#tables">
                                <div class="accordion-body">

                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="my-auto fw-bold">
                                                <i class="bi bi-person"></i> Usuários do Sistema
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row align-items-center g-2 divider-row">
                                                {{-- Filters --}}
                                                <div class="btn-group btn-group-sm col-12 text-center col-md-auto">
                                                    <button class="btn btn-default filter" data-filter="not_deleted">
                                                        <i class="bi bi-person-check"></i> Ativos
                                                    </button>
                                                    <button class="btn btn-default filter active" data-filter="">
                                                        <i class="bi bi-people"></i> Todos
                                                    </button>
                                                    <button class="btn btn-default filter" data-filter="deleted">
                                                        <i class="bi bi-person-dash"></i> Suspensos
                                                    </button>
                                                </div>

                                                {{-- SEARCH --}}
                                                <div class="col-12 col-md-auto ms-md-auto">
                                                    <div class="input-group input-group-sm">
                                                        <input type="search" id="search" name="search"
                                                            placeholder="pesquisar" class="form-control" />
                                                        <label class="input-group-text" for="search">
                                                            <i class="bi bi-search"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            {{-- TABLE --}}
                                            <div class="table-responsive">
                                                <table id="table" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">E-Mail</th>
                                                            <th scope="col" class="text-end">Data de Criação</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        <tr>
                                                            <td colspan="4" class="text-muted text-center">
                                                                Nenhum registro encontrado.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-layout.app>



@push('scripts')
    <script type="module">
        $(() => {
            /*
             * filtro na tabela
             * Atualiza a URL com os novos parâmetros da busca
             */
            function fetchModels() { // Função para buscar os modelos (dados da tabela)
                const params = { // Obtém os valores dos filtros e da paginação
                    orderby: $('#orderby').val(), // Critério de ordenação
                    asc_desc: $('#asc_desc').val(), // Direção da ordenação
                    filter: $('.filter.active').data('filter') || '', // Filtro ativo
                    search: $('#search').val().trim(), // Valor do campo de busca
                    // page: $('.pagination .active a').attr('href')?.split('page=')[1] || 1 // Página ativa
                };

                // Atualiza a URL com os novos parâmetros
                const url = new URL(window.location.href);
                Object.entries(params).forEach(([key, value]) => url.searchParams.set(key,
                    value)); // Define os parâmetros na URL
                window.history.pushState({}, '', url); // Atualiza a URL sem recarregar a página

                // // Atualiza a tabela com os novos
                // $.get(@json(URL::current()), params, function(data) {
                //     $('#table').html(data);
                //     // $('#table tbody').html(data); // Só troca o corpo da tabela
                // });
            }

            // Evento de clique nos filtros
            if ($('.filter').length) {
                $('.filter').on('click', function() {
                    $('.filter').removeClass('active'); // Remove classe ativa de outros filtros
                    $(this).addClass('active'); // Ativa o filtro clicado
                    fetchModels(); // Atualiza a tabela
                });
            }

            // Dispara a busca ao digitar no search ou mudar valores nos orderby e asc_desc
            if ($('#search')) {
                $('#orderby, #asc_desc, #search').on('input', fetchModels);
            }

            // Evento de clique na paginação
            if ($('.pagination a')) {
                // $(document).on('click', '.pagination a', function(event) {
                //     event.preventDefault(); // Impede o carregamento padrão do link
                //     $('.pagination .active').removeClass(
                //         'active'); // Remove a classe ativa da página anterior
                //     $(this).parent().addClass('active'); // Adiciona classe ativa na nova página
                //     fetchModels(); // Atualiza a tabela com a nova página
                // });

                $(document).on('click', '.pagination a', function(e) {
                    e.preventDefault();
                    $(this).parent().addClass('active').siblings().removeClass('active');
                    fetchModels();
                });
            }
        });
    </script>
@endpush
