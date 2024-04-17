@extends('layouts.main')
@section('title', 'READ THE BIBLE')
@section('main')
    <section class="section-breadcrumb">
        <div class="relative z-10">
            <div class="container">
                <div class="breadcrumb-wrapper">
                    <ul class="breadcrumb-nav">
                        <li>
                            <a href="#">DONATE</a>
                        </li>
                    </ul>
                    <h1 class="breadcrumb-title">@yield('title')</h1>
                </div>
            </div>
            <div class="absolute inset-0 -z-10">
                <img src="assets/img/images/th-1/breadcrumb.jpg" alt="breadcrumb" width="1920" height="421"
                    class="h-full w-full object-cover" />
            </div>
        </div>
    </section>
    <section class="section-service">
        <div class="section-space">
            <div class="container">
                <div class="">
                    <div class="section-wrapper">
                        <div class="section-block">
                            <h2 class="jos section-title" data-jos_delay="0.3">
                                <span class="text-colorGrey">DAILY BIBLE READING
                                </span>
                            </h2>
                        </div>
                    </div>
                    <ul
                        class="rounded-xl jos grid h-[calc(100%-1px)] gap-x-24 overflow-hidden bg-colorGreyDark px-10 md:grid-cols-2 md:px-14">
                        <li class="jos border-b border-white/[12%] py-10 md:py-14" data-jos_delay="0">
                            <div class="mb-6 md:mb-12">
                                <img src="assets/img/icon/service-icon-1.svg" alt="service-icon-1" width="96"
                                    height="78" />
                            </div>
                            <h3 class="mb-5 font-medium">
                                GOD'S WORD EVERY DAY
                            </h3>
                            <h6 class='text-xl'>
                                We place and distribute Bibles and New Testaments because we believe God’s Word is not only
                                relevant, but powerful. Those who read it and apply God’s truth to their lives experience
                                hope, joy, and redemption. For this reason, we are sharing our Daily Bible Reading Calendar
                                to help guide you through reading the Bible in a year. Visit our site each day or download
                                the calendar as a PDF file.
                            </h6>
                            <br>
                            <button
                                class="btn group inline-flex items-center gap-x-3 border-b border-colorOrange pb-1 text-colorOrange">
                                DOWNLOAD CALENDAR
                                <span class="relative flex items-center overflow-hidden">
                                    <img src="assets/img/icon/icon-orange-arrow-long-right.svg"
                                        alt="icon-orange-arrow-long-right" width="24" height="12"
                                        class="animate-transition h-3 w-6 translate-x-0 group-hover:translate-x-full" />
                                    <img src="assets/img/icon/icon-orange-arrow-long-right.svg"
                                        alt="icon-orange-arrow-long-right" width="24" height="12"
                                        class="animate-transition absolute inset-0 h-3 w-6 -translate-x-full group-hover:translate-x-0" />
                                </span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
