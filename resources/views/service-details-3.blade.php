@extends('layouts.app_main')

@section('content')


<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Service Details</h1>
                        <p class="mb-0">Reliable Exporting and Bulk Shipping of Premium Beauty Products</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Service Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4>Download Catalog</h4>
                        <div class="download-catalog">
                            <a href="assets/catalog/Auraray.pdf"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                        </div>
                    </div><!-- End Services List -->


                    <div class="service-box mt-3">
                        <h4>Exporting & Delivery Services</h4>
                        <ul style="list-style-type: none;">
                            <li><i class="bi bi-check-circle" id="check"></i> <span>At Al Enayah Al Kamlah, we offer seamless exporting and delivery solutions for our AuraRay products. Your orders will arrive on time and in perfect condition, no matter where you are.</span></li>
                        </ul>
                    </div><!-- End Services List -->


                    <div class="service-box mt-3">
                        <h4>Have a Question?</h4>
                        <div class="download-catalog">
                            <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+971 6 715 5323</span></p>
                            <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:info@auraray.ae">info@auraray.ae</a></p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services_3.png" alt="" class="img-fluid services-img">
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

</main>
@endsection