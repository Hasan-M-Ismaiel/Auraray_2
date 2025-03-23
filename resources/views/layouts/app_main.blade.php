<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Auraray</title>
    <meta name="description" content="AuraRay by Al Enayah Al Kamlah: Premium cosmetic products for hair salons. Offering professional-grade hair care, shaving & grooming, and skin care essentials.">
    <meta name="keywords" content="AuraRay, Al Enayah Al Kamlah, hair salon products, premium cosmetics, professional hair care, shaving gel, skin care products, shampoo, conditioner, hair gel, face scrub, body lotion, body wash, shower gel, oil massage, salon supplies, private label cosmetics, contract manufacturing, salon-grade products">
    <meta name="author" content="Al Enayah Al Kamlah Manufacture of Cosmetic Tools & Supply L.L.C.">
    <meta name="robots" content="index, follow">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


</head>

<body class="index-page">

    <!-- Start header Area -->
    @include('includes.header')
    <!-- End header Area -->

    <!--content-->
    @yield('content')
    <!--end content-->

    <!-- Start Footer Area -->
    @include('includes.footer')
    <!-- End Footer Area -->

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- app JS File parallex -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!--for the sweet alert-->
    @include('sweetalert::alert')
    @yield('scripts')

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $(window).on('hashchange', function() {
                if (window.location.hash) {
                    var page = window.location.hash.replace('#', '');
                    if (page == Number.NaN || page <= 0) {
                        return false;
                    } else {
                        getData(page);
                    }
                }
            });

            // pagination click
            $(document).on('click', '.pagination a', function(event) {
                $('li').removeClass('active');
                $(this).parent('li').addClass('active');
                event.preventDefault();

                var myurl = $(this).attr('href');
                var page = $(this).attr('href').split('page=')[1];

                var category = $('#category').find(":selected").val();
                var type = $('#type').find(":selected").val();
                var flavor = $('#flavor').find(":selected").val();
                var extract = $('#extract').find(":selected").val();
                var size = $('#size').find(":selected").val();
                event.preventDefault();

                if (category == "Category") {
                    category = null;
                }

                if (type == "Type") {
                    type = null;
                }

                if (size == "Size") {
                    size = null;
                }

                if (flavor == "Scent") {
                    flavor = null;
                }

                if (extract == "Extract") {
                    extract = null;
                }

                if (category != null || type != null || size != null || flavor != null || extract != null) {
                    getData__(category, type, flavor, extract, size, page);
                } else {
                    getData(page);
                }

            });

            function showLoading() {
                // Add overlay and blur effect
                if ($("#loading-overlay").length === 0) {
                    $("#products-lists").append('<div id="loading-overlay"><span class="spinner-border text-primary" role="status"></span> <strong>Loading...</strong></div>');
                }
                $("#products-lists").addClass("loading"); // Apply blur effect
            }

            function hideLoading(data) {
                $("#products-lists").removeClass("loading"); // Remove blur effect
                $("#loading-overlay").remove(); // Remove overlay
                $("#products-lists").html(data); // Load new content
            }

            function getData__(category, type, flavor, extract, size, page) {
                showLoading(); // Show loading before request
                $.ajax({
                        url: '/products?category=' + category + '&type=' + type + '&flavor=' + flavor + '&size=' + '&extract=' + extract + size + '&page=' + page,
                        type: "get",
                        datatype: "html",
                    })
                    .done(function(data) {
                        $("#products-lists").empty().html(data);
                        hideLoading(data); // Hide loading and display content
                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError) {
                        alert('No response from server');
                        hideLoading(""); // Remove loading if there's an error
                    })
            }

            function getData(page) {
                showLoading();
                $.ajax({
                        url: '?page=' + page,
                        type: "get",
                        datatype: "html",
                    })
                    .done(function(data) {
                        $("#products-lists").empty().html(data);
                        hideLoading(data);

                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError) {
                        alert('No response from server');
                        hideLoading(""); // Remove loading if there's an error

                    })
            }

            //search 
            $(document).on('click', '.search_', function(event) {
                var category = $('#category').find(":selected").val();
                var type = $('#type').find(":selected").val();
                var flavor = $('#flavor').find(":selected").val();
                var extract = $('#extract').find(":selected").val();
                var size = $('#size').find(":selected").val();
                event.preventDefault();

                if (category == "Category") {
                    category = null;
                }

                if (type == "Type") {
                    type = null;
                }

                if (size == "Size") {
                    size = null;
                }

                if (flavor == "Scent") {
                    flavor = null;
                }

                if (extract == "Extract") {
                    extract = null;
                }
                getData_(category, type, flavor, extract, size);
            });

            function getData_(category, type, flavor, extract, size) {
                showLoading();
                $.ajax({
                        url: '/products?category=' + category + '&type=' + type + '&flavor=' + flavor + '&extract=' + extract + '&size=' + size,
                        type: "get",
                        datatype: "html",
                    })
                    .done(function(data) {
                        $("#products-lists").empty().html(data);
                        hideLoading(data);
                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError) {
                        alert('No response from server');
                        hideLoading(""); // Remove loading if there's an error
                    })
            }

            //reset 
            $("#reset").click(function() {
                $('#category').val('Category');
                $('#type').val('Type');
                $('#flavor').val('Scent');
                $('#extract').val('Extract');
                $('#size').val('Size');
                // Reset Type options
                var typeSelect = document.getElementById('type');
                typeSelect.innerHTML = '<option class="option_" selected>Type</option>';

                // Reset Size options
                var sizeSelect = document.getElementById('size');
                sizeSelect.innerHTML = '<option class="option_" selected>Size</option>';

                // Clear and hide all other components
                document.getElementById('flavor-container').style.display = 'none';
                document.getElementById('extract-container').style.display = 'none';

                getData_reset();
            });

            function getData_reset() {
                $.ajax({
                        url: '?page=1',
                        type: "get",
                        datatype: "html",
                    })
                    .done(function(data) {
                        $("#products-lists").empty().html(data);
                        // location.hash = page;
                    })
                    .fail(function(jqXHR, ajaxOptions, thrownError) {
                        alert('No response from server');
                    });
            }
        });
    </script>

    <!--search dynamic select-->
    <script>
        // When the category is changed
        document.getElementById('category').addEventListener('change', function() {
            var category = this.value;

            // Reset Type options
            var typeSelect = document.getElementById('type');
            typeSelect.innerHTML = '<option class="option_" selected>Type</option>';

            // Reset size options
            var sizeSelect = document.getElementById('size');
            sizeSelect.innerHTML = '<option class="option_" selected>Size</option>';

            // Clear and hide all other components
            document.getElementById('flavor-container').style.display = 'none';
            document.getElementById('extract-container').style.display = 'none';

            // Show category-specific components
            if (category === 'Hair Care') {
                // Show Extract and populate Type with hair care options
                document.getElementById('extract-container').style.display = 'block';
                typeSelect.innerHTML += `
                <option class="option_" value="Shampoo">Shampoo</option>
                <option class="option_" value="Conditioner">Conditioner</option>
                <option class="option_" value="Serum">Serum</option>
                <option class="option_" value="Mask">Mask</option>
            `;

                sizeSelect.innerHTML += `
                <option class="option_" value="125ML">125ML</option>
                <option class="option_" value="1000ML">1000ML</option>
                <option class="option_" value="3780ML">3780ML</option>
                <option class="option_" value="4500ML">4500ML</option>
            `;
            } else if (category === 'Skin Care') {
                // Show Scent and populate Type with skin care options
                document.getElementById('flavor-container').style.display = 'block';
                typeSelect.innerHTML += `
                <option class="option_" value="Lotion">Lotion</option>
                <option class="option_" value="Shower gel">Shower gel</option>
                <option class="option_" value="Shower scrub">Shower scrub</option>
                <option class="option_" value="Massage oil">Massage oil</option>
            `;
                sizeSelect.innerHTML += `
                <option class="option_" value="125ML">125ML</option>
                <option class="option_" value="1000ML">1000ML</option>
                <option class="option_" value="3780ML">3780ML</option>
                <option class="option_" value="4500ML">4500ML</option>
            `;
            }
        });
    </script>
</body>

</html>