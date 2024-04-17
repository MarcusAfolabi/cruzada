@extends('layouts.main')
@section('title', 'BECOME A CHRISTIAN')
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
                <div class="grid grid-cols-1 gap-[66px] xl:grid-cols-[minmax(0,_0.6fr)_1fr]">
                    <div class="section-wrapper">
                        <div class="section-block">
                            <h2 class="jos section-title" data-jos_delay="0.3">
                                <span class="text-colorGrey">KNOW JESUS AS YOUR SAVIOR</span>
                            </h2>
                        </div>
                    </div>
                    <ul
                        class="jos grid h-[calc(100%-1px)] grid-cols-1 gap-x-24 overflow-hidden bg-colorGreyDark px-10 md:grid-cols-2 md:px-14">
                        <li class="jos border-b border-white/[12%] py-10 md:py-14" data-jos_delay="0">
                            <div class="mb-6 md:mb-12">
                                <img src="assets/img/icon/service-icon-1.svg" alt="service-icon-1" width="96"
                                    height="78" />
                            </div>
                            <h3 class="mb-5 font-medium">
                                GOD LOVES YOU
                            </h3>
                            <p>
                                For God so loved the world, that he gave his only son, that whoever believes in him should
                                not perish but have eternal life. – John 3:16

                                <br>But God shows his love for us in that while we were still sinners, Christ died for us. –
                                Romans 5:8
                            </p>
                        </li>
                        <li class="jos border-b border-white/[12%] py-10 md:py-14" data-jos_delay="0.3">
                            <div class="mb-6 md:mb-12">
                                <img src="assets/img/icon/service-icon-2.svg" alt="service-icon-2" width="98"
                                    height="78" />
                            </div>
                            <h3 class="mb-5 font-medium">ALL ARE SINNERS</h3>
                            <p>

                                For all have sinned and fall short of the glory of God. – Romans 3:23

                                <br> As it is written: “none is righteous, no, not one” – Romans 3:10
                            </p>
                        </li>
                        <li class="jos border-b border-white/[12%] py-10 md:py-14" data-jos_delay="0.6">
                            <div class="mb-6 md:mb-12">
                                <img src="assets/img/icon/service-icon-3.svg" alt="service-icon-3" width="73"
                                    height="78" />
                            </div>
                            <h3 class="mb-5 font-medium">
                                GOD'S REMEDY FOR SIN
                            </h3>
                            <p>

                                For the wages of sin is death; but the free gift of God is eternal life in Christ Jesus our
                                Lord. – Romans 6:23

                                <br> But to all who did receive him, who believed in his name, he gave the right to become
                                children of God. – John 1:12
                            </p>
                        </li>
                        <li class="jos border-b border-white/[12%] py-10 md:py-14" data-jos_delay="0.9">
                            <div class="mb-6 md:mb-12">
                                <img src="assets/img/icon/service-icon-4.svg" alt="service-icon-4" width="97"
                                    height="78" />
                            </div>
                            <h3 class="mb-5 font-medium">
                                ALL MAY BE SAVED
                            </h3>
                            <p>

                                Behold, I stand at the door and knock. If anyone hears my voice and opens the door, I come
                                in to him and eat with him, and he with me. – Revelation 3:20

                                <br> For “everyone who calls on the name of the Lord will be saved.” – Romans 10:13

                                <br> But these are written so that you may believe that Jesus is the Christ, the Son of God,
                                and
                                that by believing you may have life in his name. – John 20:31
                            </p>
                        </li>
                    </ul>
                    <!-- Service List -->
                </div>
                <!-- Service Area -->
            </div>
        </div>
        <!-- Section Space -->
    </section>
    <section class="section-pricing">
        <div class="section-space-bottom">
            <div class="container">
                <div
                    class="grid grid-cols-1 gap-20 lg:grid-cols-[minmax(0,_0.4fr),_1fr] xxl:grid-cols-[minmax(0,_0.9fr),_1fr] xxl:gap-[121px]">
                    <div class="jos order-2 lg:order-1" data-jos_animation="fade">
                        <img src="assets/img/images/th-1/pricing-image.png" alt="pricing-image" width="474"
                            height="474" class="ml-auto hidden h-auto w-auto xxl:block" />
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="section-block">
                            <span class="jos section-tag section-tag-dark" data-jos_delay="0">Our Pricing Plan</span>
                            <h2 class="jos section-title" data-jos_delay="0.3">
                                <span class="text-colorGrey">Next Line of Action</span>
                            </h2>
                        </div>
                        <ul class="mt-14 grid grid-cols-1 md:grid-cols-2">
                            <li class="jos bg-colorGreyDark px-14 py-8">
                                <img src="assets/img/icon/icon-orange-3d-modeling.svg" alt="icon-orange-3d-modeling"
                                    width="68" height="68" />
                                <h3 class="mb-6 mt-6 font-bold">Pray</h3>

                                <ul
                                    class="mb-10 flex list-inside list-image-[url(../img/icon/icon-white-check-mark.svg)] flex-col gap-y-5">
                                    <p>
                                        As a Christian, you can talk to God through prayer and share your heart with Him. No
                                        matter where you are in your spiritual journey, He is faithfully listening for you
                                        to call on Him. To begin your new life in faith, pray this simple prayer:
                                        <br>
                                        “God, I confess that I am a sinner and I am in need of salvation. I believe Jesus
                                        died on the cross for my sins and rose again to bring me new life. I ask to receive
                                        your forgiveness and grace and choose to follow You as my Lord and Savior. Amen.”
                                    </p>
                                </ul>
                            </li>
                            <li class="jos bg-colorGreyDark px-14 py-8">
                                <img src="assets/img/icon/icon-orange-3d-modeling.svg" alt="icon-orange-3d-modeling"
                                    width="68" height="68" />
                                <h3 class="mb-6 mt-6 font-bold">Seek</h3>

                                <ul
                                    class="mb-10 flex list-inside list-image-[url(../img/icon/icon-white-check-mark.svg)] flex-col gap-y-5">
                                    <p>
                                        The church is the body of Christ, designed to bring Him glory through worship, to
                                        teach Biblical doctrine, and to equip its members for evangelism. After making your
                                        decision to receive Christ, we encourage you to prayerfully seek a healthy Christian
                                        community in your local church that will help you continue to grow in your walk.
                                        <br>
                                        But grow in the grace and knowledge of our Lord and Savior Jesus Christ. To him be
                                        the glory both now and to the day of eternity. 2 Peter 3:18
                                    </p>
                                </ul>
                            </li>
                            <li class="jos bg-colorGreyDark px-14 py-8">
                                <img src="assets/img/icon/icon-orange-3d-modeling.svg" alt="icon-orange-3d-modeling"
                                    width="68" height="68" />
                                <h3 class="mb-6 mt-6 font-bold">Find</h3>

                                <ul
                                    class="mb-10 flex list-inside list-image-[url(../img/icon/icon-white-check-mark.svg)] flex-col gap-y-5">
                                    <p>
                                        Assurance for the believer comes directly from God’s Word. The Gospel tells us that
                                        because Christ died for us, anyone who trusts in Him may know that their sins have
                                        been forgiven, once and for all.

                                        <br>Because, if you confess with your mouth that Jesus is Lord and believe in your
                                        heart that God raised him from the dead, you will be saved. – Romans 10:9

                                        <br><em>Truly, truly, I say to you, whoever hears my word and believes him who sent
                                            me has eternal life. He does not come into judgment, but has passed from death
                                            to life. – John 5:24</em>
                                    </p>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
