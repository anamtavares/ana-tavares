<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ana Tavares - Developer marketing strategist')</title>
    <meta name="description" content="@yield('meta_description', 'Developer marketing strategist who doubled Laravel Cloud\'s organic traffic in 6 months. SEO, content strategy, and GTM for developer tools.')">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Ana Tavares - Developer marketing strategist')">
    <meta property="og:description" content="@yield('meta_description', 'Developer marketing strategist who doubled Laravel Cloud\'s organic traffic in 6 months. SEO, content strategy, and GTM for developer tools.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/ana-profile.jpg'))">
    <meta property="og:type" content="website">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- JSON-LD structured data --}}
    @yield('jsonld')
</head>
<body class="bg-paper text-ink min-h-screen font-sans antialiased text-[17px] leading-[1.45]">

    @include('partials.nav')

    @yield('body')

    @section('footer')
        <footer class="border-t-8 border-ink pt-5 pb-10 text-sm">
            <div class="wrap swiss-grid gap-y-1">
                <span class="col-span-12 md:col-span-6">&copy; {{ date('Y') }} Ana Tavares</span>
                <span class="col-span-12 md:col-span-6 md:justify-self-end text-muted">Lisbon, Portugal</span>
            </div>
        </footer>
    @show

</body>
</html>
