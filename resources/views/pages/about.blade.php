@extends('layouts.main')
@section('title', 'ABOUT CRUZADA')
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
<div class="section-project">
    <div class="section-space-top">

        <div class="container">
            <div class="flex flex-col items-start gap-x-40 xl:flex-row">
                <span class="section-tag text-colorGrey">CRUZADA NETWORK INTERNATIONAL</span>
                <div class="relative flex-1">
                    <div class="flex flex-wrap items-center justify-between gap-10">
                        <div class="section-block">

                            <h2 class="section-title text-colorDark">
                                <span class="text-colorGrey">To expand God's kingdom </span>
                                through the distribution of
                                scriptures to
                                <span class="text-colorGrey">all nations of the world</span>
                            </h2>
                        </div>
                        <div class="flex w-full flex-col justify-between gap-x-28 xxl:flex-row">
                            <div class="jos flex" data-jos_animation="fade-right">
                                <img src="assets/img/images/th-1/about-img-2.jpg" alt="about-img" width="648" height="465" class="h-auto w-full" />
                            </div>

                            <div class="flex flex-col justify-between gap-y-10 py-[50px]">
                                <div class="jos grid grid-cols-2 justify-items-start lg:gap-12 xl:gap-16 xxl:gap-24" data-jos_delay="0.3">
                                    <div class="text-center">
                                        <div class="font-title text-5xl leading-[1.1] text-colorOrange sm:text-6xl md:text-7xl xl:text-[100px]" data-module="countup">
                                            <span class="start-number" data-countup-number="4">4</span>k+
                                        </div>
                                        <span class="text-gray-500">Bible distributed clients</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="font-title text-5xl leading-[1.1] text-colorOrange sm:text-6xl md:text-7xl xl:text-[100px]" data-module="countup">
                                            <span class="start-number" data-countup-number="90">90</span>+
                                        </div>
                                        <span class="text-gray-500">Villages touched</span>
                                    </div>
                                </div>
                                <div class="jos justify-items-end" data-jos_delay="0.6">
                                    <a href="#" class="btn group inline-flex items-center gap-x-3 border-b border-colorOrange pb-1 text-colorOrange">
                                        View All Projects
                                        <span class="relative flex items-center overflow-hidden">
                                            <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right" width="24" height="12" class="animate-transition h-3 w-6 translate-x-0 group-hover:translate-x-full" />
                                            <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right" width="24" height="12" class="animate-transition absolute inset-0 h-3 w-6 -translate-x-full group-hover:translate-x-0" />
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jos -left-[325px] bottom-[50px] bg-colorGreyDark p-[30px] xxl:absolute xxl:max-w-[521px]" data-jos_animation="fade-left">
                        Our mission is to spread the Christian faith and teachings globally while distributing scriptures across all nations. We aim to expand God's kingdom by establishing new, disciple-making churches and providing aid and funds to the less privileged. Additionally, we support small business startups with financial assistance and empower youth through seminars, activities, and vocational training, all with the ultimate goal of eradicating poverty.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection