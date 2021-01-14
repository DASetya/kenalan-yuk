<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/addon.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-primary-gradient">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="header bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main class="pb-8 px-4 rounded-lg">
                {{ $slot }}
            </main>

            <footer class="hidden xs:flex fixed min-w-full bottom-0 footer">
                <div class="my-4">
                    <a href="{{ route('dashboard') }}" class="px-4 align-middle">
                        <i class="fas fa-home"></i>
                    </a>

                    <a href="{{ route('syukur.index') }}" class="px-4 align-middle">
                        <i class="fas fa-praying-hands"></i>
                    </a>

                    <a href="{{ route('mood.index') }}" class="px-4 align-middle">
                        <i class="fas fa-grin"></i>
                    </a>

                    <a href="{{ route('my-story.index') }}" class="px-4 align-middle">
                        <i class="fas fa-book"></i>
                    </a>

                    <a href="{{ route('psychologist.index') }}" class="px-4 align-middle">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </footer>
        </div>

        @stack('modals')

        @livewireScripts

        @yield('scripts')
    </body>
</html>
