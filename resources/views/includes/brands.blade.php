<style>
    .description.collapsed {
        max-height: 80px;
        /* adjust as needed */
    }

    .brand-logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 1rem;
        /* same as mb-3 */
    }
</style>
<!-- Brands Section with Toggle -->
<section id="brand" class="product section">
    <!-- Section Title -->
    <div class="section-title" data-aos="fade-up">
        <h2>Brands</h2>
        <p>Check our brands</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div x-data="brandsComponent()" class="">

            <!-- Top Section: Two Brands -->
            <div x-show="step === 'main'" class="row transition" x-transition>
                <!-- Auraray Brand Card -->
                <div class="col-md-6 mb-4" x-data="{ expanded: false }">
                    <div class="p-5 bg-light shadow-sm hover-shadow rounded border d-flex flex-column"
                        :style="expanded ? 'height: auto; transition: all 0.3s ease;' : 'height: 380px; transition: all 0.3s ease;'">

                        <!-- Logo -->
                        <div class="brand-logo-container">
                            <img src="{{ asset('assets/img/logo__.png') }}" alt="Auraray Logo" style="max-width: 215px; height: auto;">
                        </div>

                        <!-- Compact Navigate Button -->
                        <div class="text-center" style="margin-bottom: 0.5rem;">
                            <button @click="selectBrand('Auraray')" class="btn btn-sm btn-outline-secondary">
                                Explore
                            </button>
                        </div>

                        <!-- Description -->
                        <p class="p-2 description" :class="{ 'collapsed': !expanded }"
                            style="flex-grow: 1; overflow: hidden; transition: max-height 0.3s ease;">
                            AuraRay is the preferred choice of salon professionals and retailers worldwide, offering a comprehensive collection of high-performance solutions across haircare, shaving, grooming, and skincare. Designed for both professionals and consumers, AuraRay combines luxurious textures with proven efficacy to elevate daily beauty rituals. Trusted by experts, loved by users, and crafted for visible results.
                        </p>

                        <!-- Show more / less button -->
                        <button @click.stop="expanded = !expanded" class="btn btn-link p-0" style="font-size: 0.9rem;">
                            <span x-text="expanded ? 'Show less' : 'Show more'"></span>
                        </button>
                    </div>
                </div>


                <!-- Beauty and Vitamins Brand Card -->
                <div class="col-md-6 mb-4" x-data="{ expanded: false }">
                    <div class="p-5 bg-light shadow-sm hover-shadow rounded border d-flex flex-column"
                        :style="expanded ? 'height: auto; transition: all 0.3s ease;' : 'height: 380px; transition: all 0.3s ease;'">

                        <!-- Logo -->
                        <div class="brand-logo-container">
                            <img src="{{ asset('assets/img/logo_2.png') }}" alt="Beauty and Vitamins Logo" style="max-width: 200px; height: auto;">
                        </div>

                        <!-- Compact Navigate Button -->
                        <div class="text-center" style="margin-bottom: 0.5rem;">
                            <button @click="selectBrand('Beauty and Vitamins')" class="btn btn-sm btn-outline-secondary">
                                Explore
                            </button>
                        </div>

                        <!-- Description -->
                        <p class="p-2 description" :class="{ 'collapsed': !expanded }"
                            style="flex-grow: 1; overflow: hidden; transition: max-height 0.3s ease;">
                            Beauty & Vitamins brings salon-quality beauty care into everyday routines with simple, effective, and easy-to-use formulations. Perfect for salons, professionals, and personal care enthusiasts, this brand offers essential haircare, grooming, and skincare solutions that seamlessly integrate into any lifestyle. Featuring clean ingredients, consistent performance, and a straightforward approach, Beauty & Vitamins delivers expert care without the complexity. Beauty made simple, smart, and accessible — every day.
                        </p>

                        <!-- Show more / less button -->
                        <button @click.stop="expanded = !expanded" class="btn btn-link p-0" style="font-size: 0.9rem;">
                            <span x-text="expanded ? 'Show less' : 'Show more'"></span>
                        </button>
                    </div>
                </div>

            </div>


            <!-- Step 2: Brand -> Categories -->
            <div x-show="step === 'categories'" x-transition>
                <button class="btn btn-sm btn-outline-secondary mb-3" @click="goBack()">← Back</button>
                <h4 class="mb-3" x-text="brand"></h4>
                <div class="row">
                    <!-- Hair Care -->
                    <div class="col-md-6">
                        <div class="p-4 bg-light rounded border shadow-sm hover-shadow"
                            :class="{ 'cursor-pointer': brand === 'Auraray' }"
                            @click="brand === 'Auraray' ? selectCategory('Hair care') : showComingSoon()"
                            style="cursor: pointer; transition: all 0.3s ease;">
                            <template x-if="brand === 'Auraray'">
                                <h5>Hair Care</h5>
                            </template>
                            <template x-if="brand === 'Beauty and Vitamins'">
                                <p class="text-muted mt-2">Coming soon</p>
                            </template>
                        </div>
                    </div>
                    <!-- Skin Care -->
                    <div class="col-md-6">
                        <div class="p-4 bg-light rounded border shadow-sm hover-shadow"
                            :class="{ 'cursor-pointer': brand === 'Auraray' }"
                            @click="brand === 'Auraray' ? selectCategory('Skin care') : showComingSoon()"
                            style="cursor: pointer; transition: all 0.3s ease;">
                            <template x-if="brand === 'Auraray'">
                                <h5>Skin Care</h5>
                            </template>
                            <template x-if="brand === 'Beauty and Vitamins'">
                                <p class="text-muted mt-2">Coming soon</p>
                            </template>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3: Category -> Types -->
            <div x-show="step === 'types'" x-transition>
                <button class="btn btn-sm btn-outline-secondary mb-3" @click="goBack()">← Back</button>
                <h5 class="mb-3" x-text="category"></h5>
                <div class="row">
                    <template x-for="t in getTypes()" :key="t">
                        <div class="col-md-3 mb-3">
                            <div class="p-3 bg-white border rounded shadow-sm hover-shadow"
                                @click="fetchProducts(t)"
                                style="cursor: pointer; transition: all 0.3s ease;">
                                <span x-text="t"></span>
                            </div>
                        </div>
                    </template>
                </div>
            </div>


            <!-- Step 4: Product List -->
            <div x-show="step === 'products'" x-transition>
                <button class="btn btn-sm btn-outline-secondary mb-3" @click="goBack()">← Back</button>
                <h5 class="mb-3">Products for <span x-text="type"></span></h5>
                <div class="row">
                    <template x-for="product in products" :key="product.id">
                        <div class="col-md-2 mb-4">
                            <div class="card h-100">
                                <a :href="`/product/${product.id}`" class="btn btn-outline-dark btn-sm">
                                    <img :src="product.image" class="card-img-top" alt="" loading="lazy" />
                                    <div class="card-body">
                                        <h6 class="card-title" x-text="product.type + ' - ' + product.size"></h6>

                                        <template x-if="product.category === 'Hair Care'">
                                            <p class="card-text" x-text="product.category + ' - ' + product.extract"></p>
                                        </template>

                                        <template x-if="product.category === 'Skin Care'">
                                            <p class="card-text" x-text="product.category + ' - ' + product.flavor"></p>
                                        </template>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    function brandsComponent() {
        return {
            step: 'main',
            brand: '',
            category: '',
            type: '',
            products: [],

            selectBrand(brand) {
                this.brand = brand;
                this.step = 'categories';
            },

            selectCategory(category) {
                this.category = category;
                this.step = 'types';
            },

            getTypes() {
                const map = {
                    'Hair care': ['Shampoo', 'Conditioner', 'Serum', 'Mask'],
                    'Skin care': ['Lotion', 'Shower gel', 'Shower scrub', 'Massage oil', 'Moroccan Soap'],
                };
                return map[this.category] || [];
            },

            async fetchProducts(type) {
                this.type = type;
                const res = await fetch(`/api/products?type=${type}&brand=${this.brand}`);
                this.products = await res.json();
                this.step = 'products';
            },

            goBack() {
                if (this.step === 'products') this.step = 'types';
                else if (this.step === 'types') this.step = 'categories';
                else if (this.step === 'categories') this.step = 'main';
            },

            showComingSoon() {
                alert("This category will be available soon under Beauty and Vitamins.");
            }
        }
    }
</script>