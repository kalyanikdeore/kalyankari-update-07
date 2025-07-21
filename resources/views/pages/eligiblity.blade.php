@extends('index')

@section('main')
    <x-breadscrumb pageName="Eligiblity Criteria's" />



   

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Eligiblity Criteria
                </h1>
                <p class="text-base leading-relaxed xl:w-full lg:w-3/4 mx-auto">A concise summary of the main qualifications required to be eligible for the application process.</p>
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">

                @foreach ($criteria as $item )
                <div class="p-2 sm:w-1/2 w-full">
                    <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-orange-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="title-font font-medium">{{$item->title}}</span>
                    </div>
                </div>
                @endforeach
               
              
            </div>
            <a href="{{route('application')}}"
                class="flex mx-auto w-32 mt-16 text-white bg-orange-500 border-0 py-2 px-2 focus:outline-none hover:bg-orange-600 rounded text-lg justify-center pointer">Apply Now</a>
        </div>
    </section>

{{-- {{dd($requirements)}} --}}
    <section class="text-gray-600 body-font flex flex-row justify-center">
        <div class="container  py-24">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Documents Requirement
                </h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">A set of official documents, including forms and certificates, that are crucial for the submission process.</p>
            </div>
            <div class="flex  justify-center w-100 ">
                <div class="w-100 flex   gap-x-10 items-start">

                    @foreach ($requirements as $docs )
                    <div class=" sm:w-1/4  w-full ">
                        <h2
                            class="font-medium title-font tracking-widest text-gray-900 mb-4 text-sm text-center sm:text-left">
                            {{$docs->title}}</h2>
                        <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1 space-y-2.5">

                        

                            @foreach (json_decode($docs->documents) as $paper)
                            <a>
                                <span
                                    class="bg-orange-100 text-orange-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>{{$paper->documents}}
                            </a>
                            @endforeach
                         
                          
                        </nav>
                    </div> 
                    @endforeach
                  
                  
                </div>
            </div>
            <a href="{{route('application')}}"
                class="flex mx-auto w-32 mt-16 text-white bg-orange-500 border-0 py-2 px-2 focus:outline-none hover:bg-orange-600 rounded text-lg justify-center pointer">Apply Now</a>
        </div>
    </section>


    @include('includes.newsletter')
@endsection
