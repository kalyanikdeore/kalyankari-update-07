@extends('index')

@section('main')

<x-breadscrumb pageName="Success Stories"/>



{{-- <div class="px-10 py-5">
<div class="flex flex-row justify-between w-100">


    <div class="w-full sm:w-1/2">
      
<video width="600" controls>
    <source src="mov_bbb.mp4" type="video/mp4">
    <source src="mov_bbb.ogg" type="video/ogg">
    Your browser does not support HTML video.
  </video>
    </div>
    <div class="w-full sm:w-1/2 flex flex-col p-5">
    <p class="text-justify indent-5 text-[15px] mb-5"><span>"</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, quia? Corrupti laudantium, voluptatum repudiandae maxime, harum odit, rerum iure soluta ipsa eum ipsam repellat. Hic commodi sint doloremque sapiente voluptatibus nisi praesentium non dolor. Esse maiores ad amet a assumenda atque nisi, illum fuga quidem quas velit accusantium nostrum modi iure perferendis. Aliquam, iste? Alias tenetur pariatur, dolorum quo qui odio fugit sequi! Exercitationem est adipisci libero deserunt odit? Quis error deserunt a, expedita amet minus fugit maxime perspiciatis asperiores.<span>"</span></p>

    <div class="flex flex-row items-center self-end">
        <span class="inline-block size-[52px] bg-gray-100 rounded-full overflow-hidden me-3">
            <svg class="size-full text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.62854" y="0.359985" width="15" height="15" rx="7.5" fill="white"></rect>
              <path d="M8.12421 7.20374C9.21151 7.20374 10.093 6.32229 10.093 5.23499C10.093 4.14767 9.21151 3.26624 8.12421 3.26624C7.0369 3.26624 6.15546 4.14767 6.15546 5.23499C6.15546 6.32229 7.0369 7.20374 8.12421 7.20374Z" fill="currentColor"></path>
              <path d="M11.818 10.5975C10.2992 12.6412 7.42106 13.0631 5.37731 11.5537C5.01171 11.2818 4.69296 10.9631 4.42107 10.5975C4.28982 10.4006 4.27107 10.1475 4.37419 9.94123L4.51482 9.65059C4.84296 8.95684 5.53671 8.51624 6.30546 8.51624H9.95231C10.7023 8.51624 11.3867 8.94749 11.7242 9.62249L11.8742 9.93184C11.968 10.1475 11.9586 10.4006 11.818 10.5975Z" fill="currentColor"></path>
            </svg>
          </span>
      
            <div class=" me-5">
                <h2 class="text-black text-md">User Name</h2>
                <h2 class="text-sm text-gray-400">Designation</h2>
            </div>
  
         
    </div>
    </div>
</div>
</div> --}}


<section class="py-10 bg-white sm:py-16 lg:py-24">
  <div class="max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
      <div class="mx-auto text-left md:max-w-lg lg:max-w-2xl md:text-center">
          <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">
      
              {{$single_record->title}}
              {{-- <span class="relative inline-block">
                  <span class="absolute inline-block w-full h-2 bg-yellow-300 bottom-1.5"></span>
                  <span class="relative"> solve developer’s pain </span>
              </span> --}}
          </h2>
      </div>

      <div class="grid grid-cols-1 mt-8 md:mt-20 gap-y-6 md:grid-cols-2 gap-x-10">
          <div>
              <img class="w-full mx-auto sm:max-w-xs" src="{{asset('storage/'.$single_record->image)}}" alt="" />
          </div>

          <div>
              <h3 class="text-lg font-semibold text-gray-900">{{$single_record->introduction}}</h3>
              <p class="mt-4 text-lg text-gray-700">{{$single_record->description}}</p>
         

     
          </div>
      </div>
  </div>
</section>




<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
  <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
      <div class="grid items-center grid-cols-1 lg:items-stretch md:grid-cols-2 gap-y-8 gap-x-12 xl:gap-x-20">
          <div class="relative">
              <div class="">
                <iframe class="" src="https://www.youtube.com/embed/r07eAd9yFwE?si=cR-GasCm7C8nmsMf" width="560" height="315"  title="Iframe Example"></iframe>
              </div>
{{-- 
              <div class="absolute inset-0 flex items-center justify-center">
                  <div class="flex items-center justify-center rounded-full w-28 h-28 bg-white/20">
                      <button type="button" class="flex items-center justify-center w-20 h-20 text-white transition-all duration-200 rounded-full bg-gradient-to-r from-fuchsia-600 to-blue-600 hover:opacity-90">
                          <svg class="w-6 h-6 lg:w-8 lg:h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                              <path d="M8 6.82v10.36c0 .79.87 1.27 1.54.84l8.14-5.18c.62-.39.62-1.29 0-1.69L9.54 5.98C8.87 5.55 8 6.03 8 6.82z"></path>
                          </svg>
                      </button>
                  </div>
              </div> --}}
          </div>

          <div class="flex flex-col justify-between md:py-5">
              <blockquote>
                  <p class="text-2xl leading-relaxed text-black text-justify">{{$single_record->what_say_abt_us}}</p>
              </blockquote>

              <div class="mt-6 lg:mt-auto">
                  <p class="text-xl font-semibold text-black">{{$single_record->name}}</p>
                  <p class="mt-2 text-base text-gray-600">{{$single_record->company_name}}</p>
              </div>
          </div>
      </div>
  </div>
</section>



{{-- other stories  --}}

<section>
  <!-- Container -->
  <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
    <!-- Title -->
    <h2 class="text-3xl font-bold md:text-5xl text-center"> Inspiring Stories of Success </h2>
    <p class="mb-8 mt-4 text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16 text-center"> Journeys of True Success</p>
    <!-- Content -->
    <div class="mb-8 grid gap-0 sm:justify-items-stretch md:mb-12 md:grid-cols-2 md:gap-4 lg:mb-16 lg:gap-8">
      <!-- Item -->
      @foreach ($multiple_record as $item)
        
      <a href="{{route('stories',['id'=>$item->id])}}" class="flex items-center gap-4 rounded-md p-4">
        <img src="{{asset('storage/'.$item->image)}}" alt="" class="inline-block h-36 w-36 max-w-none flex-none object-cover" />
        <div class="flex flex-col items-start py-4">
          <div class="mb-4 rounded-md bg-gray-100 px-2 py-1.5">
            <p class="text-sm font-semibold text-orange-600"> {{$item->name}} </p>
          </div>
          <p class="mb-4 text-xl font-bold"> {{$item->title}} </p>
          <div class="flex flex-col items-start text-sm text-gray-500 lg:flex-row lg:items-center">
            <p>{{$item->designation}}</p>
            <p class="mx-2 hidden lg:block">-</p>
            <p>{{$item->company_name}}</p>
          </div>
        </div>
      </a>
      @endforeach
   
    </div>
         <div class="mt-4">
      {{ $multiple_record->links('vendor.pagination.tailwind') }}
    </div>
    <!-- Button -->
    <!--<a href="#" class="mx-auto flex w-32 rounded-md bg-black px-6 py-3 text-center font-semibold text-white"> View More </a>-->
  </div>
</section>




@include('includes.testimonials',$testimonials)
@include('includes.newsletter')
  
@endsection