@extends('layouts.app')

@section('title', 'Portfolio - Ana Tavares')
@section('meta_description', 'Case studies from my work at Laravel, OutSystems, and TigerData, showing measurable marketing results for developer tools.')

@section('jsonld')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebPage",
        "name": "Portfolio",
        "description": "Case studies from my work at Laravel, OutSystems, and TigerData, showing measurable marketing results for developer tools.",
        "url": "{{ url()->current() }}"
    }
    </script>
@endsection

@section('body')
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
@endsection
