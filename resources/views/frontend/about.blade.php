<x-site-layout title="About">
    @push('head')
        <link rel="stylesheet" href="{{ asset('css/static/about.css') }}">
    @endpush
    <x-layouts.above-header />
    <x-layouts.header />
    <section id="banner-about">
        <div class="row">
            <h6>About Us</h6>
            <h1>PT. Pera Abadi Sentausa</h1>
            <p>Based in Surabaya with manufacturing in Malang Indonesia to service South East Asia region with
                advanced cement technologies. Offering customised Solutions to your projects. We are the manufacturer of
                PT. PERA ABADI SENTAUSA
                products in South East Asia and provide technical assistance to PERA range of products for tropical
                climates.</p>
        </div>
    </section>

    <section id="about">
        <div class="row">
            <div class="col-1">

                <iframe width="450" height="600"
                    src="https://www.youtube.com/embed/3UUyVlBf1rA?si=6Bml7u84uAtMgnRA&amp;controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                web-share"
                    allowfullscreen></iframe>
            </div>

            <div class="col-2">
                <h6>enhances concrete and mortar</h6>

                <h2>High-Quality Cement</h2>

                <p>
                    PERA Admixtures and cement enhancer technologies add value and reliability to concrete and
                    mortar
                    production in the
                    construction industry. PERA provides a complete portfolio of high-quality cement modifiers for
                    our
                    factory blended
                    protective decorative coatings and premixed concrete toppings for specialist works like Perazzo
                    a
                    high performance thin overlay system.
                </p>
                <p>
                    By utilising all available cement content and all the available free water it enhances the
                    concrete
                    and mortar further to a high
                    performance workable product. No CO2 is produced during hydration of our products producing
                    denser
                    cementitious products with no
                    bleeding or defects and less shrinkage. Producing high early strengths and no surface defects
                    having
                    impermeability to liquids and vapours.
                    A true cementitious high performance concrete or mortar.
                </p>

            </div>
        </div>
    </section>

    <section id="improves">
        <div class="row">
            <div class="col-1">
                <h2>Our Product Also Improves</h2>
            </div>
            <div class="col-2">
                <div class="item">
                    <img src="{{ asset('uploads/icon/Vector(15).png') }}" alt="Improves">
                    <h4>Quality</h4>
                </div>
                <div class="item">
                    <img src="{{ asset('uploads/icon/Vector(16).png') }}" alt="Improves">
                    <h4>Placing</h4>
                </div>
                <div class="item">
                    <img src="{{ asset('uploads/icon/Vector(17).png') }}" alt="Improves">
                    <h4>Finishing </h4>
                </div>
                <div class="item">
                    <img src="{{ asset('uploads/icon/Vector(18).png') }}" alt="Improves">
                    <h4>Long-term Performance</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="video-about">
        <div class="row">
            <div class="col-1">
                <h6>extending the maintenance intervals</h6>
                <h2>Revolutionizing Concrete and Coatings</h2>
                <p>PERA enhancers offer complete hydration of the OPC.This
                    technology is in all of our ranges of products, producing improved high performance
                    quality durable new concrete and mortar with self healing properties , extending the life of
                    service and longer maintenance intervals. As well as the rehabilitation of existing degraded or
                    damaged structures. Our Peraxskim decorative coloured wall coatings are waterproof with
                    resistance to
                    climate
                    and chemical corrosion, acid and gases penetration.</p>
            </div>
            <div class="col-2">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/8aLCZWVU9nY?si=IGmy8Yh5Vl7vhihZ" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>

    </section>
    <x-layouts.pre-footer />
    <x-layouts.footer />
</x-site-layout>
