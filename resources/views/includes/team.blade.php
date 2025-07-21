{{-- team start  --}}

<!-- Team -->
<div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Our team</h2>
      <p class="mt-1 text-gray-600 dark:text-neutral-400">Creative people</p>
    </div>
    <!-- End Title -->
  
    <!-- Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 md:gap-12">

      @foreach ($teams as $team)
        
    
      <div class="text-center">
        <img class="rounded-full size-24 mx-auto" src="{{asset('storage/'.$team->image)}}" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 dark:text-neutral-200 text-[14px]">
           {{$team->name}}
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            {{$team->designation}}
          </p>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
           <small>Contact : {{" ".$team->contact}}</small> 
          </p>
        </div>
      </div>
      <!-- End Col -->
      @endforeach
    
  <!-- Pagination links -->

    
  
    </div>

    <div class="mt-4">
      {{ $teams->links('vendor.pagination.tailwind') }}
    </div>
    <!-- End Grid -->
  
    <!-- Card -->
    <!--<div class="mt-12 flex justify-center">-->
    <!--  <div class="border border-gray-200 py-2 px-3 rounded-full dark:border-neutral-700">-->
    <!--    <div class="flex items-center gap-x-3">-->
    <!--      <span class="text-sm text-gray-500 dark:text-neutral-500">Would you like to join us?</span>-->
    <!--      <a class="inline-flex items-center gap-x-2 text-sm font-medium text-orange-600 hover:text-orange-500 focus:outline-none focus:text-orange-500 dark:text-orange-500 dark:hover:text-orange-600 dark:focus:text-orange-600" href="{{route('causes')}}">-->
    <!--        Become a member-->
    <!--        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>-->
    <!--      </a>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- End Card -->
  </div>
  <!-- End Team -->
{{-- team end --}}