@extends('portfolio.layout', ['logo' => 'tigerdata-logo.svg'])

@section('title', 'TigerData')
@section('company', 'TigerData')

@section('content')
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
