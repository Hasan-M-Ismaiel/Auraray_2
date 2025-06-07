<!-- Brands Section with Toggle -->
<section id="brand" class="product section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Brands</h2>
        <p>Check our brands selection</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="200">
        <div x-data="brandsComponent()" class="container py-5">

            <!-- Top Section: Two Brands -->
            <div x-show="step === 'main'" class="row transition" x-transition>
                <div class="col-md-6">
                    <div class="p-5 bg-light" @click="selectBrand('Auraray')">
                        <h3>Auraray</h3>
                        <p>Premium cosmetic products for salons.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-5 bg-light" @click="selectBrand('Beauty and Vitamins')">
                        <h3>Beauty and Vitamins</h3>
                        <p>Everyday beauty and care products.</p>
                    </div>
                </div>
            </div>

            <!-- Step 2: Brand -> Categories -->
            <div x-show="step === 'categories'" x-transition>
                <button class="btn btn-sm btn-outline-secondary mb-3" @click="goBack()">← Back</button>
                <h4 class="mb-3" x-text="brand"></h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="p-4 bg-light" @click="selectCategory('Hair care')">
                            <h5>Hair Care</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-4 bg-light" @click="selectCategory('Skin care')">
                            <h5>Skin Care</h5>
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
                            <div class="p-3 bg-white border" @click="fetchProducts(t)">
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
                        <div class="col-md-4 mb-4">
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
                    'Skin care': ['Lotion', 'Shower gel', 'Shower scrub', 'Message oil', 'Moroccan soap'],
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
            }
        }
    }
</script>