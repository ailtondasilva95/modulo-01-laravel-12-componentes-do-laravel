<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF-TOLKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <meta name="title" content="{{ config('app.name') }}">

    {{-- Author --}}
    <meta name="author" content="Ailton Domingos Dias da Silva">

    {{-- Description --}}
    <meta name="description"
        content="{{ __('Laravel Components using Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine, FlatPickr, FullCalendar and SweetAlert2') }}">

    {{-- Language --}}
    <meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title', config('app.name'))</title>

    {{-- Vite --}}
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

    {{-- Custom Styles --}}
    @stack('css')

</head>

<body>

    {{-- Content --}}
    @yield('content')

    {{-- Custom Scripts --}}
    @stack('scripts')

    <script type="module">
        // 1. Inicializar todos tooltips
        $("[data-bs-toggle='tooltip']").each(function() {
            new bootstrap.Tooltip(this);
        });

        // 2. Inicializar todos popovers
        $("[data-bs-toggle='popover']").each(function() {
            new bootstrap.Popover(this);
        });

        const theme = document.documentElement.getAttribute("data-bs-theme") || "light";
        console.log(theme === "dark" ? "Tema escuro ativo" : "Tema claro ativo");
    </script>

</body>

</html>
