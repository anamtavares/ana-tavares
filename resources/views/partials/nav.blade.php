<nav class="w-full max-w-5xl mx-auto flex items-center justify-between mb-12">
    <a href="/" class="text-sm tracking-widest uppercase {{ request()->is('/') ? 'text-[#f59e0b]' : 'text-zinc-400 hover:text-[#f59e0b]' }} transition-colors duration-150">
        Ana Tavares
    </a>
    <a href="/portfolio" class="text-sm tracking-widest uppercase {{ request()->is('portfolio*') ? 'text-[#f59e0b]' : 'text-zinc-400 hover:text-[#f59e0b]' }} transition-colors duration-150">
        Portfolio
    </a>
</nav>
