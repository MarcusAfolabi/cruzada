@extends('layouts.main')
@section('title', 'Donation Failed')
@section('main')
<section class="section-breadcrumb">
    <div class="relative z-10">
        <div class="container">
            <div class="breadcrumb-wrapper">
                <h1 class="breadcrumb-title">@yield('title')</h1>
                <p>{{ session('error') }}</p>

            </div>
        </div>
        <div class="absolute inset-0 -z-10">
            <img src="assets/img/images/th-1/breadcrumb.jpg" alt="breadcrumb" width="1920" height="421" class="h-full w-full object-cover" />
        </div>
    </div>
</section>

@endsection