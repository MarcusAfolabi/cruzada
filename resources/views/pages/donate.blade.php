@extends('layouts.main')
@section('title', 'Donation')
@section('main')
<section class="section-breadcrumb">
    <div class="relative z-10">
        <div class="container">
            <div class="breadcrumb-wrapper">

                <h1 class="breadcrumb-title">@yield('title')</h1>
            </div>
        </div>
        <div class="absolute inset-0 -z-10">
            <img src="assets/img/images/th-1/breadcrumb.jpg" alt="breadcrumb" width="1920" height="421" class="h-full w-full object-cover" />
        </div>
    </div>
</section>
<section class="section-contact-form">
    <div class="section-space-bottom">
        <div class="container">
            <div class="text-center text-colorDark">
                @livewire('donate-form')
            </div>
        </div>
    </div>
</section>
@endsection