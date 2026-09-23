@extends('layouts.app')

@section('title', 'How I think - Ana Tavares')
@section('meta_description', 'My approach to developer marketing: user-centric, outcome-driven, and grounded in what developers actually need.')

@section('jsonld')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebPage",
        "name": "How I think",
        "description": "My approach to developer marketing: user-centric, outcome-driven, and grounded in what developers actually need.",
        "url": "{{ url()->current() }}"
    }
    </script>
@endsection

@section('body')
    <main>
        <section class="border-b-2 border-ink pt-12 md:pt-28 pb-10 md:pb-20">
            <div class="wrap swiss-grid gap-y-5">
                <p class="label text-swiss col-span-12 md:col-span-3 md:pt-4">How I Think</p>
                <h1 class="col-span-12 md:col-span-9 text-[44px] md:text-[clamp(56px,7.4vw,112px)] font-bold leading-[.95] tracking-[-0.045em]">
                    Every word matters.
                </h1>
            </div>
        </section>

        <section class="py-10 md:py-20">
            <div class="wrap swiss-grid">
                <ol class="col-span-12 md:col-span-9 md:col-start-4 border-t-2 border-ink">
                    <li class="grid grid-cols-[3.5rem_1fr] md:grid-cols-[5rem_1fr] py-5 border-b border-hair text-lg md:text-xl">
                        <span class="font-mono text-sm text-swiss pt-1">01</span>
                        <p>Every content piece should be tied to a business outcome.</p>
                    </li>
                    <li class="grid grid-cols-[3.5rem_1fr] md:grid-cols-[5rem_1fr] py-5 border-b border-hair text-lg md:text-xl">
                        <span class="font-mono text-sm text-swiss pt-1">02</span>
                        <p>I work best at the intersection of marketing and product. That is where the interesting problems live, where messaging meets what the software actually does and who it actually serves.</p>
                    </li>
                    <li class="grid grid-cols-[3.5rem_1fr] md:grid-cols-[5rem_1fr] py-5 border-b border-hair text-lg md:text-xl">
                        <span class="font-mono text-sm text-swiss pt-1">03</span>
                        <p>I am fiercely user-centric. Customers are the beginning and end of everything. If a piece of content is not genuinely helpful, if it does not convey real value to the person reading it, it has no reason to exist.</p>
                    </li>
                    <li class="grid grid-cols-[3.5rem_1fr] md:grid-cols-[5rem_1fr] py-5 border-b border-hair text-lg md:text-xl">
                        <span class="font-mono text-sm text-swiss pt-1">04</span>
                        <p>Good developer marketing is not about hype or volume. It is about understanding what developers need, then showing up with something worth their time.</p>
                    </li>
                </ol>
            </div>
        </section>
    </main>
@endsection
