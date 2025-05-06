<div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
    @if ($products->count())
    @foreach ($products as $product)
    <div class="col-lg-2 col-md-4 col-sm-6 product-item isotope-item filter-app">
        <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
        <div class="product-info">
            <h4>Auraray</h4>
            <p>{{$product->brief}}</p>
            <a href="{{ asset($product->image) }}" title="Auraray"
                data-gallery="product-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="{{ route('product', [$product->id]) }}" title="More Details" class="details-link"><i
                    class="bi bi-link-45deg"></i></a>
        </div>
    </div>
    @endforeach

    @else
    <p class="text-center"> <strong>COMMING SOON!</strong> 😍 </p>
    @endif
</div>
{{ $products->links('pagination::bootstrap-5') }}