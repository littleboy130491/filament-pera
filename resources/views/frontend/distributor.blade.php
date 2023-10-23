<x-site-layout title="Distributor & Agent">
    @push('head')
        <link rel="stylesheet" href="{{ asset('css/static/distributor.css') }}">
    @endpush
    <x-layouts.above-header />
    <x-layouts.header />
    <section id="banner-distributor">
        <div class="row">
            <h1>Distributor/Agent</h1>
        </div>
    </section>

    <section id="journey">
        <div class="row">
            <div class="col-1">
                <h6>Our Distributor</h6>
                <h2>Join Our Expansion Journey</h2>
                <p>Become a distributor or agent and join us as we expand our products and advanced technology
                    throughout Indonesia pushing growth of sales and support!</p>
            </div>
            <div class="col-2">
                <img src="{{ asset('uploads/images/ABS.png') }}" alt="ABS Logo">
                <img src="{{ asset('uploads/images/indocrete.png') }}" alt="Indocrete Logo">
            </div>
        </div>

    </section>


    <section id="partner-value">
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('uploads/images/handshaking.png') }}" alt="Handshaking">
            </div>
            <div class="col-2">
                <h2>Partner with Us for a Concrete Future</h2>
                <div class="value">
                    <div>
                        <h5><i class="fa-solid fa-caret-right"></i>Tailored for SE Asia</h5>
                        <p>Harness PERA's advanced cement solutions, crafted especially for tropical climates,
                            ensuring
                            ease of labor and superior quality.</p>
                    </div>
                    <div>
                        <h5><i class="fa-solid fa-caret-right"></i>Diverse High-Performance Range</h5>
                        <p>Offer clients proven products like Perazzo overlays and Peraxskim coatings, all
                            guaranteeing
                            durability and resilience.</p>
                    </div>
                    <div>
                        <h5><i class="fa-solid fa-caret-right"></i>Expert Technical Support</h5>
                        <p>Benefit from our comprehensive guidance on the PERA range, enhancing product application
                            and
                            client satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="become">
        <div class="row">
            <div class="col-1">
                <h2>How to Become PERA’s Distributor or Agent?</h2>
            </div>
            <div class="col-2">
                <div class="content">
                    <h5>1. Connect & Apply</h5>
                    <p>Reach out to us through our official channels and complete the 'Distributor Application Form'
                    </p>
                </div>
                <div class="content">
                    <h5>2. Submit & Review</h5>
                    <p>Provide necessary business documentation for our team to assess and review</p>
                </div>
                <div class="content">
                    <h5>3. Interview & Training</h5>
                    <p>Participate in an interview, followed by a concise product and sales training session</p>
                </div>
                <div class="content">
                    <h5>4. Finalize Agreement</h5>
                    <p>Sign the official distributor/agent agreement outlining mutual terms and responsibilities</p>
                </div>
                <div class="content">
                    <h5>5. Kickstart with PERA</h5>
                    <p>Access resources, stock up on products, and begin your journey with our full support.</p>
                </div>
            </div>
        </div>

    </section>

    <section id="form-contact">
        <div class="row">
            <div class="form-title">
                <h6>Take the First Step!</h6>
                <h2>Application Form</h2>

            </div>

            <x-layouts.contact-form />
        </div>
        </div>
    </section>
    <x-layouts.pre-footer />
    <x-layouts.footer />
</x-site-layout>
