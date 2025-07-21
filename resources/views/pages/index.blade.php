

@extends('index')

@section('main')




@include('includes.banner',$heroes)

    @php
    use Illuminate\Support\Str;
    @endphp



  @include('includes.importance')
@include('includes.stats',$totals)

@include('includes.features')



<!-- Clients -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="sm:w-1/2 xl:w-1/3 mx-auto text-center mb-6 md:mb-12">
    <h2 class="text-xl font-semibold md:text-2xl md:leading-tight text-gray-800 dark:text-neutral-200">Supported by Communities, Global Partners, and Over 99,000 Advocates Like You</h2>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-3 lg:gap-6">

@foreach ($partners as $partner)
  
<div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-neutral-800 flex flex-row justify-center items:center">
<img src="{{asset('storage/'.$partner->image)}}" width="300" height="250"/>
</div>
@endforeach

 

 
 
  </div>
  <!-- End Grid -->
</div>
<!-- End Clients -->









{{-- blog start  --}}













<section>
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
      <!-- Component -->
      <div class="flex flex-col items-center">
        <h2 class="text-center text-3xl font-bold md:text-5xl"> Infinite Insights </h2>
        <p class="mb-8 mt-4 text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16"> Discover, Read, Share—All in One Spot</p>
        <!-- Content -->
        <div class="mb-6 grid gap-4 sm:grid-cols-2 sm:justify-items-stretch md:mb-10 md:grid-cols-3 lg:mb-12 lg:gap-6">
          @foreach ($blogs as $blog)
            
          <a href="{{route('blog')}}" class="flex flex-col gap-4 rounded-md border border-solid border-gray-300 px-4 py-8 md:p-0">
            <img src="{{asset('storage/'.$blog->image)}}" alt="" class="h-60 object-cover" />
            <div class="px-6 py-4">
              {{-- <p class="mb-4 text-sm font-semibold uppercase text-gray-500"> lifestyle </p> --}}
              <p class="mb-4 text-xl font-semibold"> {{$blog->title}} </p>
              
             
              <p class="mb-6 text-sm text-gray-500 sm:text-base lg:mb-8">   {{ Str::words($blog->introduction, 10) }} </p>
              {{-- <div class="flex">
                <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPLaceholder%20Image%20Secondary.svg?alt=media&token=b8276192-19ff-4dd9-8750-80bc5f7d6844" alt="" class="mr-4 h-10 w-10 rounded-full object-cover" />
                <div class="flex flex-col">
                  <h6 class="text-base font-bold">Laila Bahar</h6>
                  <div class="flex flex-col lg:flex-row">
                    <p class="text-sm text-gray-500">Sept 28, 2022</p>
                    <p class="mx-2 hidden text-sm text-gray-500 lg:flex"> - </p>
                    <p class="text-sm text-gray-500">6 mins read</p>
                  </div>
                </div>
              </div> --}}
            </div>
          </a>
          @endforeach
        
     
        </div>
        <!-- Button -->
        <div class="mt-4 flex flex-row justify-between">
          {{ $blogs->links('vendor.pagination.tailwind') }}
        </div>
        {{-- <a href="#" class="rounded-md bg-black px-6 py-3 text-center font-semibold text-white"> View More </a> --}}
      </div>
    </div>
  </section>
{{-- blog end --}}










@include('includes.faqs',$faqs)
@include('includes.testimonials',$testimonials)
@include('includes.team',$teams)





@endsection