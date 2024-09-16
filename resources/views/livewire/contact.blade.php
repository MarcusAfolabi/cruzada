 <div class="jos mx-auto mt-14 max-w-[1320px]">
     <div class="section-contact-info">
         <div class="section-space">
             <div class="container">
                 <ul class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                     <li class="jos">
                         <div class="bg-colorGreyDark group mb-6 h-full p-[35px] pb-[30px]">
                             <div class="animate-transition relative mb-5 flex h-[100px] w-[100px] items-center justify-center bg-white/[8%] group-hover:bg-colorOrange">
                                 <img src="assets/img/icon/icon-orange-phone.svg" alt="icon-orange-phone" width="43" height="43" class="animate-transition opacity-100 group-hover:opacity-0" />
                                 <img src="assets/img/icon/icon-white-phone.svg" alt="icon-orange-phone" width="43" height="43" class="animate-transition absolute opacity-0 group-hover:opacity-100" />
                             </div>
                             <ul class="font-title text-2xl font-bold leading-[1.375] xl:text-[32px]">
                                 <li>
                                     <a href="tel:+2348134615507" class="text-white hover:text-colorOrange">08134615507</a>
                                 </li>
                             </ul>
                         </div>
                     </li>

                     <li class="jos">
                         <div class="bg-colorGreyDark group mb-6 h-full p-[35px] pb-[30px]">
                             <div class="animate-transition relative mb-5 flex h-[100px] w-[100px] items-center justify-center bg-white/[8%] group-hover:bg-colorOrange">
                                 <img src="assets/img/icon/icon-orange-chat.svg" alt="icon-orange-chat" width="43" height="43" class="animate-transition opacity-100 group-hover:opacity-0" />
                                 <img src="assets/img/icon/icon-white-chat.svg" alt="icon-orange-chat" width="43" height="43" class="animate-transition absolute opacity-0 group-hover:opacity-100" />
                             </div>

                             <ul class="font-title text-2xl font-bold leading-[1.375] xl:text-[32px]">
                                 <li>
                                     <a href="mailto:info@cruzadanetwork.org" class="text-white hover:text-colorOrange">info@cruzadanetwork.org</a>
                                 </li>
                             </ul>
                         </div>
                     </li>
                     <li class="jos">
                         <div class="bg-colorGreyDark group mb-6 h-full p-[35px] pb-[30px]">
                             <div class="animate-transition relative mb-5 flex h-[100px] w-[100px] items-center justify-center bg-white/[8%] group-hover:bg-colorOrange">
                                 <img src="assets/img/icon/icon-orange-phone.svg" alt="icon-orange-phone" width="43" height="43" class="animate-transition opacity-100 group-hover:opacity-0" />
                                 <img src="assets/img/icon/icon-white-phone.svg" alt="icon-orange-phone" width="43" height="43" class="animate-transition absolute opacity-0 group-hover:opacity-100" />
                             </div>
                             <address class="font-title text-2xl font-bold not-italic leading-[1.375] text-white xl:text-[32px]">
                                 30, Opeyemi Crescent, Magodo, Lagos.
                             </address> 
                         </div>
                     </li> 
                 </ul> 
             </div> 
         </div> 
     </div>
     <form wire:submit.prevent='contactUs' class="grid grid-cols-1 gap-y-5 bg-gray-900 px-4 py-4 rounded-2xl">
         <div class=" gap-x-6 gap-y-5 md:grid-cols-2">
             <div class="w-full">
                 <input wire:model='name' placeholder="Enter your name" type="text" name="contact-name" id="contact-name" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark" />
                 @error('name')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="mt-4 w-full">
                 <input wire:model='email' placeholder="Enter your email address" name="contact-email" type="email" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark" />
                 @error('email')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="mt-4 w-full">
                 <input wire:model='phone' placeholder="Enter your phone number" name="contact-email" type="tel" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark" />
                 @error('phone')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
         </div>


         <div class="w-full">
             <select wire:model="country" id="contact-select" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark">
                 @foreach($countries as $country)
                 <option value="{{ $country->name }} {{ $country->dial_code }}" class="text-colorDark">
                     {{ $country->name }} ({{ $country->dial_code }})
                 </option>
                 @endforeach
             </select>
             @error('country')
             <p class="text-red-500">{{ $message }}</p>
             @enderror
         </div>

         <div class="grid grid-cols-1 gap-x-6">
             <div class="w-full">
                 <textarea wire:model='message' name="contact-message" id="contact-message" placeholder="Type your message..." class="animate-transition min-h-40 w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark"></textarea>
             </div>
             @error('message')
             <p class="text-red-500">{{ $message }}</p>
             @enderror
         </div>
         <div class="inline-flex">
             <button type="submit" class="btn group inline-flex items-center gap-x-3 border border-colorDark px-9 py-4 text-colorDark relative">
                 <span wire:loading.remove>Contact Us</span>
                 <span wire:loading class="flex items-center">
                     Sending...
                     <svg class="animate-spin ml-2 h-5 w-5 text-colorDark" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                         <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                         <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                     </svg>
                 </span>
                 <span class="relative flex items-center overflow-hidden">
                     <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right" width="24" height="12" class="animate-transition h-3 w-6 translate-x-0 group-hover:translate-x-full" />
                     <img src="assets/img/icon/icon-orange-arrow-long-right.svg" alt="icon-orange-arrow-long-right" width="24" height="12" class="animate-transition absolute inset-0 h-3 w-6 -translate-x-full group-hover:translate-x-0" />
                 </span>
             </button>
         </div>

     </form>
 </div>