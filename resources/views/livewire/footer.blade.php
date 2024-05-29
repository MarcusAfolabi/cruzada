<footer class="section-footer">
    <div class="relative z-10 overflow-hidden bg-colorGreyDark">
        <div class="section-space-top">
            <div class="container">
                <div class="mx-auto flex max-w-[989px] flex-wrap items-center justify-between gap-10">
                    <h3 class="text-7xl font-extrabold md:text-8xl lg:text-9xl xl:text-[150px]">
                        Get Involved
                    </h3>

                    <a wire:navigate.hover href="{{ url('contact') }}" class="mx-auto inline-flex h-[110px] w-[110px] items-center justify-center rounded-[50%] border border-colorOrange text-colorOrange hover:scale-110 hover:bg-colorOrange hover:text-white xl:h-[126px] xl:w-[126px]">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
        <div class="pb-[70px] pt-20 lg:pt-[100px] xl:pt-[130px]">
            <div class="container">
                <div class="flex flex-wrap items-center justify-center gap-10 lg:justify-between">
                    <div class="flex flex-wrap items-center justify-center gap-10 lg:justify-start xl:gap-[94px]">
                        <a href="index.html">
                            <img src="assets/img/logo-white.png" alt="logo-white" width="118" height="25" class="h-auto w-[118px]" />
                        </a>

                        <form action="#" method="post" class="relative w-full sm:w-[424px]">
                            <input type="text" name="email" id="emai" placeholder="Your Email" class="animate-transition mb-5 w-full border-b border-white/[12%] bg-colorGreyDark pb-4 text-white outline-none placeholder:text-white/[35%] focus:border-colorOrange focus:bg-colorGreyDark sm:mb-0 sm:pr-40" required />
                            <button type="submit" class="btn group right-0 top-0 mx-auto flex items-center gap-x-3 border-b border-colorOrange pb-1 text-colorOrange sm:absolute sm:inline-flex">
                                Subscribe Now
                                <span class="relative flex items-center overflow-hidden">
                                    <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right" width="24" height="12" class="animate-transition h-3 w-6 translate-x-0 group-hover:translate-x-full" />
                                    <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right" width="24" height="12" class="animate-transition absolute inset-0 h-3 w-6 -translate-x-full group-hover:translate-x-0" />
                                </span>
                            </button>
                        </form>
                    </div>
                    <div class="flex gap-[14px]">
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="facebook" class="inline-flex h-14 w-14 items-center justify-center rounded-[50%] border border-white/[8%] bg-white/5 hover:bg-colorOrange">
                            <img src="assets/img/icon/icon-white-facebook.svg" alt="icon-white-facebook" width="24" height="24" class="h-auto w-6" />
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="instagram" class="inline-flex h-14 w-14 items-center justify-center rounded-[50%] border border-white/[8%] bg-white/5 hover:bg-colorOrange">
                            <img src="assets/img/icon/icon-white-instagram-fill.svg" alt="icon-white-instagram-fill" width="24" height="24" class="h-auto w-6" />
                        </a>
                        <a href="https://www.x.com/" target="_blank" rel="noopener noreferrer" aria-label="x" class="inline-flex h-14 w-14 items-center justify-center rounded-[50%] border border-white/[8%] bg-white/5 hover:bg-colorOrange">
                            <img src="assets/img/icon/icon-white-x-fill.svg" alt="icon-white-x-fill" width="24" height="24" class="h-auto w-6" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <ul class="flex flex-wrap justify-start gap-5 border border-white/[12%] p-8 md:p-10 xl:justify-between xl:p-[60px]">
                    <li>
                        <a wire:navigate.hover href="/" class="hover:text-colorOrange">HOME</a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="{{ url('read-the-bible') }}" class="hover:text-colorOrange">READ BIBLE</a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="{{ url('about') }}" class="hover:text-colorOrange">ABOUT US</a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="{{ url('partner') }}" class="hover:text-colorOrange">GET INVOLVED</a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="{{ url('donate') }}" class="hover:text-colorOrange">DONATE</a>
                    </li>
                    <li>
                        <a wire:navigate.hover href="{{ url('contact') }}" class="hover:text-colorOrange">CONTACT US</a>
                    </li>
                </ul>
                <div class="py-[35px]">
                    <p class="text-center">
                        © {{ date('Y') }} All rights reserved.
                        <a href="/" target="_blank" class="font-medium hover:text-colorOrange">CRUZADA NETWORK INTERNATIONAL</a> | Maintained by
                        <a href="https://webshoptechnology.com" target="_blank" class="font-medium hover:text-colorOrange">WEBSHOP TECHNOLOGY</a>
                    </p>
                </div>
            </div>
        </div>
        <img src="assets/img/images/th-1/footer-bg.png" alt="team-bg" width="590" height="320" class="left0 absolute top-0 -z-10" />
    </div>
</footer>