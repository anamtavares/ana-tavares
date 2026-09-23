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
    <main>
        <section class="pt-12 md:pt-28 pb-8 md:pb-10">
            <div class="wrap swiss-grid gap-y-5">
                <p class="label text-swiss col-span-12 md:col-span-3 md:pt-3">Portfolio</p>
                <h1 class="col-span-12 md:col-span-9 text-[40px] md:text-[clamp(48px,5.4vw,80px)] font-bold leading-none tracking-[-0.04em]">
                    Selected work
                </h1>
            </div>
        </section>

        <div class="wrap pb-16 md:pb-28">
            <ul class="border-t-2 border-ink">
                @foreach ([
                    ['laravel', 'Laravel', 'Doubled organic clicks in 6 months'],
                    ['tigerdata', 'TigerData', 'Created Learn PostgreSQL, 6M+ impressions'],
                    ['outsystems', 'OutSystems', 'Developer content and engineering blog'],
                ] as $i => [$slug, $company, $result])
                    <li class="border-b border-ink">
                        <a href="/portfolio/{{ $slug }}" class="group swiss-grid items-baseline gap-y-1.5 py-5 md:py-6 hover:text-swiss transition-colors duration-150">
                            <span class="col-span-2 md:col-span-3 font-mono text-sm text-muted group-hover:text-swiss">{{ sprintf('%02d', $i + 1) }}</span>
                            <span class="col-span-9 md:col-span-4 text-[28px] md:text-[40px] font-bold tracking-[-0.03em] leading-tight">{{ $company }}</span>
                            <span class="col-span-10 col-start-3 md:col-span-4 md:col-start-auto text-[15px]">{{ $result }}</span>
                            <span class="col-span-1 col-start-12 row-start-1 justify-self-end text-2xl" aria-hidden="true">&rarr;</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
