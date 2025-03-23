@extends('layouts.app_main')

@section('content')


<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Product Details</h1>
                        <p class="mb-0">{{ $product->brief }}.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Product Details</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- product Details Section -->
    <section id="product-details" class="product-details section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="product-details-slider swiper init-swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{ asset($product->image) }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="product-info" data-aos="fade-up" data-aos-delay="200">
                        <h3>Auraray</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $product->category }}</li>
                            <li><strong>Size</strong>: {{ $product->size }}</li>
                            <li><strong>Ingredients</strong>: {{ $product->ingredients }}</li>
                            <li><strong>Description</strong>: {{ $product->description}}</li>
                            @if($product->category == "Hair care")
                            <li><strong>Main Extract</strong>: {{ $product->extract}}</li>
                            @else
                            <li><strong>Main Scent</strong>: {{ $product->flavor}}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /product Details Section -->

</main>

@endsection