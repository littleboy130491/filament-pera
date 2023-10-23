<x-site-layout title="Home">
    <x-layouts.above-header />
    <x-layouts.header />
    <section id="hero-banner">

        <div class="row">
            <div class="col-1">
                <img src="{{ asset('uploads/images/PERA Logo.jpg') }}" alt="PERA Logo">

                <h1>
                    Advanced <span class="dual-heading">Concrete</span> Technologies
                </h1>
                <p>
                    PERA provide Innovative admixture technologies for concrete and cementitious mortar products.
                </p>
                <div>
                    <a href="#" class="btn1 button btnModal"><i class="fa-solid fa-file-arrow-down"></i>Download
                        Product Catalog</a>
                </div>
            </div>

            <div class="col-2">
                <img src="{{ asset('uploads/images/concrete-mixer.png') }}" alt="Concrete Mixer">
            </div>
        </div>

    </section>


    <section id="products-home">
        <div class="row">
            <div class="col-1">
                <h6>Our Products</h6>
                <h2>Specialist products <span class="dual-heading">for Professionals</span></h2>
            </div>


            <div class="col-2">
                <div class="col-product">
                    <div class="thumb-product-1 thumb-background"></div>
                    <div class="content-product">
                        <h5>Liquid Admixture for HPC</h5>
                        <h3>Peramix sc-50</h3>
                        <p>
                            High Performance Concrete ensures unmatched structural density and environmental
                            resistance due to its chemical bonding and total impermeability to
                            liquids and gases.
                        </p>
                    </div>
                </div>

                <div class="col-product">
                    <div class="thumb-product-2 thumb-background"></div>
                    <div class="content-product">
                        <h5>Pre mixed</h5>
                        <h3>Peracrete</h3>
                        <p>
                            A pre-bagged Cementitious mix offering durable resurfacing for various surfaces,
                            applied
                            10-25mm thick, enhancing aesthetics, reducing shrinkage, and providing waterproofing
                            and
                            corrosion resistance.
                        </p>
                    </div>
                </div>

                <div class="col-product">
                    <div class="thumb-product-3 thumb-background"></div>
                    <div class="content-product">
                        <h5>Finishing</h5>
                        <h3>Peramax</h3>
                        <p>
                            Boosts cement's value, enhancing slurry volume by 10-15%, and elevates concrete's
                            impermeability, strength, and durability, while resisting chemicals, erosion,
                            cracking,
                            and
                            efflorescence.
                        </p>
                    </div>
                </div>

                <div class="col-product">
                    <div class="thumb-product-4 thumb-background"></div>
                    <div class="content-product">
                        <h5>Pre mixed</h5>
                        <h3>Perazzo</h3>
                        <p>
                            A pre-blended mix that offers thin, defect-free toppings, optimizes cement grain
                            reduction,
                            simplifies the polishing process, and enhances concrete's density and waterproofing.
                        </p>
                    </div>
                </div>

                <div class="col-product">
                    <div class="thumb-product-5 thumb-background"></div>
                    <div class="content-product">
                        <h5>Finishing</h5>
                        <h3>Peraguard</h3>
                        <p>
                            Peraguard's unique inorganic formula triggers reactions in concrete, producing
                            micro-reinforcing crystals that enhance surface density and strength for both old and
                            new
                            concrete.
                        </p>
                    </div>
                </div>

                <div class="col-product">
                    <div class="thumb-product-6 thumb-background"></div>
                    <div class="content-product">
                        <h5>Pre mixed</h5>
                        <h3>PeraXskim</h3>
                        <p>
                            A modified cement based render designed to provide weather resistant, decorative,
                            render
                            skim
                            finishes, suitable for application over most building material substrates in interior
                            and
                            exterior wall applications.
                        </p>
                    </div>
                </div>



            </div>
            <div class="col-3">
                <a href="{{ route('products') }}" class="btn1 button">See All Products</a>
            </div>
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
                <h6>About Us</h6>

                <h2>PT. Pera Abadi Sentausa</h2>

                <p>PERA provide Innovative admixture technologies for concrete and cementitious mortar products.
                    Improving and maximising benefits from your cement content (VALUE)
                    in mix designs for high performance products for construction.
                </p>
                <p>
                    Our technologies are specifically enhanced for tropical climates to suit the cyclical climates
                    of wet hot and humid ecosytems and the stabilisation of surfaces, enhancing protection against
                    MIC.
                </p>
                <p>
                    Pera products benefit from ease of labour fewer processes , with low water cement ratio, self
                    curing,
                    excellent raw compaction and Non shrink, with the potential to eliminate any form of cracking
                    with
                    simple correct placement methods.
                </p>

                <div>

                    <a href="{{ route('about') }}" class="btn1 button">About PERA</a>
                </div>


            </div>
        </div>
    </section>

    <section id="catalogue">
        <div class="row">
            <div class="col-1">
                <div class="content">
                    <h6>E-Catalogue</h6>
                    <h2>Explore PERA’s Inovative Technologies Tailored for <span class="dual-heading">Tropical
                            Climates</span></h2>
                    <p>Crafted for both new constructions and rehabilitation, our products :</p>
                    <div class="catalogue-row">
                        <div class="cat-content">
                            <div class="thumb-cat-1 thumb-background"></div>
                            <div class="title-cat">
                                <h5>Enhance concrete and mortar performance.</h5>
                            </div>
                        </div>
                        <div class="cat-content">
                            <div class="thumb-cat-2 thumb-background"></div>
                            <div class="title-cat">
                                <h5>Offer low water-cement ratios, reduced shrinkage, and minimized defects.</h5>
                            </div>
                        </div>
                        <div class="cat-content">
                            <div class="thumb-cat-3 thumb-background"></div>
                            <div class="title-cat">
                                <h5>Promote a greener construction with zero CO2 emissions during hydration.</h5>
                            </div>
                        </div>
                        <div class="cat-content">
                            <div class="thumb-cat-4 thumb-background"></div>
                            <div class="title-cat">
                                <h5>Extend service life and reduce maintenance intervals.</h5>
                            </div>
                        </div>
                    </div>
                    <p>From complete hydration of the Ordinary Portland Cement (OPC) to our durable Peraxskim
                        decorative
                        wall coatings, experience the blend of quality and resilience with PT. PERA ABADI
                        SENTAUSA.
                    </p>
                    <div>
                        <a href="#" class="btn1 button btnModal"><i
                                class="fa-solid fa-file-arrow-down"></i>Download Product Catalog</a>

                    </div>

                </div>

                <div class="content-image">
                    <img src="{{ asset('uploads/images/Ilustasi Ecatelague.png') }}" alt="Ilustrasi E-Catalogue">
                </div>
            </div>

            <div class="col-2">
                <div class="form-title">
                    <h6>Distributor and Agent</h6>
                    <h2>Join Our <span class="dual-heading">Expansion Journey</span></h2>
                    <p>Become a distributor or agent and join us as we expand our products and advanced technology
                        throughout Indonesia pushing growth of sales and support!</p>
                </div>

                <div class="logo">
                    <img src="{{ asset('uploads/images/ABS.png') }}" alt="ABS Logo">
                    <img src="{{ asset('uploads/images/indocrete.png') }}" alt="Indocrete Logo">
                </div>
                <x-layouts.contact-form />

            </div>
        </div>
    </section>

    <!-- Updated 18 10 2023 -->
    <section id="youtube-slide">
        <div class="row">
            <div class="col-1">
                <h6>Our Work</h6>
                <h2>Project <span class="dual-heading">Overview</span></h2>
            </div>

            <div class="col-2">
                <div class="s-youtube">
                    <div class="slider-content">
                        <iframe width="100%" height="600"
                            src="https://www.youtube.com/embed/3UUyVlBf1rA?si=6Bml7u84uAtMgnRA&amp;controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                web-share"
                            allowfullscreen></iframe>
                        <h3>Perazzo - Jakarta - 0/0/2023</h3>

                    </div>
                    <div class="slider-content">
                        <iframe width="100%" height="600"
                            src="https://www.youtube.com/embed/3UUyVlBf1rA?si=6Bml7u84uAtMgnRA&amp;controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; 
                web-share"
                            allowfullscreen></iframe>
                        <h3>Perazzo - Bandung - 0/0/2023</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Updated 18 10 2023 -->

    <section id="faqs">
        <div class="row">
            <div class="col-1">
                <H6>Faqs</H6>
                <h2>Frequently Asked Question</h2>
            </div>

            <div class="col-2">
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <button class="accordion">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt?
                    </h5>
                </button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

            </div>
        </div>

    </section>

    <x-layouts.testimonials />
    <x-layouts.pre-footer />
    <x-layouts.footer />
    <!-- Updated 18 10 2023 -->

    <section id="popup-catalog">

        <div id="overlayModalCat" class="overlay-modal-cat">

            <div class="popup-content">
                <span class="close-catalog">&times;</span>
                <h2>Download Product Catalog</h2>
                <div class="pdf-download">
                    <a href="{{ asset('uploads/doc/TDS PERAMIX SC-50 CONCRETE ADMIX.pdf') }}" target="_blank"
                        class="btn5 button"><i class="fa-solid fa-file-arrow-down"></i>PERAMIX SC-50 Concrete
                        Admix</a>
                    <a href="{{ asset('uploads/doc/TDS peraxskim.pdf') }}" target="_blank" class="btn5 button"><i
                            class="fa-solid fa-file-arrow-down"></i>Peraxskim</a>
                    <a href="{{ asset('uploads/doc/TDS PERACRETE.pdf') }}" target="_blank" class="btn5 button"><i
                            class="fa-solid fa-file-arrow-down"></i>Peracrete</a>
                    <a href="{{ asset('uploads/doc/Peramax finishing aid TDS s.pdf') }}" target="_blank"
                        class="btn5 button"><i class="fa-solid fa-file-arrow-down"></i>Peramax Finishing Aids</a>
                    <a href="{{ asset('uploads/doc/Peraguard advanced liquid densifier TDS s.pdf') }}"
                        target="_blank" class="btn5 button"><i class="fa-solid fa-file-arrow-down"></i>Peraguard
                        Advanced Liquid
                        Densifier</a>
                    <a href="{{ asset('uploads/doc/TDS PERAZZO  CONCRETE  OVERLAY.pdf') }}" target="_blank"
                        class="btn5 button"><i class="fa-solid fa-file-arrow-down"></i>Perazzo Concrete Overlay</a>

                </div>
            </div>
        </div>
    </section>
    <!-- End Updated 18 10 2023 -->
    @push('body')
        <script src="{{ asset('js/static/modal-popup.js') }}"></script>
    @endpush
</x-site-layout>
