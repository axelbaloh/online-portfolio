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

                <video
                    controls
                    preload="metadata"
                    class="h-125 w-full bg-black object-contain"
                >
                    <source
                        src="{{ Storage::url($project['media']) }}"
                        type="video/mp4"
                    >
                </video>

            @endif

        </div>

        {{-- INFO ZONE (TITLE -> HOVER CONTENT) --}}
        <div class="group relative h-28 overflow-hidden">

            {{-- TITRE (visible par défaut, disparaît au hover) --}}
            <div
                class="absolute inset-0 flex items-center justify-center bg-white transition-transform duration-300 group-hover:-translate-y-full"
            >
                <h3 class="px-4 text-center text-2xl font-bold text-slate-800">
                    {{ $project['title'] }}
                </h3>
            </div>

            {{-- DESCRIPTION + TAGS (visible au hover) --}}
            <div
                class="absolute inset-0 translate-y-full bg-slate-900 p-4 text-white transition-transform duration-300 group-hover:translate-y-0"
            >

                <p class="text-sm leading-snug">
                    {{ $project['description'] }}
                </p>

                <div class="mt-3 flex flex-wrap gap-2">

                    @foreach($project['tags'] as $tag)

                        <span
                            class="rounded-full bg-blue-500 px-3 py-1 text-xs font-medium"
                        >
                            {{ $tag }}
                        </span>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</div>