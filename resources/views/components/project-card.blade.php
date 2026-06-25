<div class="swiper-slide">

    <div class="mx-auto max-w-4xl overflow-hidden rounded-2xl bg-white shadow-xl">

        {{-- MEDIA --}}
        <div class="relative">

            @if($project['type'] === 'image')

                <img
                    src="{{ Storage::url($project['media']) }}"
                    alt="{{ $project['title'] }}"
                    class="h-125 w-full object-cover"
                >

            @else

                <iframe
                    class="h-125 w-full"
                    src="https://www.youtube-nocookie.com/embed/{{ $project['media'] }}?rel=0"
                    title="{{ $project['title'] }}"
                    frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>

            @endif

        </div>

        {{-- INFO ZONE --}}
        <div 
            class="group relative h-28 overflow-hidden"
            x-data="{ open: false }"
        >

            {{-- Bouton mobile --}}
            <button
                class="absolute right-2 top-2 z-20 rounded bg-white/90 px-2 py-1 text-xs font-semibold text-slate-800 shadow md:hidden"
                @click="open = !open"
                :aria-expanded="open.toString()"
            >
                <span x-show="!open">Détails</span>
                <span x-show="open">Titre</span>
            </button>

            {{-- TITRE --}}
            <div
                class="absolute inset-0 flex items-center justify-center bg-white transition md:group-hover:-translate-y-full md:transition-transform"
                :class="open ? 'hidden md:flex' : 'flex'"
            >
                <h3 class="px-4 text-center text-2xl font-bold text-slate-800">
                    {{ $project['title'] }}
                </h3>
            </div>

            {{-- DESCRIPTION + TAGS --}}
            <div
                class="absolute inset-0 bg-slate-900 p-4 text-white transition md:translate-y-full md:group-hover:translate-y-0"
                :class="open ? 'block md:block' : 'hidden md:block'"
            >
                <p class="text-sm leading-snug">
                    {{ $project['description'] }}
                </p>

                <div class="mt-3 flex flex-wrap gap-2">
                    @foreach($project['tags'] as $tag)
                        <span class="rounded-full bg-blue-500 px-3 py-1 text-xs font-medium">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

</div>