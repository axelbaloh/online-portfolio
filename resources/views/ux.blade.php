<x-layout.base title="Portfolio Axel Baloh - UX">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-36 pb-12 sm:py-16">

        <!-- Header -->
        <header class="mb-10 sm:mb-12 text-center">
            <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">
                Compétences UX
            </h1>

            <p class="mt-3 text-sm sm:text-base text-gray-600 max-w-2xl mx-auto">
                Une sélection de mes compétences UX illustrées par des livrables concrets.
            </p>
        </header>

        <!-- Grid -->
        <section
            class="grid gap-4 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3"
            aria-label="Liste des compétences UX"
        >

            @foreach (config('ux') as $item)

                <article
                    class="bg-white border border-gray-200 rounded-2xl p-5 sm:p-6
                    shadow-sm hover:shadow-md hover:-translate-y-1
                    transition duration-200
                    focus-within:ring-2 focus-within:ring-indigo-500"
                >

                    <!-- Title -->
                    <h2 class="text-base sm:text-lg font-semibold text-gray-900">
                        {{ $item['title'] }}
                    </h2>

                    <!-- Description -->
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                        {{ $item['description'] }}
                    </p>

                    <!-- Link -->
                    <a
                        href="{{ $item['link'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-4 inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-800
                               focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 rounded"
                        aria-label="Voir le projet {{ $item['title'] }}"
                    >
                        Voir le projet
                        <span aria-hidden="true" class="ml-1">→</span>
                    </a>

                </article>

            @endforeach

        </section>

    </div>

</x-layout.base>