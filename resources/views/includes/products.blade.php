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
                @foreach ($haircare_products as $index => $product)
                <div class="col-lg-2 col-md-4 col-sm-6 haircare-product {{ $index >= 6 ? 'd-none' : '' }}">
                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm">
                            <img src="{{ asset($product->image) }}" alt="Hair Care Product" class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">
                            <div style="text-align: left;" class="ms-2 mb-2">{{$product->type}}</div>
                            <div style="text-align: left;" class="ms-2 mb-2">{{$product->flavor}}</div>
                            <div style="text-align: left;" class="ms-2 mb-2">{{$product->size}}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if ($haircare_products->count() > 6)
            <div class="text-center mt-3">
                <button class="btn btn-outline-primary" onclick="toggleProducts('haircare-product', this)">See More</button>
            </div>
            @endif
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
                            <div style="text-align: left;" class="ms-2 mb-2">{{$product->type}}</div>
                            <div style="text-align: left;" class="ms-2 mb-2">{{$product->flavor}}</div>
                            <div style="text-align: left;" class="ms-2 mb-2">{{$product->size}}</div>
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


<!-- see more products -->
<script>
    function toggleProducts(className, btn) {
        const items = document.querySelectorAll('.' + className);
        let isExpanded = btn.dataset.expanded === 'true';

        items.forEach((item, index) => {
            if (index >= 6) {
                item.classList.toggle('d-none', isExpanded);
            }
        });

        btn.textContent = isExpanded ? 'See More' : 'See Less';
        btn.dataset.expanded = !isExpanded;
    }
</script>
