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
    <main class="w-full max-w-3xl mx-auto">
        <p class="text-[#f59e0b] text-xs tracking-widest uppercase mb-8">How I Think</p>

        <div class="space-y-6 text-base text-zinc-300 leading-relaxed">
            <p>
                Every word matters. Every content piece should be tied to a business outcome.
            </p>
            <p>
                I work best at the intersection of marketing and product. That is where the interesting problems live, where messaging meets what the software actually does and who it actually serves.
            </p>
            <p>
                I am fiercely user-centric. Customers are the beginning and end of everything. If a piece of content is not genuinely helpful, if it does not convey real value to the person reading it, it has no reason to exist.
            </p>
            <p>
                Good developer marketing is not about hype or volume. It is about understanding what developers need, then showing up with something worth their time.
            </p>
        </div>
    </main>
@endsection
