@extends('portfolio.layout', ['logo' => 'outsystems-logo.svg'])

@section('title', 'OutSystems')
@section('company', 'OutSystems')

@section('content')
    <ul class="space-y-4">
        <li>
            <a href="https://medium.com/outsystems-engineering" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                OutSystems Engineering Medium
            </a>
        </li>
        <li>
            <a href="https://www.outsystems.com/blog/posts/detecting-duplicate-code-in-vpl/" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                Detecting Duplicate Code in VPL
            </a>
        </li>
        <li>
            <a href="https://www.outsystems.com/blog/posts/mental-health/" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                Mental Health
            </a>
        </li>
        <li>
            <a href="https://www.outsystems.com/blog/posts/a-talk-about-design-systems/" target="_blank" rel="noopener noreferrer" class="text-base text-zinc-300 hover:text-[#f59e0b] transition-colors duration-150">
                A Talk About Design Systems
            </a>
        </li>
    </ul>
@endsection
