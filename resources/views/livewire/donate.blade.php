<form wire:submit.prevent="save" method="post">
    @csrf
    <div class="mt-6 grid gap-4 lg:gap-6">
      <!-- Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
        <div>
          <label for="hs-firstname-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">First Name</label>
          <input type="text" name="hs-firstname-hire-us-1" id="hs-firstname-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="firstName">
          @error('firstName')
          <span class="text-red-700">
          {{$message}}
            </span>
          @enderror
        </div>

        <div>
          <label for="hs-lastname-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Last Name</label>
          <input type="text" name="hs-lastname-hire-us-1" id="hs-lastname-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="lastName">
          @error('lastName')
          <span class="text-red-700">
          {{$message}}
            </span>
          @enderror
        </div>
      </div>
      <!-- End Grid -->

      <div>
        <label for="hs-work-email-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Work Email</label>
        <input type="email" name="hs-work-email-hire-us-1" id="hs-work-email-hire-us-1" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="email">
        @error('email')
        <span class="text-red-700">
        {{$message}}
          </span>
        @enderror  
    </div>

      <!-- Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
        <div>
          <label for="hs-company-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Company</label>
          <input type="text" name="hs-company-hire-us-1" id="hs-company-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="company">
          @error('company')
          <span class="text-red-700">
          {{$message}}
            </span>
          @enderror
        </div>

        <div>
          <label for="hs-company-website-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Phone</label>
          <input type="text" name="hs-company-website-hire-us-1" id="hs-company-website-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="mobile" >
          @error('mobile')
          <span class="text-red-700">
          {{$message}}
            </span>
          @enderror
        </div>
      </div>
      <!-- End Grid -->
            <div>
        <label for="hs-work-email-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Pan Number</label>
        <input type="text" name="hs-work-hire-us-1" id="hs-work-hire-us-1" autocomplete="pan" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="pan">
        @error('pan')
        <span class="text-red-700">
        {{$message}}
          </span>
        @enderror  
    </div>

      <div>
        <label for="hs-about-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Donation Amount</label>
        <input type="text" name="hs-company-website-hire-us-1" id="hs-company-website-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"wire:model="donation_amt" >
        @error('donation_amt')
        <span class="text-red-700">
        {{$message}}
          </span>
        @enderror
      </div>
      
   <!-- Payment Method Selection (Livewire + Alpine.js) -->
<div x-data="{ payment_method: @entangle('payment_method') }">
  
  <!-- Select Payment Method -->
  <div class="mt-6">
    <label for="payment-method" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Select Payment Method</label>
    <select id="payment-method"
            x-model="payment_method"
            wire:model="payment_method"
            class="w-full py-3 px-4 border border-gray-200 rounded-lg text-sm focus:ring-orange-500 focus:border-orange-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
      <option value="">-- Select --</option>
      <option value="bank">Bank Details</option>
      <option value="qr">QR Code</option>
    </select>
    @error('payment_method')
      <span class="text-red-700 text-sm">{{ $message }}</span>
    @enderror
  </div>

  <!-- Bank Details Fields -->
  <div class="mt-4" x-show="payment_method === 'bank'" x-transition>
    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Account Number</label>
    <input type="text"
           wire:model="account_number"
           placeholder="Enter Account Number"
           class="w-full py-2 px-3 border rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
    @error('account_number')
      <span class="text-red-700 text-sm">{{ $message }}</span>
    @enderror

    <label class="block mt-4 mb-2 text-sm font-medium text-gray-700 dark:text-white">Branch Name</label>
    <input type="text"
           wire:model="branch_name"
           placeholder="Enter Branch Name"
           class="w-full py-2 px-3 border rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
    @error('branch_name')
      <span class="text-red-700 text-sm">{{ $message }}</span>
    @enderror
  </div>

  <!-- QR Code Upload Section -->
  <div class="mt-4" x-show="payment_method === 'qr'" x-transition>
    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">Upload QR Code</label>
    <input type="file"
           wire:model="qr_code"
           accept="image/*"
           class="w-full py-2 px-3 border rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
    @error('qr_code')
      <!--<span class="text-red-700 text-sm">{{ $message }}</span>-->
    @enderror

    <!-- Live Preview of QR Code -->
    @if ($qr_code)
      <div class="mt-3">
        <p class="text-sm text-gray-600 dark:text-neutral-400">QR Code Preview:</p>
        <img src="{{ $qr_code->temporaryUrl() }}"
             alt="QR Code Preview"
             class="mt-2 h-40 w-40 object-contain rounded border shadow-md">
      </div>
    @endif
  </div>

</div>

      
      
      
    
      
      
          <!-- Checkbox -->
          <div class="mt-3 flex">
            <div class="flex">
              <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-1.5 border-gray-200 rounded text-orange-600 focus:ring-orange-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-orange-500 dark:checked:border-orange-500 dark:focus:ring-offset-gray-800" wire:model="terms">
          
            </div>
            <div class="ms-3">
              <label for="remember-me" class="text-sm text-gray-600 dark:text-neutral-400">By submitting this form I have read and acknowledged the <a class="text-orange-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-orange-500" href="#">Privacy policy</a></label>
            </div>
          
       
          </div>
          <div>
            @error('terms')
            <span class="text-red-700">
            {{$message}}
              </span>
            @enderror
        </div>
          <!-- End Checkbox -->
  
          <div class="mt-6 grid">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-orange-600 text-white hover:bg-orange-700 focus:outline-none focus:bg-orange-700 disabled:opacity-50 disabled:pointer-events-none">Donate</button>
          </div>
  
          <div class="mt-3 text-center">
            <p class="text-sm text-gray-500 dark:text-neutral-500">
              We'll get back to you in 1-2 business days.
            </p>
          </div>
    </div>
  </form>
