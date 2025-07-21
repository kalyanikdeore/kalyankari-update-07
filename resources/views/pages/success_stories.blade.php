@extends('index')

@section('main')

<x-breadscrumb pageName="Success Stories"/>






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
        @foreach ($stories as $item)
          
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
      {{ $stories->links('vendor.pagination.tailwind') }}
    </div>
      <!-- Button -->
      <!--<a href="#" class="mx-auto flex w-32 rounded-md bg-black px-6 py-3 text-center font-semibold text-white"> View More </a>-->
    </div>
  </section>



@include('includes.testimonials',$testimonials)
@include('includes.newsletter')
  
@endsection