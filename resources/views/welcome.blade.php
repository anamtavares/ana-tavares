<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Tavares</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0d0d0d] text-[#f5f5f5] min-h-screen flex items-center justify-center px-6 py-16">

    <main class="w-full max-w-[640px]">

        <header class="mb-6">
            <h1 class="text-6xl font-black tracking-tight leading-none mb-3">
                Ana Tavares
            </h1>
            <p class="text-xl font-medium text-indigo-400">
                Content Marketer &amp; Product Marketing Manager
            </p>
        </header>

        <hr class="border-zinc-800 mb-8">

        <section class="mb-10">
            <p class="text-base text-zinc-400 leading-relaxed mb-4">
                I help tech companies find the right words. With experience across content marketing
                and product marketing, I craft messaging that turns complex products into clear value
                propositions &mdash; and audiences into advocates.
            </p>
            <p class="text-base text-zinc-400 leading-relaxed">
                Currently open to new opportunities.
            </p>
        </section>

        <a
            href="https://www.linkedin.com/in/ana-margarida-tavares-b1228411/"
            target="_blank"
            rel="noopener noreferrer"
            class="inline-block bg-indigo-500 hover:bg-indigo-400 text-white font-semibold text-sm px-6 py-3 rounded-lg transition-colors duration-150"
        >
            Connect on LinkedIn
        </a>

    </main>

    <footer class="fixed bottom-0 left-0 right-0 text-center text-zinc-600 text-xs py-4">
        &copy; {{ date('Y') }} Ana Tavares
    </footer>

</body>
</html>
