 <div class="section-testimonial">
     <div>
         <div class="jos testimonial-slider-3 swiper">
             <div class="swiper-wrapper">
                 @foreach ($testimony as $tes)
                     <div class="swiper-slide">
                         <div
                             class="bg-colorGreyWhite bg-[url('https://www.4damstheme.com/html/img/icon/icon-orange-quote.svg')] bg-[40px_40px] bg-no-repeat px-11 py-10">
                             <blockquote class="mt-2 text-xl text-colorGreyLight">
                                 {{ $tes['content'] }}
                             </blockquote>
                             <div
                                 class="relative mt-10 flex flex-wrap items-center gap-x-3 pl-12 text-colorDark/[35%] before:absolute before:left-0 before:h-[1px] before:w-[38px] before:bg-colorDark/[30%]">
                                 <span class="text-xl font-semibold text-colorDark">{{ $tes['name'] }}</span>
                                 {{ $tes['role'] }}
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
             <div class="testimonial-pagination mt-[70px] flex justify-center"></div>
         </div>
     </div>
 </div>
