 <div class="jos mx-auto mt-14 max-w-[1320px]">
     <form wire:submit.prevent='contactUs' class="grid grid-cols-1 gap-y-5 bg-gray-900 px-4 py-4 rounded-2xl">
         <div class=" gap-x-6 gap-y-5 md:grid-cols-2">
             <div class="w-full">
                 <input wire:model='name' placeholder="Enter your name" type="text" name="contact-name" id="contact-name" class="animate-transition w-full border border-white/[12%] bg-transparent px-5 py-4 text-sm leading-none text-white outline-none placeholder:text-white/[54%] focus:border-colorOrange" />
                 @error('name')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="mt-4 w-full">
                 <input wire:model='email' placeholder="Enter your email address" name="contact-email" type="email" class="animate-transition w-full border border-white/[12%] bg-transparent px-5 py-4 text-sm leading-none text-white outline-none placeholder:text-white/[54%] focus:border-colorOrange" />
                 @error('email')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="mt-4 w-full">
                 <input wire:model='phone' placeholder="Enter your phone number" name="contact-email" type="tel" class="animate-transition w-full border border-white/[12%] bg-transparent px-5 py-4 text-sm leading-none text-white outline-none placeholder:text-white/[54%] focus:border-colorOrange" />
                 @error('phone')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
         </div>
       

         <div class="w-full">
             <select wire:model="country" id="contact-select" class="animate-transition w-full border border-white/[12%] bg-transparent px-5 py-4 text-sm leading-none text-white outline-none placeholder:text-white/[54%] focus:border-colorOrange">
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
                 <textarea wire:model='message' name="contact-message" id="contact-message" placeholder="Type your message..." class="animate-transition min-h-40 w-full border border-white/[12%] bg-transparent px-5 py-4 text-sm leading-none text-white outline-none placeholder:text-white/[54%] focus:border-colorOrange"></textarea>
             </div>
             @error('message')
             <p class="text-red-500">{{ $message }}</p>
             @enderror
         </div>
         <div class="inline-flex">
             <button type="submit" class="btn group inline-flex items-center gap-x-3 border border-colorOrange px-9 py-4 text-colorOrange relative">
                 <span wire:loading.remove>Contact Us</span>
                 <span wire:loading class="flex items-center">
                     Sending...
                     <svg class="animate-spin ml-2 h-5 w-5 text-colorOrange" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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