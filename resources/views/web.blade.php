<x-layout.base>
    <div class="mx-auto max-w-7xl px-6 py-12">
        {{-- FRONT --}}
        <section class="mb-24">
            <h2 class="mb-8 text-4xl font-bold text-slate-800">
                Front
            </h2>
            <div class="relative">
                <div class="swiper frontSwiper">
                    <div class="swiper-wrapper">
                        @foreach($projects['front'] as $project)
                            <x-project-card :project="$project"/>
                        @endforeach
                    </div>
                </div>
                <div class="front-prev absolute left-4 top-1/2 z-30 flex h-14 w-14 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-white text-2xl shadow-xl">
                    ←
                </div>

                <div class="front-next absolute right-4 top-1/2 z-30 flex h-14 w-14 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-white text-2xl shadow-xl">
                    →
                </div>
            </div>
        </section>
        {{-- BACK --}}
        <section>
            <h2 class="mb-8 text-4xl font-bold text-slate-800">
                Back
            </h2>
            <div class="relative">
                <div class="swiper backSwiper">
                    <div class="swiper-wrapper">
                        @foreach($projects['back'] as $project)
                            <x-project-card :project="$project"/>
                        @endforeach
                    </div>
                </div>
                <div class="back-prev absolute left-4 top-1/2 z-30 flex h-14 w-14 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-white text-2xl shadow-xl">
                    ←
                </div>

                <div class="back-next absolute right-4 top-1/2 z-30 flex h-14 w-14 -translate-y-1/2 cursor-pointer items-center justify-center rounded-full bg-white text-2xl shadow-xl">
                    →
                </div>
            </div>
        </section>
    </div>
</x-layout.base>