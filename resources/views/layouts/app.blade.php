<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ana Tavares - Developer marketing strategist')</title>
    <meta name="description" content="@yield('meta_description', 'I build developer marketing strategies that drive real outcomes. Currently at Laravel, driving SEO, content, and GTM across the platform.')">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Ana Tavares - Developer marketing strategist')">
    <meta property="og:description" content="@yield('meta_description', 'I build developer marketing strategies that drive real outcomes. Currently at Laravel, driving SEO, content, and GTM across the platform.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/ana-profile.jpg'))">
    <meta property="og:type" content="website">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- JSON-LD structured data --}}
    @hasSection('jsonld')
        @yield('jsonld')
    @endif
</head>
<body class="bg-[#0d0d0d] text-[#f5f2ec] min-h-screen px-6 py-16 font-mono">

    @include('partials.nav')

    @yield('body')

    @hasSection('footer')
        @yield('footer')
    @else
        <footer class="text-center text-zinc-700 text-xs py-12 font-mono tracking-widest">
            &copy; {{ date('Y') }} Ana Tavares
        </footer>
    @endif

</body>
</html>
