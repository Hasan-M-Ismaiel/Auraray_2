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
            <h4 class="mb-4 text-center fw-bold border-bottom pb-2">Hair Care</h4>
            <div class="row gx-3 gy-4 justify-content-center">
                @foreach ($haircare_products as $product)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset($product->image) }}" alt="Hair Care Product" class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">
                            <div style="text-align: left;" class="ms-2">{{$product->type}}</div>
                            <div style="text-align: left;" class="ms-2">{{$product->flavor}}</div>
                            <div style="text-align: left;" class="ms-2">{{$product->size}}</div>
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
            <h4 class="mb-4 text-center fw-bold border-bottom pb-2">Skin Care</h4>
            <div class="row gx-3 gy-4 justify-content-center">
                @foreach ($skincare_products as $product)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset($product->image) }}" alt="Skin Care Product" class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">
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