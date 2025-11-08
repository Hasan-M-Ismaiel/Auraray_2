@extends('layouts.app_main')

@section('title', 'Product | Face and Body mud mask - details - Face care')

@section('meta_description', "A rejuvenating mask treatment for face and body that detoxifies, hydrates, and brightens in one simple step. Whether you're targeting dullness, uneven texture, or tired skin, this mask delivers a spa-like experience, drawing out impurities while nourishing your skin for a soft, radiant finish.")


@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Products Details</h1>
                        <p class="mb-0">Check all products related to specitic category</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Auraray</li>
                    <li class="current">Face care</li>
                    <li class="current">Face and Body mud mask</li>
                </ol>
                <!-- زر الرجوع -->
                <button onclick="window.history.back()" class="btn btn-secondary mt-3">
                    ← Back
                </button>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Products Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">
            @if ($products->count())
            <h4 class="mb-4 text-center fw-bold border-bottom pb-2">Lotion</h4>
            <div class="row gx-3 gy-4 justify-content-center">
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-2">
                    <a href="{{ route('product', [$product->id]) }}" class="d-block text-center">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->type }} Product"
                                class="img-fluid" style="aspect-ratio: 1 / 1; object-fit: cover;" loading="lazy">
                            <div class="p-3 text-start">
                                <!-- <h6 class="fw-bold text-dark mb-1">{{ ucfirst($product->type) }}</h6> -->
                                <p class="mb-0 text-muted small">{{ ucfirst($product->color) }}</p>
                                <p class="mb-0 text-muted small">{{ strtoupper($product->size) }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            @endif
        </div>

    </section><!-- /Service Details Section -->

</main>

@endsection