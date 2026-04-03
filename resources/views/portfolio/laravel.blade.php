@extends('portfolio.layout', ['logo' => 'laravel-logo.svg'])

@section('title', 'Laravel')
@section('company', 'Laravel')

@section('content')
    <div class="mb-10">
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Results (cloud.laravel.com, Sep 2025 - Mar 2026)</h2>
        <ul class="space-y-4 text-base text-zinc-300 leading-relaxed">
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" /></svg>
                <span>Doubled organic clicks from 49K to 104K in 6 months</span>
            </li>
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                <span>Grew impressions from 3M to 5.1M, with average position improving from 36 to 17</span>
            </li>
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                <span>Organic-driven signups grew from 1.2K to 2.25K per month; subscriptions from ~400 to 1.89K</span>
            </li>
            <li class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f59e0b] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                <span>Blog-attributed signups grew 10x (70 to 743/mo) and subscriptions 12x (51 to 651/mo)</span>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Guides and comparison pages</h2>
        <ul class="space-y-4">
            <li>
                <a href="https://cloud.laravel.com/migration-vapor-cloud" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Migration From Vapor to Cloud
                </a>
            </li>
            <li>
                <a href="https://cloud.laravel.com/cloud-vs-heroku" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Cloud vs Heroku
                </a>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Customer stories</h2>
        <ul class="space-y-4">
            <li>
                <a href="https://laravel.com/blog/pylesoft-cuts-infrastructure-costs-50-migrating-from-vapor-to-cloud" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Pylesoft Cuts Infrastructure Costs 50% Migrating From Vapor to Cloud
                </a>
            </li>
            <li>
                <a href="https://laravel.com/blog/how-romega-cut-250-hours-of-devops-work-with-laravel-forge" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    How Romega Cut 250 Hours of DevOps Work With Laravel Forge
                </a>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Blog</h2>
        <ul class="space-y-4">
            <li>
                <a href="https://laravel.com/blog/laravel-ai-sdk-building-production-safe-database-tools-for-agents" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Laravel AI SDK: Building Production-Safe Database Tools for Agents
                </a>
            </li>
            <li>
                <a href="https://laravel.com/blog/laravel-cloud-api-and-cli-ship-faster-automate-more" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Laravel Cloud API and CLI: Ship Faster, Automate More
                </a>
            </li>
            <li>
                <a href="https://laravel.com/blog/laravel-ai-sdk-boost-or-mcp-which-tool-do-you-need" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Laravel AI SDK: Boost or MCP -- Which Tool Do You Need?
                </a>
            </li>
        </ul>
    </div>
@endsection
