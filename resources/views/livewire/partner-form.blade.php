 <div class="jos mx-auto mt-14 max-w-[1320px]">
     <form wire:submit.prevent='donateNow' class="grid grid-cols-1 gap-y-5 bg-gray-900 px-4 py-4 rounded-2xl">
         <div class=" gap-x-6 gap-y-5 md:grid-cols-2">
             <div class="w-full">
                 <input wire:model.live='name' placeholder="Enter your name" type="text" name="contact-name" id="contact-name" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark" />
                 @error('name')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="mt-4 w-full">
                 <input wire:model.live='email' placeholder="Enter your email address" type="email" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark" />
                 @error('email')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="mt-4 w-full">
                 <input wire:model.live='phone' placeholder="Enter your phone number" type="tel" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark" />
                 @error('phone')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="w-full">
                 <label>I prefer to give</label>
                 <select wire:model.live="choice" id="contact-select" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark">
                     <option class="text-colorDark">Select</option>
                     <option value="Bible" class="text-colorDark">Bible</option>
                     <option value="Money" class="text-colorDark">Money</option>
                 </select>
                 @error('choice')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             @if ($choice == 'Bible' || $choice == 'Money')
             <div class="mt-4 w-full">
                 <label>With amount of </label>
                 <input wire:model.live='amount' placeholder="Enter your amount" type="tel" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark" />
                 @error('amount')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             <div class="w-full">
                 <label>In every</label>
                 <select wire:model.live="frequency" id="contact-select" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark">
                     <option value="Day" class="text-colorDark">Day</option>
                     <option value="Week" class="text-colorDark">Week</option>
                     <option value="Monthly" class="text-colorDark">Monthly</option>
                     <option value="Quarterly" class="text-colorDark">Quarterly</option>
                     <option value="Yearly" class="text-colorDark">Yearly</option>
                 </select>
                 @error('choice')
                 <p class="text-red-500">{{ $message }}</p>
                 @enderror
             </div>
             @endif
         </div>


         <div class="w-full">
             <select wire:model="country" id="contact-select" class="animate-transition w-full border border-colorDark/[12%] bg-transparent px-5 py-4 text-sm leading-none text-colorDark outline-none placeholder:text-colorDark/[54%] focus:border-colorDark">
                 @foreach ($countries as $country)
                 <option value="{{ $country->name }} {{ $country->dial_code }}" class="text-colorDark">
                     {{ $country->name }} ({{ $country->currency_symbol }})
                 </option>
                 @endforeach
             </select>
             @error('country')
             <p class="text-red-500">{{ $message }}</p>
             @enderror
         </div>
         <div class="inline-flex">
             <button type="submit" class="btn group inline-flex items-center gap-x-3 border border-colorDark px-9 py-4 text-colorDark relative">
                 <span wire:loading.remove>Donate now</span>
                 <span wire:loading class="flex items-center">
                     payment gateway...
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