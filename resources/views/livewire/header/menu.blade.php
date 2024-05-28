<header class="section-header site-header is-white fixed top-0 z-30 w-full py-[30px]">
    <div class="container">
        <div class="grid grid-cols-[auto_auto] justify-between">
            <div class="flex items-center gap-[50px]">
                <a href="/">
                    <img src="assets/img/logo-dark.png" alt="logo-dark" width="118" height="25" class="h-auto max-w-full" />
                </a>
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <img src="assets/img/icon/icon-arrow-left.svg" alt="icon-arrow-left" width="16" height="8" class="rotate-90" />
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item">
                                <a wire:navigate href="/" class="nav-link-item drop-trigger rounded-none border border-transparent px-5 py-1 text-colorDark hover:border-colorDark lg:rounded-[27px]">Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a wire:navigate href="{{ url('donate') }}" class="nav-link-item drop-trigger rounded-none border border-transparent px-5 py-1 text-colorDark hover:border-colorDark lg:rounded-[27px]">Donate
                                </a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger rounded-none border border-transparent px-5 py-1 text-colorDark hover:border-colorDark lg:rounded-[27px]">Resources
                                    <img src="assets/img/icon/icon-caret-down.svg" alt="icon-caret-down" width="7" height="4" class="invert-0" />
                                </a>
                                <ul class="sub-menu" id="submenu-2">
                                    <li class="sub-menu--item">
                                        <a wire:navigate href="{{ url('read-the-bible') }}">Read The Bible</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a wire:navigate href="{{ url('become-a-christian') }}">Become a Christian</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a wire:navigate href="{{ url('about') }}" class="nav-link-item drop-trigger rounded-none border border-transparent px-5 py-1 text-colorDark hover:border-colorDark lg:rounded-[27px]">About
                                </a>
                            </li>


                            <li class="nav-item">
                                <a wire:navigate href="{{ url('contact') }}" class="nav-link-item drop-trigger rounded-none border border-transparent px-5 py-1 text-colorDark hover:border-colorDark lg:rounded-[27px]">Contact
                                </a>
                            </li>
                            <li class="nav-item">
                                <a wire:navigate href="{{ url('partner') }}" class="nav-link-item drop-trigger rounded-none border border-white  px-5 py-1 text-white hover:border-colorDark lg:rounded-[27px]">Partner with Us
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="flex items-center gap-11">
                <div class="relative">
                    <button id="toggleButton">
                        <img src="assets/img/icon/icon-gray-search.svg" alt="icon-gray-search" width="15" height="15" class="h-5 w-5 invert" />
                    </button>
                    <div id="searchContainer" class="absolute right-0 ml-4 hidden translate-y-[30px]">
                        <input type="search" placeholder="Search..." class="rounded-[27px] border bg-colorDark px-4 py-2 focus:outline-none" />
                    </div>
                </div>
                <div class="hidden rounded-[27px] border border-colorDark/[7%] bg-colorDark/5 px-5 py-2 text-sm font-medium text-colorDark/85 xxl:inline-block">
                    WhatsApp:
                    <a href="tel:+234534890111" class="font-semibold text-colorDark">(234) 534-890-11</a>
                </div>
                <button class="hidden">
                    <img src="assets/img/icon/icon-white-menu-line.svg" alt="icon-white-menu-line" width="24" height="24" class="h-6 w-6" />
                </button>
                <div class="block lg:hidden">
                    <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                        <span class="bg-colorDark before:bg-colorDark after:bg-colorDark"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
