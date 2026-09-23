<section>
    <h2 class="label mb-4">{{ $title ?? 'Results' }}</h2>
    <ol class="border-t-2 border-ink">
        @foreach ($items as $i => $item)
            <li class="grid grid-cols-[3rem_1fr] md:grid-cols-[4rem_1fr] py-4 border-b border-hair text-lg">
                <span class="font-mono text-sm text-swiss pt-1">{{ sprintf('%02d', $i + 1) }}</span>
                <span>{{ $item }}</span>
            </li>
        @endforeach
    </ol>
</section>
