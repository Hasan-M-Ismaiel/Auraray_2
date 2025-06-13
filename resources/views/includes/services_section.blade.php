<style>
    @media (min-width: 768px) {
        .services-2 .row {
            align-items: center;
            /* Vertically center both columns */
        }
    }
</style>

<!-- Services 2 Section -->
<section id="services-2" class="services-2 section">

    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-md-6 col-lg-4">
                <span class="content-subtitle">Our Services</span>
                <h2 class="content-title">
                    Premium Beauty & Grooming Solutions
                </h2>
                <p class="mb-5">
                    At Al Enayah Al Kamlah, we specialize in delivering high-quality beauty and grooming solutions tailored for salons, professionals, and beauty brands worldwide.<br><br>
                    Our expertise spans the full spectrum of hair care, skincare, and grooming product development — blending outstanding performance with luxurious sensory experiences.<br><br> We offer fully customizable formulations, signature fragrances, and flexible packaging options to perfectly match the distinct needs of each client and partner.
                    <br><br>
                    Backed by global ISO certifications, every product we create meets the highest standards of quality, safety, and reliability. With our dedicated 24/7 customer support, we’re here to guide and support your brand every step of the way — from initial concept to final creation.
                </p>
            </div>
            <div class="col-md-6 col-lg-6 ps-lg-5">
                <div class="row">

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="{{ route('service_1') }}">
                                    <div class="carousel-image-wrapper">
                                        <img src="assets/img/services_1.png" alt="" loading="lazy" class="d-block w-100" alt="...">
                                        <div class="overlay"></div>
                                        <div class="caption-overlay">
                                            <h5 style="color: whitesmoke;">Private Label Manufacturing</h5>
                                            <p style="color: whitesmoke;">Create Your Own Brand with Custom Beauty Products</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('service_2') }}">
                                    <div class="carousel-image-wrapper">
                                        <img src="assets/img/services_2.png" alt="" loading="lazy" class="d-block w-100" alt="...">
                                        <div class="overlay"></div>
                                        <div class="caption-overlay">
                                            <h5 style="color: whitesmoke;">Beauty Kits for Hotels</h5>
                                            <p style="color: whitesmoke;">Enhance Your Hotel Experience with Luxury Beauty Kits</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="{{ route('service_3') }}">
                                    <div class="carousel-image-wrapper">
                                        <img src="assets/img/services_3.png" alt="" loading="lazy" class="d-block w-100" alt="...">
                                        <div class="overlay"></div>
                                        <div class="caption-overlay">
                                            <h5 style="color: whitesmoke;">Exporting & Delivery Services</h5>
                                            <p style="color: whitesmoke;"> Reliable Exporting and Bulk Shipping of Premium Beauty Products</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
    </div>
</section><!-- /Services 2 Section -->