
<x-layout.base title="Portfolio Axel Baloh - Dispositifs interactifs">
    <div id="instructions-overlay">
        <div class="instructions-box">
            <h1 class="text-center text-3xl m-4 font-bold text-slate-800">Mes projets de dispositifs intéractifs</h1>
            <h2>Contrôles</h2>

            <p><span class="font-bold">ZQSD</span> : se déplacer</p>
            <p><span class="font-bold">Clic gauche maintenu</span> : orienter la caméra</p>

            <button id="close-instructions">
                J'ai compris
            </button>
        </div>
    </div>
    <div
        id="painting-info"
        class="absolute bottom-5 left-5 bg-white p-3.75 max-w-87.5 hidden z-1000"
    >
        <h2 id="painting-title" class="text-2xl font-bold p-4 text-center"></h2>
        <h3 id="painting-stack" class="text-xl font-bold p-4 text-center"></h3>
        <p id="painting-description" class="text-center p-4"></p>
    </div>
    <div id="container" class="w-full h-screen"></div>
</x-layout.base>