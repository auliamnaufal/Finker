<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#6777ef"/>
        <link rel="apple-touch-icon" href="{{ asset('storage/logo_bg.png') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/logo_bg.png') }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <livewire:styles />
    </head>
    <body class="font-sans antialiased max-w-lg mx-auto bg-gray-100 box-border">
        <div class="min-h-screen bg-white dark:bg-gray-900">
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>
                {{ $slot }}
            </main>

            @include('layouts.navigation')
        </div>

        <livewire:scripts />
        @livewireChartsScripts
        @livewire('livewire-ui-modal')

        <script src="{{ asset('/sw.js') }}"></script>
        <script>
            if (!navigator.serviceWorker.controller) {
                navigator.serviceWorker.register("/sw.js").then(function (reg) {
                    console.log("Service worker has been registered for scope: " + reg.scope);
                });
            }
        </script>

    </body>
</html>
