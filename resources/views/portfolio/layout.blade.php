@extends('layouts.app')

@section('body')
    <main class="py-12 md:py-24">
        <div class="wrap swiss-grid gap-y-8">

            <aside class="col-span-12 md:col-span-3">
                <dl class="grid grid-cols-2 md:grid-cols-1 gap-4 text-sm">
                    <div>
                        <dt class="label text-muted mb-1">Company</dt>
                        <dd>@yield('company')</dd>
                    </div>
                    @hasSection('scope')
                        <div>
                            <dt class="label text-muted mb-1">Scope</dt>
                            <dd>@yield('scope')</dd>
                        </div>
                    @endif
                    @hasSection('period')
                        <div>
                            <dt class="label text-muted mb-1">Period</dt>
                            <dd>@yield('period')</dd>
                        </div>
                    @endif
                </dl>
                <a href="/portfolio" class="hidden md:inline-block mt-10 text-sm hover:text-swiss transition-colors duration-150">&larr; All work</a>
            </aside>

            <div class="col-span-12 md:col-span-9">
                <h1 class="text-[34px] md:text-[clamp(40px,4.4vw,60px)] font-bold leading-none tracking-[-0.035em] mb-10">
                    @yield('headline')
                </h1>

                <div class="space-y-12">
                    @yield('content')
                </div>
            </div>

        </div>
    </main>
@endsection
