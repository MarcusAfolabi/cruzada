@extends('layouts.main')
@section('main')
    <section class="section-hero">
        <div class="hero relative z-10">
            <div class="pb-20 pt-44 lg:pb-24 lg:pt-52 xl:pb-32 xl:pt-56 xxl:pb-[180px] xxl:pt-[270px]">
                <div class="container">
                    <div class="mx-auto flex max-w-[960px] flex-col items-center gap-y-12 text-center">
                        <h5 class="jos text-4xl font-bold text-colorDark sm:text-6xl md:text-7xl lg:text-9xl xl:text-[150px]"
                            data-jos_delay="0.3">
                            LET'S SPREAD THE GOOD NEWS
                        </h5>
                        <div class="jos hidden md:inline-block">
                            <img src="assets/img/icon/icon-extra-long-arrow-down.svg" alt="icon-extra-long-arrow-down"
                                width="37" height="106" />
                        </div>

                        <div class="jos flex gap-x-[34px] text-xl text-colorGreyLight">
                            <a href="#"> <span
                                    class="relative after:absolute after:left-[calc(100%+_17px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-colorGreyLight last:after:hidden">GET
                                    INVOLVED</span>
                            </a>
                            <a href="#"> <span
                                    class="relative after:absolute after:left-[calc(100%+_17px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-colorGreyLight last:after:hidden">GIVE
                                    NOW</span>
                            </a> <span
                                class="relative after:absolute after:left-[calc(100%+_17px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-colorGreyLight last:after:hidden">ABOUT
                                US</span>
                            </a>
                        </div>
                        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=FqV_jROapXs"
                            aria-label="video-play"
                            class="animate-transition text-text mx-auto inline-flex h-24 w-24 items-center justify-center overflow-hidden rounded-[50%] bg-colorDark text-white hover:scale-110 hover:bg-colorDark/80 md:h-32 md:w-32">
                            <span class="absolute">Our Work</span>
                        </a>
                    </div>
                </div>
            </div>
            <img src="assets/img/images/th-2/hero-bg-img-1.jpg" alt="hero-bg-img-1" width="384" height="292"
                class="image-move absolute left-10 top-[118px] -z-10 w-[40%] lg:w-[30%] xl:left-40 xl:w-auto xxl:left-[317px]" />
            <img src="assets/img/images/th-2/hero-bg-img-2.jpg" alt="hero-bg-img-2" width="176" height="204"
                class="image-move absolute left-0 top-[193px] -z-10 w-[25%] sm:top-[200px] sm:w-auto md:top-[293px] lg:left-0 xl:left-[70px] xxl:left-[182px]" />
            <img src="assets/img/images/th-2/hero-bg-img-3.jpg" alt="hero-bg-img-3" width="550" height="339"
                class="image-move absolute bottom-[77px] left-0 -z-10 w-[44%] rounded-[170px] lg:bottom-[106px] xl:bottom-auto xl:top-[610px] xl:w-auto" />
            <img src="assets/img/images/th-2/hero-bg-img-4.jpg" alt="hero-bg-img-4" width="550" height="339"
                class="image-move absolute right-0 top-[118px] -z-10 w-[44%] rounded-[170px] xl:w-auto" />
            <img src="assets/img/images/th-2/hero-bg-img-5.jpg" alt="hero-bg-img-5" width="179" height="204"
                class="image-move absolute right-5 top-[360px] -z-10 h-auto w-[15%] sm:top-[320px] md:top-[480px] lg:w-auto xl:right-6 xl:top-[576px] xxl:right-[161px]" />
            <img src="assets/img/images/th-2/hero-bg-img-6.jpg" alt="hero-bg-img-6" width="463" height="292"
                class="image-move absolute bottom-20 right-10 -z-20 w-[40%] md:bottom-auto md:top-[512px] lg:top-[600px] xl:right-20 xl:top-[657px] xl:w-auto xxl:right-[257px]" />
        </div>
    </section>

    <div class="section-about-info">
        <div class="section">
            <div class="container">
                <div class="flex flex-col items-start gap-x-40 xl:flex-row">
                    <span class="section-tag section-tag-orange">Our Mission</span>

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
                                    <img src="assets/img/images/th-1/about-img-2.jpg" alt="about-img-2" width="648"
                                        height="465" class="h-auto w-full" />
                                </div>

                                <div class="flex flex-col justify-between gap-y-10 py-[50px]">
                                    <div class="jos grid grid-cols-2 justify-items-start lg:gap-12 xl:gap-16 xxl:gap-24"
                                        data-jos_delay="0.3">
                                        <div class="text-center">
                                            <div class="font-title text-5xl leading-[1.1] text-colorOrange sm:text-6xl md:text-7xl xl:text-[100px]"
                                                data-module="countup">
                                                <span class="start-number" data-countup-number="600">600</span>+
                                            </div>
                                            <span class="text-colorGreyLight">Distributed Bibles</span>
                                        </div>
                                        <div class="text-center">
                                            <div class="font-title text-5xl leading-[1.1] text-colorOrange sm:text-6xl md:text-7xl xl:text-[100px]"
                                                data-module="countup">
                                                <span class="start-number" data-countup-number="10">10</span>+
                                            </div>
                                            <span class="text-colorGreyLight">Villages Covered</span>
                                        </div>
                                    </div>
                                    <div class="jos justify-items-end" data-jos_delay="0.6">
                                        <a href="#"
                                            class="btn group ml-auto inline-flex items-center gap-x-3 border-b border-colorOrange pb-1 text-colorOrange">
                                            Pictorial Moment
                                            <span class="relative flex items-center overflow-hidden">
                                                <img src="assets/img/icon/icon-orange-arrow-long-right.svg"
                                                    alt="icon-orange-arrow-long-right" width="24" height="12"
                                                    class="animate-transition h-3 w-6 translate-x-0 group-hover:translate-x-full" />
                                                <img src="assets/img/icon/icon-orange-arrow-long-right.svg"
                                                    alt="icon-orange-arrow-long-right" width="24" height="12"
                                                    class="animate-transition absolute inset-0 h-3 w-6 -translate-x-full group-hover:translate-x-0" />
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-service">
        <div class="">
            @livewire('feature')
        </div>
    </section>

    <section class="why-us-section">
        <div class="section-space-bottom">
            <div class="container">
                <div class="relative">
                    <ul
                        class="jos bottom-10 right-0 mt-10 flex flex-col gap-[52px] bg-colorGreyWhite p-10 md:mt-0 md:flex-row md:p-[60px] xxl:absolute xxl:max-w-[975px]">
                        <li>
                            <img src="assets/img/icon/service-card-icon-1.svg" alt="service-card-icon-1" width="68"
                                height="68" />
                            <h3 class="mb-6 mt-8 font-bold text-colorDark">
                                GET INVOLVED
                            </h3>
                            <p class="text-colorGreyLight">
                                Learn how you can partner with us and contribute to this worldwide effort.
                                <a href='#'
                                    class="flex w-full flex-1 items-center justify-between gap-x-5 font-title text-xl font-bold leading-[1.375] text-colorDark hover:text-colorOrange lg:text-[22px]">Give
                                    Now</a>
                            </p>
                        </li>
                        <li>
                            <img src="assets/img/icon/service-card-icon-2.svg" alt="service-card-icon-2" width="68"
                                height="68" />
                            <h3 class="mb-6 mt-8 font-bold text-colorDark">
                                SHARE THE BIBLE </h3>
                            <p class="text-colorGreyLight">

                                Join the workforce that shares the Bible in your community to those who do not have one.

                                <a href='#'
                                    class="flex w-full flex-1 items-center justify-between gap-x-5 font-title text-xl font-bold leading-[1.375] text-colorDark hover:text-colorOrange lg:text-[22px]">Join
                                    Now</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @livewire('testimonal')

    @livewire('blog.index')

@endsection
