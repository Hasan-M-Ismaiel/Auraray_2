<!-- Contact Section -->
<section id="contact" class="contact section">

    
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <span class="content-subtitle pb-5">Contact us</span>

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 270px;"
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3606.803209040357!2d55.606896!3d25.310814999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDE4JzM4LjkiTiA1NcKwMzYnMjQuOCJF!5e0!3m2!1sen!2s!4v1734752876839!5m2!1sen!2s"
                frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>Sajaa Industrial, Sharjah , UAE</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+971 6 715 5323</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@ekcosmetic.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">

                <!-- Validation Errors -->
                @if ($errors->any())
                <div class="mb-4 mt-4" id="signUpForm">
                    <span class="pe-4 font-medium text-danger border border-danger border-rounded rounded">
                        <span class="bg-danger py-2 px-2  text-white">Whoops!</span>{{ __(' Something went wrong.') }}
                    </span>

                    <ul class="mt-3 list-group list-group-flush text-danger">
                        @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action='{{ route("storeContact") }}' method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="full_name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section>
<!-- /Contact Section -->