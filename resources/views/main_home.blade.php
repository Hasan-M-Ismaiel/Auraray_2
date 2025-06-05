@extends('layouts.app_main')

@section('content')

<!-- Start Hero Area -->
@include('includes.hero_section')
<!-- End Hero Area -->


<!-- Start Why us Area -->
@include('includes.why_us')
<!-- End Why us Area -->


<!-- Start Hero Area -->
<!--  @__include('includes.ingredients') -->
<!-- End Hero Area -->

<!-- Start products Area -->
@include('includes.products')
<!-- End products Area -->

<!-- Start products Area -->
@include('includes.arrow')
<!-- End products Area -->

<!-- Start brands Area -->
@include('includes.brands')
<!-- End brands Area -->

<!-- Start services Area -->
@include('includes.services_section')
<!-- End services Area -->

<!-- ISO section Area -->
@include('includes.iso_section')
<!-- End services Area -->

<!-- Start contact Area -->
@include('includes.contact_section')
<!-- End contact Area -->

@endsection