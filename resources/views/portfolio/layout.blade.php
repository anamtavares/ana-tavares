@extends('layouts.app')

@section('body')
    <main class="w-full max-w-3xl mx-auto">

        <div class="mb-12">
            <img src="{{ asset('images/' . $logo) }}" alt="@yield('company')" class="h-10">
        </div>

        <div class="space-y-10">
            @yield('content')
        </div>

    </main>
@endsection
