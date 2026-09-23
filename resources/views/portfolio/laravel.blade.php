@extends('portfolio.layout')

@section('title', 'Laravel - Ana Tavares')
@section('meta_description', 'Doubled organic clicks from 49K to 104K in 6 months. Content strategy and SEO results at Laravel.')
@section('company', 'Laravel')
@section('headline', 'Doubled organic clicks from 49K to 104K in six months.')
@section('scope', 'cloud.laravel.com')
@section('period', 'Sep 2025 – Mar 2026')

@section('jsonld')
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebPage",
        "name": "Laravel - Ana Tavares",
        "description": "Doubled organic clicks from 49K to 104K in 6 months. Content strategy and SEO results at Laravel.",
        "url": "{{ url()->current() }}"
    }
    </script>
@endsection

@section('content')
    @include('portfolio.partials.results', ['items' => [
        'Doubled organic clicks from 49K to 104K in 6 months',
        'Grew impressions from 3M to 5.1M, with average position improving from 36 to 17',
        'Organic-driven signups grew from 1.2K to 2.25K per month; subscriptions from ~400 to 1.89K',
        'Blog-attributed signups grew 10x (70 to 743/mo) and subscriptions 12x (51 to 651/mo)',
    ]])

    @include('portfolio.partials.links', ['groups' => [
        'Guides and comparison pages' => [
            'Migration From Vapor to Cloud' => 'https://cloud.laravel.com/migration-vapor-cloud',
            'Cloud vs Heroku' => 'https://cloud.laravel.com/cloud-vs-heroku',
        ],
        'Customer stories' => [
            'Pylesoft Cuts Infrastructure Costs 50% Migrating From Vapor to Cloud' => 'https://laravel.com/blog/pylesoft-cuts-infrastructure-costs-50-migrating-from-vapor-to-cloud',
            'How Romega Cut 250 Hours of DevOps Work With Laravel Forge' => 'https://laravel.com/blog/how-romega-cut-250-hours-of-devops-work-with-laravel-forge',
        ],
        'Blog' => [
            'Laravel AI SDK: Building Production-Safe Database Tools for Agents' => 'https://laravel.com/blog/laravel-ai-sdk-building-production-safe-database-tools-for-agents',
            'Laravel Cloud API and CLI: Ship Faster, Automate More' => 'https://laravel.com/blog/laravel-cloud-api-and-cli-ship-faster-automate-more',
            'Laravel AI SDK: Boost or MCP -- Which Tool Do You Need?' => 'https://laravel.com/blog/laravel-ai-sdk-boost-or-mcp-which-tool-do-you-need',
        ],
    ]])
@endsection
