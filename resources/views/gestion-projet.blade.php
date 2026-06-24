
<x-layout.base>

<div class="h-full bg-slate-100 p-6 overflow-x-auto">

    <div class="flex gap-6 min-w-max">

        {{-- Epic --}}
        <section class="w-80 shrink-0">
            <div class="bg-white rounded-xl shadow-md border border-slate-200 overflow-hidden">

                <div class="bg-violet-600 p-6">
                    <h2 class="font-bold text-lg text-white">
                        Gestion de projet traditrionnelle
                    </h2>

                    <div class="flex gap-2 mt-3">
                        <span class="px-2 py-1 text-xs rounded-full bg-white/20 text-white">
                            3 compétences
                        </span>

                        <span class="px-2 py-1 text-xs rounded-full bg-green-500 text-white">
                            Compétence utile
                        </span>
                    </div>
                </div>

                <ul class="p-3 space-y-3">

                    <li class="bg-white border rounded-lg p-4 shadow-sm hover:shadow-md transition">
                        <div class="flex justify-between items-start gap-2">
                            <h3 class="font-semibold text-slate-800">
                                Méthode RACI
                            </h3>

                            <span class="text-xs px-2 py-1 rounded bg-green-100 text-green-700">
                                BUT MMI 1
                            </span>
                        </div>
                        <div class="mt-3">
                            <p class="text-xs text-slate-500 mb-1">
                                niveau de compétence
                            </p>
                            <div class="h-2 bg-slate-200 rounded-full">
                                <div class="h-2 w-2/3 bg-yellow-300 rounded-full"></div>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border rounded-lg p-4 shadow-sm hover:shadow-md transition">
                        <div class="flex justify-between">
                            <h3 class="font-semibold text-slate-800">
                                Gant Project
                            </h3>

                            <span class="text-xs px-2 py-1 rounded bg-green-100 text-green-700">
                                BUT MMI 1
                            </span>
                        </div>

                        <div class="mt-3">
                            <p class="text-xs text-slate-500 mb-1">
                                niveau de compétence
                            </p>
                            <div class="h-2 bg-slate-200 rounded-full">
                                <div class="h-2 w-1/2 bg-yellow-500 rounded-full"></div>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border rounded-lg p-4 shadow-sm hover:shadow-md transition">      
                        <div class="flex justify-between">
                            <h3 class="font-semibold text-slate-800">
                                Budgetiser un projet
                            </h3>
                            <div>
                                <span class="text-xs px-2 py-1 rounded bg-green-100 text-green-700">
                                    BUT MMI 1
                                </span>
                                <span class="text-xs px-2 py-1 rounded bg-blue-100 text-blue-700">
                                    BUT MMI 3
                                </span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-xs text-slate-500 mb-1">
                                niveau de compétence
                            </p>
                            <div class="h-2 bg-slate-200 rounded-full">
                                <div class="h-2 w-3/4 bg-green-500 rounded-full"></div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>


        {{-- Epic --}}
        <section class="w-80 shrink-0">
            <div class="bg-white rounded-xl shadow-md border border-slate-200 overflow-hidden">

                <div class="bg-blue-600 p-4">
                    <h2 class="font-bold text-lg text-white">
                        Gestion de projet agile
                    </h2>

                    <div class="flex gap-2 mt-3">
                        <span class="px-2 py-1 text-xs rounded-full bg-white/20 text-white">
                            3 stories
                        </span>

                        <span class="px-2 py-1 text-xs rounded-full bg-red-500 text-white">
                            Compétence requise
                        </span>
                    </div>
                </div>

                <ul class="p-3 space-y-3">

                    <li class="bg-white border rounded-lg p-4 shadow-sm">
                        <h3 class="font-semibold text-slate-800">
                            Scrum
                        </h3>
                    </li>

                    <li class="bg-white border rounded-lg p-4 shadow-sm">
                        <h3 class="font-semibold text-slate-800">
                            Kanban  
                        </h3>
                    </li>

                    <li class="bg-white border rounded-lg p-4 shadow-sm">
                        <h3 class="font-semibold text-slate-800">
                            Archivage des projets
                        </h3>
                    </li>

                </ul>
            </div>
        </section>
    </div>

</div>

</x-layout.base>
