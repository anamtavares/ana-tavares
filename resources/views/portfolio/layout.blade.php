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

    @include('partials.nav')

    <main class="w-full max-w-3xl mx-auto">

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
