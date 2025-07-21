
<div>
  @session('contactError')
  <div class="bg-red-50 border-s-4 border-red-500 p-4 dark:bg-red-800/30" role="alert" tabindex="-1" aria-labelledby="hs-bordered-red-style-label">
    <div class="flex">
      <div class="shrink-0">
        <!-- Icon -->
        <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </span>
        <!-- End Icon -->
      </div>
      <div class="ms-3">
        <h3 id="hs-bordered-red-style-label" class="text-gray-800 font-semibold dark:text-white">
          Error!
        </h3>
        <p class="text-sm text-gray-700 dark:text-neutral-400">
          {{ session('contactError') }}
        </p>
      </div>
    </div>
  </div>
</div>
  @endsession
  @session('contactSuccess')
  <div class="space-y-5">
    <div class="bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30" role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
      <div class="flex">
        <div class="shrink-0">
          <!-- Icon -->
          <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
              <path d="m9 12 2 2 4-4"></path>
            </svg>
          </span>
          <!-- End Icon -->
        </div>
        <div class="ms-3">
          <h3 id="hs-bordered-success-style-label" class="text-gray-800 font-semibold dark:text-white">
            Successfully updated.
          </h3>
          <p class="text-sm text-gray-700 dark:text-neutral-400">
            {{ session('contactSuccess') }}
          </p>
        </div>
      </div>
    </div>
  @endsession
  <form wire:submit.prevent="save" method="post">
    @csrf
    <div class="grid gap-4">
      <!-- Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
          <label for="hs-firstname-contacts-1" class="sr-only">First Name</label>
          <input type="text" name="hs-firstname-contacts-1" id="hs-firstname-contacts-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="First Name" wire:model="firstName">
          @error('firstName')
          <span class="text-red-700">
          {{$message}}
            </span>
          @enderror
        </div>

        <div>
          <label for="hs-lastname-contacts-1" class="sr-only">Last Name</label>
          <input type="text" name="hs-lastname-contacts-1" id="hs-lastname-contacts-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Last Name" wire:model="lastName">
          @error('lastName')
          <span class="text-red-700">
          {{$message}}
            </span>
          @enderror
        </div>
      </div>
      <!-- End Grid -->

      <div>
        <label for="hs-email-contacts-1" class="sr-only">Email</label>
        <input type="email" name="hs-email-contacts-1" id="hs-email-contacts-1" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Email" wire:model="email">
        @error('email')
        <span class="text-red-700">
        {{$message}}
          </span>
        @enderror
      </div>

      <div>
        <label for="hs-phone-number-1" class="sr-only">Phone Number</label>
        <input type="text" name="hs-phone-number-1" id="hs-phone-number-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Phone Number" wire:model="mobile">
        @error('mobile')
        <span class="text-red-700">
        {{$message}}
          </span>
        @enderror
      </div>

      <div>
        <label for="hs-about-contacts-1" class="sr-only">Details</label>
        <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Details" wire:model="details"></textarea>

      </div>
    </div>
    <!-- End Grid -->

    <div class="mt-4 grid">
      <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-orange-600 text-white hover:bg-orange-700 focus:outline-none focus:bg-orange-700 disabled:opacity-50 disabled:pointer-events-none">Submit</button>
    </div>

    <div class="mt-3 text-center">
      <p class="text-sm text-gray-500 dark:text-neutral-500">
        We'll get back to you in 1-2 business days.
      </p>
    </div>
  </form>


</div>
