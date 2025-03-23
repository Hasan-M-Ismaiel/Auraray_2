<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                <div class="widget">
                    <h3 class="widget-heading">About Us</h3>
                    <p class="mb-4">
                    <div class="footer-contact">
                        <p>Al Enayah Al Kamlah Manufacture Of Cosmetic Tools & Supplies L.L.C</p>
                        <p class="mt-3"><strong>Location:</strong> <span>Sajaa Industrial | UAE, Sharjah</span></p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+971 6 715 5323</span></p>
                        <p><strong>Email:</strong> <span><a href="mailto:info@auraray.ae">info@auraray.ae</a></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
                <div class="widget">
                    <h3 class="widget-heading">Navigation</h3>
                    <ul class="list-unstyled float-start me-5">
                        <li><a href="{{ route('home') }}"> Home</a></li>
                        <li><a href="{{ route('home') }}#about"> About us</a></li>
                        <li><a href="{{ route('home') }}#services"> Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5">
                <div class="widget">
                    <h3 class="widget-heading">Our Services</h3>
                    <ul class="list-unstyled footer-blog-entry">
                        <li>
                            <span class="d-block date">May 3, 2020</span>
                            <a href="{{ route('service_1') }}">Private Label Manufacturing</a>
                        </li>
                        <li>
                            <span class="d-block date">May 3, 2020</span>
                            <a href="{{ route('service_2') }}">Beauty Kits for Hotels</a>
                        </li>
                        <li>
                            <span class="d-block date">May 3, 2020</span>
                            <a href="{{ route('service_3') }}">Exporting & Delivery Services</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5">
                <div class="widget">
                    <h3 class="widget-heading">Connect</h3>
                    <ul class="list-unstyled social-icons light mb-3">
                        <li>
                            <a href="#"><span class="bi bi-facebook"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-twitter-x"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-linkedin"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-google"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-google-play"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <div class="footer-subscribe">
                        <h3 class="widget-heading">Subscribe</h3>
                        <form action='{{ route("storeEmail") }}' method="post" class="php-email-form">
                            <div class="mb-2">
                                <input type="email" class="form-control" name="email_footer" placeholder="Enter your email">
                                <button type="submit" class="btn btn-link">
                                    <span class="bi bi-arrow-right"></span>
                                </button>
                            </div>
                            @csrf
                            <div class="newsletter-form">
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your subscription request has been sent. Thank you!
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">AuraRay</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Made with love UAE-2025
                 <!-- <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </div>
</footer>
