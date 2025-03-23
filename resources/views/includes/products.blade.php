
<!-- product Section -->
<section id="product" class="product section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>product</h2>
        <p>Check our products</p>
    </div><!-- End Section Title -->


    <div class="container">
        <!--search bar-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="row gx-2 gy-2 align-items-center">
                        <!-- Category dropdown (always visible) -->
                        <div class="col-6 col-md-3">
                            <select id="category" class="form-select theme-select">
                                <option class="option_" selected>Category</option>
                                <option class="option_" value="Hair Care">Hair Care</option>
                                <option class="option_" value="Skin Care">Skin Care</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-3">
                            <select id="type" class="form-select theme-select">
                                <option class="option_" selected>Type</option>
                                <!-- Options will change dynamically based on category -->
                            </select>
                        </div>
                        <div class="col-6 col-md-3" id="flavor-container" style="display:none;">
                            <select id="flavor" class="form-select theme-select">
                                <option class="option_" selected>Scent</option>
                                <option class="option_" value="Aloevera">Aloevera</option>
                                <option class="option_" value="Lavendar">Lavendar</option>
                                <option class="option_" value="Mix fruit">Mix fruit</option>
                                <option class="option_" value="Strawberry">Strawberry</option>
                                <option class="option_" value="Papaya">Papaya</option>
                                <option class="option_" value="Coconut oil">Coconut oil</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-3" id="extract-container" style="display:none;">
                            <select id="extract" class="form-select theme-select">
                                <option class="option_" selected>Extract</option>
                                <option class="option_" value="Argan">Argan</option>
                                <option class="option_" value="Protein">Protein</option>
                                <option class="option_" value="Keratin">Keratin</option>
                                <option class="option_" value="Caviar">Caviar</option>
                                <option class="option_" value="Collagen">Collagen</option>
                                <option class="option_" value="Biotin">Biotin</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-3">
                            <select id="size" class="form-select theme-select">
                                <option class="option_" selected>Size</option>
                                <!-- Options will change dynamically -->

                                <!-- <option class="option_" value="125ML">125ML</option>
                                <option class="option_" value="1000ML">1000ML</option>
                                <option class="option_" value="3780ML">3780ML</option>
                                <option class="option_" value="4500ML">4500ML</option> -->
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button id="search" class="btn search_ theme-btn w-100" type="submit" style="color:rgb(85, 228, 56);">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="product-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li class="filter-active mt-2" id="reset" style="color:rgb(194, 76, 76);">Reset</li>
            </ul><!-- End product Filters -->

            <div id="products-lists">
                <!-- Loading Spinner -->
                <div id="loading-spinner" style="display: none; text-align: center; padding: 20px;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <!--products container-->
                @include('includes.data')
                <!-- End product Container -->
            </div>
        </div>
    </div>
</section>
<!-- /product Section -->