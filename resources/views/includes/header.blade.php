<header id="header" class="header d-flex align-items-center sticky-top">

    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="{{ asset('assets/img/logo_.png') }}" alt="...">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home<br></a></li>
                <li><a href="{{ route('home') }}#about">About Us</a></li>
                <li><a href="{{ route('home') }}#tabs">QA</a></li>
                <li><a href="{{ route('home') }}#product ">Products</a></li>
                <li><a href="{{ route('home') }}#services-2">Services</a></li>
                <li><a href="{{ route('home') }}#contact ">Contact Us</a></li>
                <li><a href="assets/catalog/Auraray.pdf"><i class="bi bi-download me-2" style="color:rgb(56, 197, 20);"></i>Catalog</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>