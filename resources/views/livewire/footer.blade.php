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
                    <p class="text-center">
                        <a href="{{ url('terms-conditions') }}" target="_blank" class="font-medium hover:text-colorOrange">Terms and Condition</a> ||
                        <a href="{{ url('privacy-policy') }}" target="_blank" class="font-medium hover:text-colorOrange">Privacy Policy</a> ||
                        <a href="{{ url('refund-policy') }}" target="_blank" class="font-medium hover:text-colorOrange">Refund Policy</a> 

                    </p>
                </div>
            </div>
        </div>
        <img src="assets/img/images/th-1/footer-bg.png" alt="team-bg" width="590" height="320" class="left0 absolute top-0 -z-10" />
    </div>
</footer>