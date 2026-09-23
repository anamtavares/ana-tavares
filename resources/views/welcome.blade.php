@extends('layouts.app')

@section('title', 'Ana Tavares - Developer marketing strategist')
@section('meta_description', 'Developer marketing strategist who doubled Laravel Cloud\'s organic traffic in 6 months. SEO, content strategy, and GTM for developer tools.')

@section('jsonld')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Person",
        "name": "Ana Tavares",
        "url": "https://anamargaridatavares.com",
        "jobTitle": "Developer Marketing Strategist",
        "worksFor": {
            "@@type": "Organization",
            "name": "Laravel"
        },
        "sameAs": [
            "https://www.linkedin.com/in/ana-margarida-tavares-b1228411/"
        ],
        "image": "https://anamargaridatavares.com/images/ana-profile.jpg",
        "description": "Developer marketing strategist who doubled Laravel Cloud's organic traffic in 6 months. SEO, content strategy, and GTM for developer tools."
    }
    </script>
@endsection

@section('body')
    <main>

        {{-- Hero --}}
        <section class="border-b-2 border-ink pt-12 md:pt-28 pb-10 md:pb-20">
            <div class="wrap swiss-grid gap-y-5">
                <p class="label text-swiss col-span-12 md:col-span-3 md:pt-4">Hello, World</p>
                <h1 class="col-span-12 md:col-span-9 text-[44px] md:text-[clamp(56px,7.4vw,112px)] font-bold leading-[.95] tracking-[-0.045em]">
                    I build developer marketing strategies that drive real outcomes.
                </h1>
            </div>
        </section>

        {{-- About --}}
        <section class="border-b border-hair py-10 md:py-20">
            <div class="wrap swiss-grid gap-y-6">
                <p class="label col-span-12 md:col-span-3">About</p>

                <div class="col-span-12 md:col-span-5 space-y-5 text-lg">
                    <p>
                        Currently at Laravel,
                        <a href="https://www.laravel.com/blog" target="_blank" rel="noopener noreferrer" class="border-b-2 border-swiss hover:text-swiss transition-colors duration-150">running the blog</a>,
                        building webpages, driving SEO, coordinating GTM, and kicking off the first user research initiative to put real developer language at the center of our messaging. Before that, I worked across the full spectrum of developer tools, from the aimed simplicity of no-code SaaS to the rewarding complexity of database platforms. That range sharpened my instincts for what resonates with technical audiences, wherever they sit.
                    </p>
                    <p>
                        My background is in journalism and I hold a post-grad in Science Communication. I've led teams, but I'm happiest close to the work. I was also using em-dashes before ChatGPT was born.
                    </p>
                    <p>
                        I'm based in Lisbon. When I'm not thinking about pipelines and words, I'm reading, watching films, catching live music, wandering through exhibitions, tending my garden, or walking my dog, Pur&eacute;.
                    </p>
                </div>

                <figure class="col-span-12 md:col-span-4 order-first md:order-none">
                    <img
                        src="{{ asset('images/ana-profile.jpg') }}"
                        alt="Ana Tavares and Pur&eacute;"
                        class="w-full aspect-[3/4] object-cover"
                    >
                    <figcaption class="label text-muted mt-3">Ana and Pur&eacute;, Lisbon</figcaption>
                </figure>
            </div>
        </section>

        {{-- Selected results --}}
        <section class="border-b border-hair py-10 md:py-20">
            <div class="wrap swiss-grid gap-y-6">
                <p class="label col-span-12 md:col-span-3">Selected results</p>

                <div class="col-span-12 md:col-span-9 grid grid-cols-1 md:grid-cols-3 gap-7 md:gap-10">
                    <div class="border-t-2 border-ink pt-3.5">
                        <p class="text-[44px] md:text-[clamp(44px,5.2vw,76px)] font-bold leading-none tracking-[-0.04em]">2&times;</p>
                        <p class="mt-3 text-[15px] text-muted max-w-[26ch]">Organic clicks to Laravel Cloud in 6 months, 49K to 104K</p>
                    </div>
                    <div class="border-t-2 border-ink pt-3.5">
                        <p class="text-[44px] md:text-[clamp(44px,5.2vw,76px)] font-bold leading-none tracking-[-0.04em]">10&times;</p>
                        <p class="mt-3 text-[15px] text-muted max-w-[26ch]">Blog-attributed signups, 70 to 743 per month</p>
                    </div>
                    <div class="border-t-2 border-ink pt-3.5">
                        <p class="text-[44px] md:text-[clamp(44px,5.2vw,76px)] font-bold leading-none tracking-[-0.04em]">36&rarr;17</p>
                        <p class="mt-3 text-[15px] text-muted max-w-[26ch]">Average search position, with impressions up from 3M to 5.1M</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Motto --}}
        <section class="py-12 md:py-28">
            <div class="wrap swiss-grid gap-y-5">
                <p class="label col-span-12 md:col-span-3 md:pt-4">Laravel has a motto I live by</p>
                <p class="col-span-12 md:col-span-9 text-[44px] md:text-[clamp(56px,8vw,120px)] font-bold leading-[.95] tracking-[-0.045em] text-swiss">
                    We must ship.
                </p>
            </div>
        </section>

    </main>
@endsection
