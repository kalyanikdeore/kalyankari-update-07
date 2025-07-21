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
  <form wire:submit.prevent="save"  method="post">
    @csrf
    <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wire:model="fullname">
        @error('fullname')
        <span class="text-red-700">
        {{$message}}
          </span>
        @enderror
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" wire:model="email">
        @error('email')
        <span class="text-red-700">
        {{$message}}
          </span>
        @enderror
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" wire:model="body"></textarea>
      </div>
      <button class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Submit</button>
    </form>

</div>

