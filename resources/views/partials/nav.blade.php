<header class="border-t-8 border-ink py-5">
    <div class="wrap swiss-grid items-center gap-y-3">
        <a href="/" class="col-span-6 col-start-1 row-start-1 md:col-span-3 text-lg font-bold tracking-tight {{ request()->is('/') ? 'text-swiss' : 'hover:text-swiss' }} transition-colors duration-150">
            Ana Tavares
        </a>

        <nav class="col-span-12 md:col-span-5 row-start-2 md:row-start-1 md:col-start-4 flex gap-6 md:gap-8 text-[15px] font-medium">
            <a href="/how-i-think" class="flex gap-2 {{ request()->is('how-i-think') ? 'text-swiss' : 'hover:text-swiss' }} transition-colors duration-150">
                <span class="font-mono text-xs pt-0.5 {{ request()->is('how-i-think') ? 'text-swiss' : 'text-muted' }}">01</span>How I Think
            </a>
            <a href="/portfolio" class="flex gap-2 {{ request()->is('portfolio*') ? 'text-swiss' : 'hover:text-swiss' }} transition-colors duration-150">
                <span class="font-mono text-xs pt-0.5 {{ request()->is('portfolio*') ? 'text-swiss' : 'text-muted' }}">02</span>Portfolio
            </a>
        </nav>

        <a
            href="https://www.linkedin.com/in/ana-margarida-tavares-b1228411/"
            target="_blank"
            rel="noopener noreferrer"
            class="col-span-6 col-start-7 md:col-span-4 md:col-start-9 row-start-1 justify-self-end inline-flex items-center gap-2.5 whitespace-nowrap bg-swiss hover:bg-ink text-white text-[13px] md:text-[15px] font-semibold px-3 md:px-[18px] py-2.5 md:py-3 transition-colors duration-150"
        >
            Connect on LinkedIn <span aria-hidden="true">&nearr;</span>
        </a>
    </div>
</header>
