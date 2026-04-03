<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Ana Tavares</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0d0d0d] text-[#f5f2ec] min-h-screen px-6 py-16 font-mono">

    <main class="w-full max-w-3xl mx-auto">

        <a href="/" class="inline-flex items-center gap-2 text-zinc-400 hover:text-[#f59e0b] text-sm transition-colors duration-150 mb-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            Back
        </a>

        <div class="mb-12">
            <img src="{{ asset('images/' . $logo) }}" alt="@yield('company')" class="h-10">
        </div>

        <div class="space-y-10">
            @yield('content')
        </div>

    </main>

    <footer class="text-center text-zinc-700 text-xs py-12 font-mono tracking-widest">
        &copy; {{ date('Y') }} Ana Tavares
    </footer>

</body>
</html>
