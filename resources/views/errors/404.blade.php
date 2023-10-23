<x-site-layout>
    @prepend('before-head')
        <link rel="stylesheet" href="{{ asset('css/static/404.css') }}">
    @endprepend
    <x-layouts.above-header />
    <x-layouts.header />
    <section id="page-404">

        <div class="row">

            <h2>404</h2>
            <p class="error">Error not found.</p>
            <p class="exception-message">{{ $exception->getMessage() }}</p>
            <a href="{{ route('home') }}" class="btn1 button">Back to Home</a>

        </div>
    </section>
    <x-layouts.pre-footer />
    <x-layouts.footer />
</x-site-layout>
