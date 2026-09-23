@extends('portfolio.layout')

@section('title', 'TigerData - Ana Tavares')
@section('meta_description', 'Created the Learn PostgreSQL section generating 6M+ impressions. Content marketing results at TigerData.')
@section('company', 'TigerData')
@section('headline', 'Created Learn PostgreSQL, generating 6M+ impressions in its first year.')

@section('jsonld')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebPage",
        "name": "TigerData - Ana Tavares",
        "description": "Created the Learn PostgreSQL section generating 6M+ impressions. Content marketing results at TigerData.",
        "url": "{{ url()->current() }}"
    }
    </script>
@endsection

@section('content')
    @include('portfolio.partials.results', ['items' => [
        'Created the "Learn PostgreSQL" educational section on the Timescale website, generating 6M+ impressions and 183K views in its first year',
        'Grew organic clicks 1,100% in 2024',
        'Ramped up content production by 102%',
        'Devised an SEO strategy that grew organic traffic acquisition by 33.9% while increasing sign-up success by almost 140%',
    ]])

    @include('portfolio.partials.links', ['groups' => [
        'Selected work' => [
            'Boost Postgres Performance by 7x With Chunk Skipping Indexes' => 'https://www.tigerdata.com/blog/boost-postgres-performance-by-7x-with-chunk-skipping-indexes',
            'Understanding RDS Pricing and Costs' => 'https://www.tigerdata.com/blog/understanding-rds-pricing-and-costs',
            'How Ndustrial Is Providing Fast Real-Time Queries' => 'https://www.tigerdata.com/blog/how-ndustrial-is-providing-fast-real-time-queries-and-safely-storing-client-data-with-97-compression',
        ],
    ]])
@endsection
