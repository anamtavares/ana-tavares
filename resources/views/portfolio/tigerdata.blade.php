@extends('portfolio.layout', ['logo' => 'tigerdata-logo.svg'])

@section('title', 'TigerData')
@section('company', 'TigerData')

@section('content')
    <div class="mb-10">
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Results</h2>
        <ul class="space-y-4 text-base text-zinc-300 leading-relaxed">
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                <span>Created the "Learn PostgreSQL" educational section on the Timescale website, generating 6M+ impressions and 183K views in its first year</span>
            </li>
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                <span>Grew organic clicks 1,100% in 2024</span>
            </li>
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                <span>Ramped up content production by 102%</span>
            </li>
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                <span>Devised an SEO strategy that grew organic traffic acquisition by 33.9% while increasing sign-up success by almost 140%</span>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Selected work</h2>
    </div>

    <ul class="space-y-4">
        <li>
            <a href="https://www.tigerdata.com/blog/boost-postgres-performance-by-7x-with-chunk-skipping-indexes" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                Boost Postgres Performance by 7x With Chunk Skipping Indexes
            </a>
        </li>
        <li>
            <a href="https://www.tigerdata.com/blog/understanding-rds-pricing-and-costs" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                Understanding RDS Pricing and Costs
            </a>
        </li>
        <li>
            <a href="https://www.tigerdata.com/blog/how-ndustrial-is-providing-fast-real-time-queries-and-safely-storing-client-data-with-97-compression" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                How Ndustrial Is Providing Fast Real-Time Queries
            </a>
        </li>
    </ul>
@endsection
