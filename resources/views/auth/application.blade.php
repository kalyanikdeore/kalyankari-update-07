@extends('index')

@section('main')
    <x-breadscrumb pageName="Application" />


    <div
        class="flex flex-col bg-white border border-t-4 border-t-orange-600 shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 m-5 sm:m-20 ">
        <div class="bg-gray-100 border-b rounded-t-xl py-3  md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
            <p class="mt-1 text-lg text-gray-500 dark:text-neutral-500 ">
                Student Application ( शैक्षणिक मदत मिळणेसाठीचा अर्ज )
            </p>
        </div>
        <div class="px-2 md:p-5">
            <h3 class="text-lg font-bold text-gray-800 dark:text-white pt-3">
                <img src="{{ asset('assets/images/applications.png') }}" width="15%" class="mx-auto" />
            </h3>
            <p class="mt-2 text-gray-500 dark:text-neutral-400 text-center  pb-5">
                {{-- शैक्षणिक मदत मिळणेसाठीचा अर्ज <br> --}}
                {{-- प्रति,<br>
                मा. अध्यक्ष ,<br> --}}
             Maherghar Mangal Office, Khutwad Nagar, <br>
             Satpur ITI. Behind, Trimbak Road, <br>
             Nashik-422008.
            </p>
            <hr>


            <div class="sm:p-10">



                <p class="text-red-500 mb-10">
                    <strong>Note:</strong> <br>
                    Photo and Sign are in .jpg,.jpeg format allowed.<br>
                    All necessary documents are in pdf formate only.<br>
                    Compatible and best view on Google chrome browser <br>
                </p>
<!-- Card Section -->
<div class="w-full    mx-auto">
    <!-- Card -->
    <div class="w-full bg-slate-50 rounded-xl   sm:p-7 dark:bg-neutral-900">
  @livewire('application')
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Section -->

              
            </div>


            {{-- <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-green-600 decoration-2 hover:text-green-700 hover:underline focus:underline focus:outline-none focus:text-green-700 disabled:opacity-50 disabled:pointer-events-none dark:text-green-500 dark:hover:text-green-600 dark:focus:text-green-600" href="#">
        Card link
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
      </a> --}}
        </div>
    </div>
@endsection
