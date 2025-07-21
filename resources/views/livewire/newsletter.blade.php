<div>
  @session('contactError')
  <div class="mt-2 bg-red-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-danger-label">
    <span id="hs-solid-color-danger-label" class="font-bold">Error</span> alert! {{ session('contactError')}}
  </div>
  @endsession
  @session('contactSuccess')
  <div class="mt-2 bg-teal-500 text-sm text-white rounded-lg p-4" role="alert" tabindex="-1" aria-labelledby="hs-solid-color-success-label">
    <span id="hs-solid-color-success-label" class="font-bold">Success</span> alert! {{ session('contactSuccess')}}
  </div>
  @endsession
  <form wire:submit.prevent="save" method="post">
    <div class="mt-4 flex flex-col items-center gap-2 sm:flex-row sm:gap-3 bg-white rounded-lg p-2 dark:bg-neutral-900">
      <div class="w-full">
        <label for="hero-input" class="sr-only">Subscribe</label>
        <input type="text" id="hero-input" name="hero-input" class="py-3 px-4 block w-full border-transparent rounded-lg text-sm focus:border-orange-500 focus:ring-orange-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter your email" wire:model="email">
      </div>
      <input type="submit" class="w-full sm:w-auto whitespace-nowrap p-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-orange-600 text-white hover:bg-orange-700 focus:outline-none focus:bg-orange-700 disabled:opacity-50 disabled:pointer-events-none" value="Subscribe">
      {{-- <a class="w-full sm:w-auto whitespace-nowrap p-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-orange-600 text-white hover:bg-orange-700 focus:outline-none focus:bg-orange-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
        Subscribe
      </a> --}}
    </div>
    @error('email')
    <span class="text-red-700 mt-2">
    {{$message}}
      </span>
    @enderror
    <p class="mt-3 text-sm text-gray-400">
        Uniting Communities, Transforming Lives
    </p>
  </form>
</div>


