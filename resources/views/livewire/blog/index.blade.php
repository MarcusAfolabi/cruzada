 <section class="section-blog">
     <div class="section-space-bottom">
         <div class="container">
             <div class="mb-14 flex flex-wrap items-center justify-between gap-10">
                 <div class="section-block max-w-2xl">
                     <span class="jos section-tag section-tag-orange" data-jos_delay="0">Our Latest Insights</span>
                     <h2 class="jos section-title text-colorDark" data-jos_delay="0.3">
                         <span class="text-colorGrey">Update with us</span> and know
                         our latest insights, blog and news
                     </h2>
                 </div>
                 <a href="blog.html"
                     class="jos btn group inline-flex items-center gap-x-3 border-b border-colorOrange pb-1 text-colorOrange"
                     data-jos_delay="0.3">
                     News Overview
                     <div class="relative flex items-center overflow-hidden">
                         <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right"
                             width="24" height="12"
                             class="animate-transition h-3 w-6 translate-x-0 group-hover:translate-x-full" />
                         <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right"
                             width="24" height="12"
                             class="animate-transition absolute inset-0 h-3 w-6 -translate-x-full group-hover:translate-x-0" />
                     </div>
                 </a>
             </div>
             <ul class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 lg:gap-[60px]">
                 @foreach ($blogs as $blog)
                     <li class="jos flex flex-col items-center gap-[30px]" data-jos_delay="{{ $blog['id'] }}">
                         <a href="blog-details.html" class="w-full">
                             <img src="assets/img/images/th-1/blog-thumbnail-2-img-1.jpg" alt="blog-thumbnail-2-img-1"
                                 width="469" height="358" class="h-auto w-full object-cover" />
                         </a>
                         <div class="flex-1">
                             <div class="flex flex-wrap gap-[25px] text-sm">
                                 <a href="#"
                                     class="relative text-colorGreyLight after:absolute after:left-[calc(100%+12.5px)] after:top-1/2 after:h-[5px] after:w-[5px] after:-translate-y-1/2 after:rounded-[50%] after:bg-colorGreyLight last:after:hidden hover:text-colorOrange">Admin</a>
                                 <a href="#"
                                     class="relative text-colorGreyLight after:absolute after:left-[calc(100%+12.5px)] after:top-1/2 after:h-[5px] after:w-[5px] after:-translate-y-1/2 after:rounded-[50%] after:bg-colorGreyLight last:after:hidden hover:text-colorOrange">
                                     {{ $blog['date'] }}</a>
                             </div>
                             <a href="#"
                                 class="mb-5 mt-4 line-clamp-2 font-title text-2xl font-medium leading-[1.375] text-colorDark hover:text-colorOrange xl:text-[32px]">How
                                 {{ $blog['title']}}</a>
                             <a href="#"
                                 class="btn group inline-flex items-center gap-x-3 border-b border-colorOrange pb-1 text-colorOrange">
                                 Read More
                                 <div class="relative flex items-center overflow-hidden">
                                     <img src="assets/img/icon/icon-orange-arrow-long-right.svg"
                                         alt="icon-orange-arrow-long-right" width="24" height="12"
                                         class="animate-transition h-3 w-6 translate-x-0 group-hover:translate-x-full" />
                                     <img src="assets/img/icon/icon-orange-arrow-long-right.svg"
                                         alt="icon-orange-arrow-long-right" width="24" height="12"
                                         class="animate-transition absolute inset-0 h-3 w-6 -translate-x-full group-hover:translate-x-0" />
                                 </div>
                             </a>
                         </div>
                     </li>
                 @endforeach
             </ul>
         </div>
     </div>
 </section>
