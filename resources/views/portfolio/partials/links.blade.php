<section class="grid grid-cols-1 {{ count($groups) > 1 ? 'md:grid-cols-3' : '' }} gap-8 md:gap-10">
    @foreach ($groups as $heading => $links)
        <div>
            <h2 class="label border-t-2 border-ink pt-3 mb-3">{{ $heading }}</h2>
            <ul>
                @foreach ($links as $label => $url)
                    <li>
                        <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="block py-1.5 text-[15px] hover:text-swiss transition-colors duration-150">
                            {{ $label }} <span aria-hidden="true">&nearr;</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</section>
