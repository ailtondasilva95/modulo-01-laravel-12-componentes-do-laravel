<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Author --}}
    <meta name="author" content="Ailton Domingos Dias da Silva">

    {{-- Description --}}
    <meta name="description" content="{{ __('lang.description') }}">

    {{-- CSRF-TOLKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <meta name="title" content="{{ config('app.name') }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    {{-- Styles Vite --}}
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])

    {{-- Custom Styles --}}
    @stack('css')

</head>

<body>

    {{-- Content --}}
    @yield('content')

    {{-- Scripts Vite --}}
    @vite(['resources/js/app.js'])

    {{-- Custom Scripts --}}
    @stack('scripts')

</body>

</html>
