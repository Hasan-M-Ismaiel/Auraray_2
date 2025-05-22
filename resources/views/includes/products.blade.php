<!-- this is for a see more button -->
<style>
    .custom-toggle-btn {
        color: #fff;
        background-color: #212529;
        border: none;
        transition: background-color 0.3s ease;
    }

    .custom-toggle-btn:hover {
        background-color: #343a40;
        /* A slightly lighter dark shade for hover */
    }

    .custom-toggle-btn:focus {
        box-shadow: 0 0 0 0.2rem rgba(33, 37, 41, 0.25);
    }
</style>



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
                <div class="col-lg-2 col-md-4 col-sm-6 haircare-product product-item {{ $index >= 6 ? '' : 'show' }}">
                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->type }} Product" class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">

                            <div class="p-3 text-start">
                                <h6 class="fw-bold text-dark mb-1">{{ ucfirst($product->type) }}</h6>
                                <p class="mb-0 text-muted small">{{ ucfirst($product->extract) }}</p>
                                <p class="mb-0 text-muted small">{{ strtoupper($product->size) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if ($haircare_products->count() > 6)
            <div class="text-center mt-3">
                <button
                    class="btn custom-toggle-btn px-4 py-2 fw-medium"
                    onclick="toggleProducts('haircare-product', this)">
                    See More
                </button>
            </div>
            @endif

        </div>
        @endif

        <!-- Skin Care Products -->
        @if ($skincare_products->count())
        <div>
            <h4 class="mb-4 text-center fw-bold border-bottom pb-2">Skin Care</h4>
            <div class="row gx-3 gy-4 justify-content-center">
                @foreach ($skincare_products as $index => $product)
                <div class="col-lg-2 col-md-4 col-sm-6 skincare-product product-item {{ $index < 6 ? 'show' : '' }}">

                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->type }} Product" class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">

                            <div class="p-3 text-start">
                                <h6 class="fw-bold text-dark mb-1">{{ ucfirst($product->type) }}</h6>
                                <p class="mb-0 text-muted small">{{ ucfirst($product->flavor) }}</p>
                                <p class="mb-0 text-muted small">{{ strtoupper($product->size) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            @if ($skincare_products->count() > 6)
            <div class="text-center mt-3">
                <button
                    class="btn custom-toggle-btn px-4 py-2 fw-medium"
                    onclick="toggleProducts('skincare-product', this)">
                    See More
                </button>
            </div>
            @endif


        </div>
        @endif

    </div>
</section>
<!-- /product Section -->


<!-- see more products -->
<script>
    function toggleProducts(className, btn) {
        const items = document.querySelectorAll('.' + className + '.product-item');
        let isExpanded = btn.dataset.expanded === 'true';

        items.forEach((item, index) => {
            if (index >= 6) {
                if (isExpanded) {
                    item.classList.remove('show');
                } else {
                    item.classList.add('show');
                }
            }
        });

        btn.textContent = isExpanded ? 'See More' : 'See Less';
        btn.dataset.expanded = !isExpanded;
    }
</script>