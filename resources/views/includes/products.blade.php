<!-- product Section -->
<section id="product" class="product section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        <p>Check our product selection</p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="200">

        <!-- Hair Care Products -->
        @if ($haircare_products->count())
        <div class="mb-5">
            <div class="row gy-4 justify-content-center">
                @foreach ($haircare_products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset($product->image) }}" alt="Hair Care Product" class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Skin Care Products -->
        @if ($skincare_products->count())
        <div>
            <div class="row gy-4 justify-content-center">
                @foreach ($skincare_products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset($product->image) }}" alt="Skin Care Product" class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
<!-- /product Section -->
