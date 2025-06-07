
<!-- Brands Section with Toggle -->
<section id="brand" class="product section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Brands</h2>
        <p>Check our brands selection</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="200">
        <!-- Brand Selection -->
        <div class="row justify-content-center mb-4">
            
        </div>



        <!-- Coming Soon Message -->
        <div x-show="selectedBrand === 'beauty'" class="text-center py-5">
            <h4 class="text-muted">Products are coming soon. Stay tuned!</h4>
        </div>

        <!-- Hair Care Products -->
        <div x-show="selectedCategory === 'haircare'" class="mb-5">
            @if ($haircare_products->count())
            <h4 class="mb-4 text-center fw-bold border-bottom pb-2">Hair Care</h4>
            <div class="row gx-3 gy-4 justify-content-center">
                @foreach ($haircare_products as $index => $product)
                <template x-if="haircareExpanded || {{ $index }} < 6">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->type }} Product"
                                    class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">
                                <div class="p-3 text-start">
                                    <h6 class="fw-bold text-dark mb-1">{{ ucfirst($product->type) }}</h6>
                                    <p class="mb-0 text-muted small">{{ ucfirst($product->extract) }}</p>
                                    <p class="mb-0 text-muted small">{{ strtoupper($product->size) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </template>
                @endforeach
            </div>

            @endif
        </div>


        <!-- Skin Care Products -->
        <div x-show="selectedCategory === 'skincare'">
            @if ($skincare_products->count())
            <h4 class="mb-4 text-center fw-bold border-bottom pb-2">Skin Care</h4>
            <div class="row gx-3 gy-4 justify-content-center">
                @foreach ($skincare_products as $index => $product)
                <template x-if="skincareExpanded || {{ $index }} < 6">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->type }} Product"
                                    class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">
                                <div class="p-3 text-start">
                                    <h6 class="fw-bold text-dark mb-1">{{ ucfirst($product->type) }}</h6>
                                    <p class="mb-0 text-muted small">{{ ucfirst($product->flavor) }}</p>
                                    <p class="mb-0 text-muted small">{{ strtoupper($product->size) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </template>
                @endforeach
            </div>

            @if ($skincare_products->count() > 6)
            <div class="text-center mt-3">
                <button
                    class="btn custom-toggle-btn px-4 py-2 fw-medium"
                    x-text="skincareExpanded ? 'See Less' : 'See More'"
                    @click="
      skincareExpanded = !skincareExpanded;
      if (!skincareExpanded) document.getElementById('subcategory-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
    ">
                </button>
            </div>
            @endif
            @endif
        </div>

    </div>
</section>