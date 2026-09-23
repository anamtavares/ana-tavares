@extends('portfolio.layout')

@section('title', 'OutSystems - Ana Tavares')
@section('meta_description', 'Developer content and engineering blog work at OutSystems.')
@section('company', 'OutSystems')
@section('headline', 'Developer content and the engineering blog.')

@section('jsonld')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebPage",
        "name": "OutSystems - Ana Tavares",
        "description": "Developer content and engineering blog work at OutSystems.",
        "url": "{{ url()->current() }}"
    }
    </script>
@endsection

@section('content')
    @include('portfolio.partials.links', ['groups' => [
        'Selected work' => [
            'OutSystems Engineering Medium' => 'https://medium.com/outsystems-engineering',
            'Detecting Duplicate Code in VPL' => 'https://www.outsystems.com/blog/posts/detecting-duplicate-code-in-vpl/',
            'Mental Health' => 'https://www.outsystems.com/blog/posts/mental-health/',
            'A Talk About Design Systems' => 'https://www.outsystems.com/blog/posts/a-talk-about-design-systems/',
        ],
    ]])
@endsection
