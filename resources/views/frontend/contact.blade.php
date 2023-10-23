<x-site-layout title="Contact">
    @push('head')
        <link rel="stylesheet" href="{{ asset('css/static/contact.css') }}">
    @endpush
    <x-layouts.above-header />
    <x-layouts.header />
    <section id="banner-contact">
        <div class="row">
            <h1>Contact Us</h1>
        </div>
    </section>

    <section id="contact-info">
        <div class="row">
            <div class="col-1">
                <iframe src="{{ config('app.office_map_embed') }}" width="600" height="450" style="border:0;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-2">
                <a href="{{ config('app.office_map_link') }}" class="info">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h5>Address</h5>
                        <p>{{ config('app.office_address') }}</p>
                    </div>
                </a>
                <a href="tel:{{ config('app.phone_number') }}" class="info">
                    <div>
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <h5>Phone Number</h5>
                        <p>{{ config('app.phone_number') }}</p>
                    </div>
                </a>
                <a href="mailto:{{ config('app.email') }}" class="info">
                    <div>
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <p>{{ config('app.email') }}</p>
                    </div>
                </a>
                <a href="{{ config('app.instagram_link') }}" target="_blank" class="info">
                    <div>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div>
                        <h5>Instagram</h5>
                        <p>{{ config('app.instagram_account') }}</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section id="form-contact">
        <div class="row">
            <div class="form-title">
                <h6>Share your Queries or Feedback</h6>
                <h2>We're Here to Assist</h2>

            </div>

            <x-layouts.contact-form />
        </div>
        </div>
    </section>
    <x-layouts.pre-footer />
    <x-layouts.footer />
</x-site-layout>
