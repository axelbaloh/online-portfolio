<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/di.js'])

    <title>{{ $title ?? 'Portfolio Axel Baloh' }}</title>
</head>
<body class="min-h-screen flex flex-col">
    <header class="bg-red-900 text-white p-6">
        <nav class="flex gap-3">
            <a href="{{ route('home') }}" class="text-white hover:text-gray-300">Accueil</a>
            <a href="{{ route('web') }}" class="text-white hover:text-gray-300">Développement Web</a>
            <a href="{{ route('di') }}" class="text-white hover:text-gray-300">Dispositifs interactifs</a>
            <a href="{{ route('ux') }}" class="text-white hover:text-gray-300">UX</a>
            <a href="{{ route('gestion-projet') }}" class="text-white hover:text-gray-300">Gestion de projets</a>
        </nav>
    </header>
    <main class="grow">
        {{ $slot }}
    </main>
        <footer class="bg-red-900 text-white py-3 mt-auto">
            <div class=" mx-5 px-6 flex flex-row-reverse justify-center gap-70">
                <p class="text-center text-[12px] w-65 flex items-end">
                    Développé par BALOH Axel sur <span class="font-bold">Laravel</span>
                </p>
                <div class="flex">
                    <a href="https://www.linkedin.com/in/axel-baloh/" target="_blank"><img src="{{ asset('storage/images/logo-linkedin.svg') }}" alt="lien vers ma page LinkedIn" class="w-6 h-6"></a>
                    <a href="https://github.com/axelbaloh" target="_blank"><img src="{{ asset('storage/images/github-logo.svg') }}" alt="lien vers ma page LinkedIn" class="w-6 h-6"></a>
                </div>
            </div>
        </footer>
    </body>
</html>
