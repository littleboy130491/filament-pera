<x-site-layout :title="$item->title" :description="$item->short_description">
    @push('head')
        <link rel="stylesheet" href="{{ asset('css/static/single-product.css') }}">
    @endpush
    <x-layouts.above-header />
    <x-layouts.header />
    <section id="product-summary">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('storage') }}/{{ $item->featured_image }}" alt="Peramix sc-50">
            </div>
            <div class="col-2">
                <h6>{{ $item->categories->implode('title', ', ') }}</h6>
                <h1>{{ $item->title }}</h1>
                <p>
                    {{ $item->short_description }}
                </p>
                <div class="button-product">
                    <a href="{{ route('contact') }}" type="button" class="btn1 button">Contact Us</a>
                    <a href="{{ asset('storage') }}/{{ $item->file_upload }}" target="_blank" type="button"
                        class="btn4 button"><i class="fa-solid fa-file-arrow-down"></i>Download E-Catalogue</a>

                </div>
            </div>

        </div>
    </section>

    <section id="product-description">
        <div class="row">
            {!! $item->description !!}

        </div>
    </section>

    <section id="product-list">
        <div class="row">
            @foreach ($item->item_details as $item)
                <div class="item">
                    <div class="thumb">
                        <img src="{{ asset('storage') }}/{{ $item['image'] }}">
                    </div>
                    <div>
                        <h4>{{ $item['title'] }}</h4>
                        <p>
                            {{ $item['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-layouts.testimonials />
    <x-layouts.pre-footer />
    <x-layouts.footer />
</x-site-layout>
