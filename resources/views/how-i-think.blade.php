<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How I Think - Ana Tavares</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0d0d0d] text-[#f5f2ec] min-h-screen px-6 py-16 font-mono">

    @include('partials.nav')

    <main class="w-full max-w-3xl mx-auto">
        <p class="text-[#f59e0b] text-xs tracking-widest uppercase mb-8">How I Think</p>

        <div class="space-y-6 text-base text-zinc-300 leading-relaxed">
            <p>
                Every word matters. Every content piece should be tied to a business outcome.
            </p>
            <p>
                I work best at the intersection of marketing and product. That is where the interesting problems live, where messaging meets what the software actually does and who it actually serves.
            </p>
            <p>
                I am fiercely user-centric. Customers are the beginning and end of everything. If a piece of content is not genuinely helpful, if it does not convey real value to the person reading it, it has no reason to exist.
            </p>
            <p>
                Good developer marketing is not about hype or volume. It is about understanding what developers need, then showing up with something worth their time.
            </p>
        </div>
    </main>

    <footer class="text-center text-zinc-700 text-xs py-12 font-mono tracking-widest">
        &copy; {{ date('Y') }} Ana Tavares
    </footer>

</body>
</html>
