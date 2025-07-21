@extends('index')

@section('main')

<x-breadscrumb pageName="About Us"/>

{{-- about us start  --}}
<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-16 items-center justify-center flex-col">
    <img class="lg:w-3/4 md:w-3/6 w-5/6 mb-10 rounded" alt="hero" src="{{asset('storage/'.$about_us->image)}}">
    <div class="text-center  w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$about_us->title}}</h1>
      <p class="mb-8 leading-relaxed text-justify">{{$about_us->description}}</p>
      {{-- <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
      </div> --}}
    </div>
  </div>
</section>








{{-- mission start  --}}
<section class="text-gray-600 body-font" >
    <div class="container mx-auto flex px-5 py-16 md:flex-row flex-col items-center">
      <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Our Mission
          {{-- <br class="hidden lg:inline-block">readymade gluten --}}
        </h1>
        <p class="mb-8 leading-relaxed text-justify">{{ $about_us->{'mission-description'} }}</p>
        {{-- <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
        </div> --}}
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="{{asset('storage/'.$about_us->{'mission-image'})}}">
      </div>
    </div>
  </section>




  {{-- vision start  --}}
  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-16 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="{{asset('storage/'.$about_us->{'vision-image'})}}">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Our
        Vision
        </h1>
        <p class="mb-8 leading-relaxed text-justify">{{ $about_us->{'vision-description'} }}</p>
        {{-- <div class="flex justify-center">
          <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
          <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
        </div> --}}
      </div>
    </div>
  </section>


  @include('includes.team')

  
@endsection