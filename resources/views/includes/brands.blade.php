<style>
    .bg-accent {
        background-color: #ffc451 !important;
        color: #fff !important;
    }

    .bg-accent:hover {
        background-color: #e6b744 !important;
        /* slightly darker on hover */
    }

    .brand-card {
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
        height: 100%;
    }

    .brand-card:hover {
        background-color: #ffc451 !important;
        color: #000 !important;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .brand-card.selected {
        background-color: #212529 !important;
        color: #fff !important;
    }

    .brand-card.selected .brand-description {
        color: #dddddd !important;
    }

    .brand-description {
        font-size: 0.85rem;
        color: #6c757d;
        /* default muted color */
    }
</style>

<!-- Brands Section with Toggle -->
<section id="brand" class="product section" x-data="{
    selectedBrand: 'auraray',
    selectedCategory: null,
    haircareExpanded: false,
    skincareExpanded: false
}">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Brands</h2>
        <p>Check our brands selection</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="200">
        <!-- Brand Selection -->
        <div class="row justify-content-center mb-4">
            <!-- Auraray Card -->
            <div class="col-md-4 d-flex">
                <div
                    @click="selectedBrand = 'auraray'; selectedCategory = null"
                    :class="selectedBrand === 'auraray' ? 'brand-card selected' : 'brand-card bg-light text-dark border'"
                    class="p-4 text-center fw-bold rounded shadow-sm w-100">
                    Auraray
                    <p class="mt-2 mb-0 fw-normal fst-italic text-muted brand-description">
                        AuraRay is the preferred choice of salon professionals and retailers worldwide, offering a comprehensive collection of high-performance solutions across haircare, shaving, grooming, and skincare.
                    </p>
                </div>
            </div>

            <!-- Beauty & Vitamins Card -->
            <div class="col-md-4 d-flex">
                <div
                    @click="selectedBrand = 'beauty'; selectedCategory = null"
                    :class="selectedBrand === 'beauty' ? 'brand-card selected' : 'brand-card bg-light text-dark border'"
                    class="p-4 text-center fw-bold rounded shadow-sm w-100">
                    Beauty & Vitamins
                    <p class="mt-2 mb-0 fw-normal fst-italic text-muted brand-description">
                        Beauty & Vitamins brings salon-quality beauty care into everyday routines with simple, effective, and easy-to-use formulations.
                    </p>
                </div>
            </div>
        </div>


        <!-- Subcategory Selector (for Auraray) -->
        <div id="subcategory-section" class="row justify-content-center mb-4" x-show="selectedBrand === 'auraray'">
            <div class="col-md-4">
                <div @click="selectedCategory = 'haircare'"
                    :class="selectedCategory === 'haircare' ? 'bg-accent' : 'bg-light text-dark border'"
                    class="p-3 text-center fw-medium rounded shadow-sm cursor-pointer">
                    Hair Care
                </div>
            </div>
            <div class="col-md-4">
                <div @click="selectedCategory = 'skincare'"
                    :class="selectedCategory === 'skincare' ? 'bg-accent' : 'bg-light text-dark border'"
                    class="p-3 text-center fw-medium rounded shadow-sm cursor-pointer">
                    Skin Care
                </div>
            </div>
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

            @if ($haircare_products->count() > 6)
            <div class="text-center mt-3">
                <button
                    class="btn custom-toggle-btn px-4 py-2 fw-medium"
                    x-text="haircareExpanded ? 'See Less' : 'See More'"
                    @click="
      haircareExpanded = !haircareExpanded;
      if (!haircareExpanded) document.getElementById('subcategory-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
    ">
                </button>

            </div>
            @endif
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