@extends('portfolio.layout', ['logo' => 'laravel-logo.svg'])

@section('title', 'Laravel')
@section('company', 'Laravel')

@section('content')
    <div>
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Guides and comparison pages</h2>
        <ul class="space-y-4">
            <li>
                <a href="https://cloud.laravel.com/migration-vapor-cloud" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Migration from Vapor to Cloud
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
                    Pylesoft cuts infrastructure costs 50% migrating from Vapor to Cloud
                </a>
            </li>
            <li>
                <a href="https://laravel.com/blog/how-romega-cut-250-hours-of-devops-work-with-laravel-forge" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    How Romega cut 250 hours of DevOps work with Laravel Forge
                </a>
            </li>
        </ul>
    </div>

    <div>
        <h2 class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Blog</h2>
        <ul class="space-y-4">
            <li>
                <a href="https://laravel.com/blog/laravel-ai-sdk-building-production-safe-database-tools-for-agents" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Laravel AI SDK: Building production-safe database tools for agents
                </a>
            </li>
            <li>
                <a href="https://laravel.com/blog/laravel-cloud-api-and-cli-ship-faster-automate-more" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Laravel Cloud API and CLI: Ship faster, automate more
                </a>
            </li>
            <li>
                <a href="https://laravel.com/blog/laravel-ai-sdk-boost-or-mcp-which-tool-do-you-need" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                    Laravel AI SDK: Boost or MCP -- which tool do you need?
                </a>
            </li>
        </ul>
    </div>
@endsection
