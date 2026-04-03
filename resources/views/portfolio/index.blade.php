<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Ana Tavares</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0d0d0d] text-[#f5f2ec] min-h-screen px-6 py-16 font-mono">

    @include('partials.nav')

    <main class="w-full max-w-5xl mx-auto">
        <p class="text-[#f59e0b] text-xs tracking-widest uppercase mb-8">Portfolio</p>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <a href="/portfolio/outsystems" class="group block bg-zinc-900 rounded-lg p-8 flex items-center justify-center transition duration-150 hover:brightness-125">
                <img src="{{ asset('images/outsystems-logo.svg') }}" alt="OutSystems" class="h-8 opacity-80 group-hover:opacity-100 transition-opacity duration-150">
            </a>
            <a href="/portfolio/tigerdata" class="group block bg-zinc-900 rounded-lg p-8 flex items-center justify-center transition duration-150 hover:brightness-125">
                <img src="{{ asset('images/tigerdata-logo.svg') }}" alt="TigerData" class="h-8 opacity-80 group-hover:opacity-100 transition-opacity duration-150">
            </a>
            <a href="/portfolio/laravel" class="group block bg-zinc-900 rounded-lg p-8 flex items-center justify-center transition duration-150 hover:brightness-125">
                <img src="{{ asset('images/laravel-logo.svg') }}" alt="Laravel" class="h-8 opacity-80 group-hover:opacity-100 transition-opacity duration-150">
            </a>
        </div>
    </main>

    <footer class="text-center text-zinc-700 text-xs py-12 font-mono tracking-widest">
        &copy; {{ date('Y') }} Ana Tavares
    </footer>

</body>
</html>
