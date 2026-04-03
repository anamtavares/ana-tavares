<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Tavares</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0d0d0d] text-[#f5f2ec] min-h-screen px-6 py-16 font-mono">

    @include('partials.nav')

    <div class="w-full max-w-5xl mx-auto">

        <main class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 items-center">

            {{-- Left: Text --}}
            <div>
                <header class="mb-8">
                    <p class="text-[#f59e0b] text-xs tracking-widest uppercase mb-4">Hello, World</p>
                    <h1 class="text-4xl font-bold leading-snug text-[#f5f2ec]">
                        I build developer marketing strategies that drive real outcomes.
                    </h1>
                </header>

                <hr class="border-zinc-800 mb-8">

                <section class="space-y-6 mb-10 text-base text-zinc-300 leading-relaxed">
                    <p>
                        Currently at Laravel,
                        <a href="https://www.laravel.com/blog" target="_blank" rel="noopener noreferrer" class="text-[#f59e0b] hover:text-[#fbbf24] transition-colors duration-150">running the blog</a>,
                        building webpages, driving SEO, coordinating GTM, and kicking off the first user research initiative to put real developer language at the center of our messaging. Before that, I worked across the full spectrum of developer tools&mdash;from the aimed simplicity of no-code SaaS to the rewarding complexity of database platforms. That range sharpened my instincts for what resonates with technical audiences, wherever they sit.
                    </p>
                    <p>
                        My background is in journalism and I hold a post-grad in Science Communication. I've led teams, but I'm happiest close to the work. I was also using em-dashes before ChatGPT was born.
                    </p>
                    <p>
                        I'm based in Lisbon. When I'm not thinking about pipelines and words, I'm reading, watching films, catching live music, wandering through exhibitions, tending my garden, or walking my dog, Pur&eacute;.
                    </p>
                    <p class="text-[#f59e0b]">
                        Laravel has a motto I live by: we must ship.
                    </p>
                </section>

                <a
                    href="https://www.linkedin.com/in/ana-margarida-tavares-b1228411/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-block border border-[#f59e0b] text-[#f59e0b] hover:bg-[#f59e0b] hover:text-[#0d0d0d] font-medium text-xs tracking-widest uppercase px-6 py-3 transition-colors duration-150"
                >
                    Connect on LinkedIn
                </a>
            </div>

            {{-- Right: Photo --}}
            <div class="flex justify-center md:justify-end order-first md:order-last">
                <img
                    src="{{ asset('images/ana-profile.jpg') }}"
                    alt="Ana Tavares and Pur&eacute;"
                    class="w-full max-w-sm h-auto object-cover"
                >
            </div>

        </main>

    </div>

    <footer class="fixed bottom-0 left-0 right-0 text-center text-zinc-700 text-xs py-4 font-mono tracking-widest">
        &copy; {{ date('Y') }} Ana Tavares
    </footer>

</body>
</html>
