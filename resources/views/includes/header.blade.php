<header id="header" class="header d-flex align-items-center sticky-top">

    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/logo_.png') }}" alt="logo">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home<br></a></li>
                <li><a href="{{ route('home') }}#about-2">About Us</a></li>
                <li class="dropdown"><a href="{{ route('home') }}#product "><span>Brands</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Auraray</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li class="dropdown"><a href="#"><span>Hair care</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="{{ route('products.shampoo') }}">Shampoo</a></li>
                                        <li><a href="{{ route('products.conditioner') }}">Conditioner</a></li>
                                        <li><a href="{{ route('products.serum') }}">Serum</a></li>
                                        <li><a href="{{ route('products.mask') }}">Mask</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Skin care</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="{{ route('products.lotion') }}">Lotion</a></li>
                                        <li><a href="{{ route('products.shower_gel') }}">Shower gel</a></li>
                                        <li><a href="{{ route('products.shower_scrub') }}">Shower scrub</a></li>
                                        <li><a href="{{ route('products.message_oil') }}">Massage oil</a></li>
                                        <li><a href="{{ route('products.moroccan_soap') }}">Moroccan Soap</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><span>Baby care</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a href="{{ route('products.baby_bath') }}">Baby bath</a></li>
                                        <li><a href="{{ route('products.baby_cologne') }}">Baby cologne</a></li>
                                        <li><a href="{{ route('products.baby_lotion') }}">Baby lotion</a></li>
                                        <li><a href="{{ route('products.baby_oil') }}">Baby oil</a></li>
                                        <li><a href="{{ route('products.baby_shampoo') }}">Baby shampoo</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Beauty & Vitamins</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Comming Soon .... </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('home') }}#services-2">Services</a></li>
                <li><a href="{{ route('home') }}#tabs">Quality</a></li>
                <li><a href="{{ route('home') }}#contact ">Contact Us</a></li>
                <li><a href="{{ asset('assets/catalog/Auraray.pdf') }}"><i class="bi bi-download me-2" id="Catalog_icon"></i>Catalog</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>