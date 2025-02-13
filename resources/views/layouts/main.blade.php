<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Si tu utilises Vite --}}
    @livewireStyles
    @filamentStyles {{-- Charge les styles de Filament --}}
</head>
<body class="filament-body bg-gray-100">

    <div class="min-h-screen flex flex-col">
        @yield('content') {{-- Ici, on affiche le contenu des autres vues --}}
    </div>

    @livewireScripts
    @filamentScripts {{-- Charge les scripts de Filament --}}
</body>
</html>
