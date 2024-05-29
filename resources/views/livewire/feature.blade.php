 <div class="container">
     <div class="section-block max-w-[1131px]">
         <span class="section-tag section-tag-orange">Our Vision</span>
         <h2 class="section-title text-colorDark">
             To<span class="text-colorGrey"> change the world
             </span>
             by the word </h2>
     </div>
     <ul class="divider-[#E0E0E0] mt-20 grid grid-cols-1 gap-y-10 md:grid-cols-2 xl:grid-cols-4 xl:divide-x">
         @foreach ($features as $ft)
         <li class="jos md:min-h-[576px] xl:min-h-[727px]">
             <div class="group relative z-10 flex h-full flex-col gap-y-10 p-10">
                 <div>
                     <div class="mb-6 md:mb-12">
                         <img src="{{ $ft['icon'] }}" alt="service-icon-2" width="98" height="78" />
                     </div>
                     <h3 class="animate-transition mb-5 font-medium text-colorDark group-hover:text-white">
                         {{ $ft['caption'] }}
                     </h3>
                 </div>
                 <div class="mt-auto">
                     <p class="animate-transition text-colorGreyLight group-hover:text-white/75">
                         {{ $ft['content'] }}
                     </p>
                 </div>
                 <div class="animate-transition absolute inset-0 -z-10 opacity-0 group-hover:opacity-100">
                     <img src="{{ $ft['Image'] }}" alt="{{ $ft['caption'] }}" width="380" height="727" class="h-full w-full object-cover" />
                     <div class="radial-gradient-dark absolute inset-0"></div>
                 </div>
             </div>
         </li>
         @endforeach
     </ul>
 </div>