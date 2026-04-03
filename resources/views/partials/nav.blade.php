<nav class="w-full max-w-5xl mx-auto flex items-center justify-between mb-12">
    <a href="/" class="text-sm tracking-widest uppercase {{ request()->is('/') ? 'text-[#f59e0b]' : 'text-zinc-400 hover:text-[#f59e0b]' }} transition-colors duration-150">
        Ana Tavares
    </a>
    <div class="flex items-center gap-6">
        <a href="/how-i-think" class="text-sm tracking-widest uppercase {{ request()->is('how-i-think') ? 'text-[#f59e0b]' : 'text-zinc-400 hover:text-[#f59e0b]' }} transition-colors duration-150">
            How I Think
        </a>
        <a href="/portfolio" class="text-sm tracking-widest uppercase {{ request()->is('portfolio*') ? 'text-[#f59e0b]' : 'text-zinc-400 hover:text-[#f59e0b]' }} transition-colors duration-150">
            Portfolio
        </a>
    </div>
</nav>
