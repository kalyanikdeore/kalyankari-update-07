
    

@extends('index')

@section('main')
    <x-breadscrumb pageName="Message" />

    @if($data==="success")

    <div class="px-10 py-10 min-h-96">
        <div class="bg-teal-50 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert" tabindex="-1" aria-labelledby="hs-with-list-label">
            <div class="flex">
              <div class="shrink-0">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                  </svg>
              </div>
              <div class="ms-4">
                <div class="flex flex-row">
                    <h3 id="hs-with-list-label" class="text-sm font-semibold">
                        Your Application has been submitted successfully.
                    </h3>
                    <a href="{{route('home')}}" class="ms-2  font-bold underline">Go back</a>
                </div>
               
                {{-- <div class="mt-2 text-sm text-teal-700 dark:text-teal-400">
                  <ul class="list-disc space-y-1 ps-5">
                    <li>
                    
                    </li>
                  </ul>
                </div> --}}
              </div>
            </div>
          </div>
    </div>

    @else
    <div class="px-10 py-10 min-h-96">
        <div class="bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500" role="alert" tabindex="-1" aria-labelledby="hs-with-list-label">
            <div class="flex">
              <div class="shrink-0">
                <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="m15 9-6 6"></path>
                  <path d="m9 9 6 6"></path>
                </svg>
              </div>
              <div class="ms-4">
                <h3 id="hs-with-list-label" class="text-sm font-semibold">
                  A problem has been occurred while submitting your application.
                </h3>
                <div class="mt-2 text-sm text-red-700 dark:text-red-400">
                  <ul class="list-disc space-y-1 ps-5">
                    <li>
                     Due to some technical issue
                    </li>
                    <li>
                      Email field can't be empty
                    </li>
                    <li>
                      Please enter a valid phone number
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
    @endif


 

@endsection
