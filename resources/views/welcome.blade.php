<x-layout.base>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <!-- HERO -->
    <section
        id="hero"
        class="relative flex flex-col items-center h-screen justify-center bg-red-900"
    >
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 text-center">
            <h1 class="text-5xl text-white font-bold mb-4">
                Bienvenue sur le portfolio d'Axel
            </h1>

            <p class="text-xl text-gray-200 mb-12">
                Découvrez mes projets et compétences en développement web.
            </p>
        </div>

        <!-- Flèche -->
        <a
            href="#timeline"
            class="absolute bottom-10 animate-bounce text-white"
        >
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-10 h-10"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7" />
            </svg>
        </a>
    </section>

    <!-- FRISE CHRONOLOGIQUE -->
    <section id="timeline" class="bg-gray-900 py-24">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-white mb-20">
                Mon parcours
            </h2>

            <div class="relative">
                <!-- Ligne centrale -->
                <div class="absolute left-1/2 top-0 h-full w-1 bg-blue-500 transform -translate-x-1/2"></div>

                <!-- 2021 -->
                <div class="timeline-item relative flex items-center mb-16 opacity-0 -translate-x-20 transition-all duration-1000">
                    <div class="w-1/2 pr-12 text-right">
                        <h3 class="text-2xl font-bold text-blue-400">2021</h3>
                        <p class="text-gray-300">
                            Obtention d'un baccalauréat spécialités mathématiques et sciences physiques avec mention européenne.
                        </p>
                    </div>

                    <div class="w-6 h-6 bg-blue-500 rounded-full absolute left-1/2 -translate-x-1/2"></div>

                    <div class="w-1/2"></div>
                </div>

                <!-- Septembre 2021 - Juillet 2023 -->
                <div class="timeline-item relative flex items-center mb-16 opacity-0 translate-x-20 transition-all duration-1000">
                    <div class="w-1/2"></div>

                    <div class="w-6 h-6 bg-blue-500 rounded-full absolute left-1/2 -translate-x-1/2"></div>

                    <div class="w-1/2 pl-12">
                        <h3 class="text-2xl font-bold text-blue-400">Septembre 2021 - Juillet 2023</h3>
                        <p class="text-gray-300">

                        </p>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="timeline-item relative flex items-center mb-16 opacity-0 -translate-x-20 transition-all duration-1000">
                    <div class="w-1/2 pr-12 text-right">
                        <h3 class="text-2xl font-bold text-blue-400">Septembre 2023</h3>
                        <p class="text-gray-300">
                            Réorientation en <span class="uppercase">but mmi</span> afin d'obtenir davantage de compétences dans le modne du développement web et du développment de dispositifs intéractifs.
                        </p>
                    </div>

                    <div class="w-6 h-6 bg-blue-500 rounded-full absolute left-1/2 -translate-x-1/2"></div>

                    <div class="w-1/2"></div>
                </div>

                <!-- 2025 -->
                <div class="timeline-item relative flex items-center mb-16 opacity-0 translate-x-20 transition-all duration-1000">
                    <div class="w-1/2"></div>

                    <div class="w-6 h-6 bg-blue-500 rounded-full absolute left-1/2 -translate-x-1/2"></div>

                    <div class="w-1/2 pl-12">
                        <h3 class="text-2xl font-bold text-blue-400">2025</h3>
                        <p class="text-gray-300">
                            Choix du parcours Développement Web et dispositifs lors de la deuxième année du <span class="uppercase">but mmi</span> à Haguenau.
                        </p>
                    </div>
                </div>

                <!-- 2026 -->
                <div class="timeline-item relative flex items-center mb-16 opacity-0 -translate-x-20 transition-all duration-1000">
                    <div class="w-1/2 pr-12 text-right">
                        <h3 class="text-2xl font-bold text-blue-400">Septembre 2023</h3>
                        <p class="text-gray-300">
                            Réorientation en <span class="uppercase">but mmi</span> afin d'obtenir davantage de compétences dans le modne du développement web et du développment de dispositifs intéractifs.
                        </p>
                    </div>

                    <div class="w-6 h-6 bg-blue-500 rounded-full absolute left-1/2 -translate-x-1/2"></div>

                    <div class="w-1/2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPERIENCES -->
    <section class="bg-gray-800 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-center text-white mb-16">
                Mes expériences
            </h2>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- Carte 1 -->
                <article class="bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:scale-105 transition">
                    <img
                        src="{{ asset('storage/images/experience1.jpg') }}"
                        alt="Expérience 1"
                        class="w-full h-56 object-cover"
                    >

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">
                            La <span class="uppercase">mjc - mpt</span> Boris Vian au Konacker
                        </h3>

                        <p class="text-gray-400">
                            Stage et prestation pour la <span class="uppercase">mjc - mpt</span> Boris Vian au Konacker
                            en tant que développeur web, afin de modifier le site web Wix de la <span class="uppercase">MJC</span>,
                            en tant que graphiste, via la création d'affiches promotionnelles des activités,
                            et en tant que community manager, de par la gestion des réseaux de cette <span class="uppercase">MJC</span>.
                        </p>
                    </div>
                </article>

                <!-- Carte 2 -->
                <article class="bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:scale-105 transition">
                    <img
                        src="{{ asset('storage/images/experience2.jpg') }}"
                        alt="Expérience 2"
                        class="w-full h-56 object-cover"
                    >

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">
                            Stages au Laboratoire Icube à Illkirch
                        </h3>

                        <p class="text-gray-400">
                            J'ai réalisé deux stages au laboratoire d'Icube de Strasbourg, pour lesquels
                            le but était de réaliser une application de Réalité Virtuelle permettant
                            de prouver la corrélation entre l'intensité des émotions ressenties et les sentiments
                            d'immersion et d'appartenance à un espace virtuel.
                        </p>
                    </div>
                </article>

                <!-- Carte 3 -->
                <article class="bg-gray-900 rounded-xl overflow-hidden shadow-lg hover:scale-105 transition">
                    <img
                        src="{{ asset('storage/images/experience3.jpg') }}"
                        alt="Expérience 3"
                        class="w-full h-56 object-cover"
                    >

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3">
                            Si l'enfance m'était chantée
                        </h3>

                        <p class="text-gray-400">
                            Réalisation d'un stage dans une micro entreprise lors duquel le maitre de stage,
                            qui est aussi le client, m'a missionné de réaliser un site qui servirait de vitrine
                            pour l'intégralité de ses projets, mais servirait également de CMS et de plateforme de
                            démarchage via l'envoi de mail depuis ce même site.
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <script>
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }

        window.addEventListener('load', () => {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'instant'
            });
        });

        document.addEventListener('DOMContentLoaded', () => {

            const items = document.querySelectorAll('.timeline-item');

            const observer = new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        entry.target.classList.remove(
                            'opacity-0',
                            'translate-x-20',
                            '-translate-x-20'
                        );

                        entry.target.classList.add(
                            'opacity-100',
                            'translate-x-0'
                        );

                        observer.unobserve(entry.target);
                    }

                });

            }, {
                threshold: 0.2
            });

            items.forEach(item => observer.observe(item));

        });
    </script>

</x-layout.base>