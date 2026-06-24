<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/js/di.js'
    ])

    <title>{{ $title ?? 'Portfolio Axel Baloh' }}</title>
</head>

<body
    class="min-h-screen flex flex-col"
    data-page="{{ request()->routeIs('home') ? 'home' : 'other' }}"
>

    <!-- HEADER -->
    <header
        id="main-header"
        class="
            fixed top-0 left-0 w-full z-50 bg-red-900 text-white shadow-lg transition-all duration-500
            {{ request()->routeIs('home') ? '-translate-y-full opacity-0' : 'translate-y-0 opacity-100' }}
        "
    >
        <nav
            aria-label="Navigation principale"
            class="max-w-7xl mx-auto px-4 py-4"
        >
            <ul class="flex flex-wrap justify-center gap-4 md:gap-8">
                <li>
                    <a
                        href="{{ route('home') }}"
                        class="hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-white rounded px-2 py-1"
                    >
                        Accueil
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('web') }}"
                        class="hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-white rounded px-2 py-1"
                    >
                        Développement Web
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('di') }}"
                        class="hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-white rounded px-2 py-1"
                    >
                        Dispositifs interactifs
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('ux') }}"
                        class="hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-white rounded px-2 py-1"
                    >
                        UX
                    </a>
                </li>

                <li>
                    <a
                        href="{{ route('gestion-projet') }}"
                        class="hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-white rounded px-2 py-1"
                    >
                        Gestion de projets
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- CONTENU -->
    <main id="main-content" class="grow bg-red-100">
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <footer class="bg-red-900 text-white mt-auto">
        <div class="max-w-7xl mx-auto px-6 py-8">

            <div class="flex flex-col md:flex-row items-center justify-between gap-8">

                <!-- Identité -->
                <div class="text-center md:text-left">
                    <h2 class="font-semibold text-lg">
                        Axel Baloh
                    </h2>

                    <p class="text-sm text-red-100">
                        Développeur web & dispositifs interactifs
                    </p>
                </div>

                <!-- Contact -->
                <div class="flex flex-col items-center gap-4">

                    <a
                        href="mailto:axel.baloh@gmail.com"
                        aria-label="Envoyer un email à Axel Baloh"
                    >
                        📧 axel.baloh@email.com
                    </a>


                    <a href="{{ asset('storage/cv/CV_Baloh_Axel.pdf') }}" 
                        download
                        class="inline-flex items-center gap-2 bg-white text-red-900 px-4 py-2 rounded-lg font-medium hover:bg-red-100 transition focus:outline-none focus:ring-2 focus:ring-white"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 16v-8m0 8l-4-4m4 4l4-4M5 20h14"
                            />
                        </svg>

                        Télécharger mon CV
                    </a>

                </div>

                <!-- Réseaux -->
                <div class="flex items-center gap-5">

                    <a
                        href="https://www.linkedin.com/in/axel-baloh/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Profil LinkedIn d'Axel Baloh"
                        class="hover:opacity-75 transition focus:outline-none focus:ring-2 focus:ring-white rounded"
                    >
                        <img
                            src="{{ asset('storage/images/logo-linkedin.svg') }}"
                            alt=""
                            aria-hidden="true"
                            class="w-7 h-7 brightness-0 invert"
                        >
                    </a>

                    <a
                        href="https://github.com/axelbaloh"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Profil GitHub d'Axel Baloh"
                        class="hover:opacity-75 transition focus:outline-none focus:ring-2 focus:ring-white rounded"
                    >
                        <img
                            src="{{ asset('storage/images/github-logo.svg') }}"
                            alt=""
                            aria-hidden="true"
                            class="w-7 h-7 brightness-0 invert"
                        >
                    </a>

                </div>

            </div>

            <!-- Bas de footer -->
            <div class="mt-8 pt-4 border-t border-red-800 text-center text-xs text-red-100">
                Développé par BALOH Axel avec Laravel & Tailwind CSS
            </div>

        </div>
    </footer>
</body>
</html>