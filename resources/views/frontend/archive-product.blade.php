<x-site-layout title="Products">
    @push('head')
        <link rel="stylesheet" href="{{ asset('css/static/archive-products.css') }}">
    @endpush
    <x-layouts.above-header />
    <x-layouts.header />
    <section id="banner-products">
        <div class="row">
            <h1>Products</h1>
        </div>
    </section>

    <section id="archive-products-content">
        <div class="row">
            <div class="col-1">
                <h6>Our Products</h6>
                <h2>Specialist Products for Professionals</h2>
            </div>

            <div class="col-2">
                @foreach ($items as $item)
                    <div class="item">
                        <div class="product-thumb">
                            <a href="/products/{{ $item->slug }}">
                                <img src="{{ asset('storage') }}/{{ $item->featured_image }}">
                            </a>
                        </div>
                        <div class="content">
                            <h5>{{ $item->categories->implode('title', ', ') }}</h5>
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->short_description }}
                            </p>
                            <div><a href="/products/{{ $item->slug }}" class="btn1 button">View Detail<i
                                        class="fa-solid fa-arrow-right-long"></i></a></div>
                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>
    <x-layouts.pre-footer />
    <x-layouts.footer />
</x-site-layout>
