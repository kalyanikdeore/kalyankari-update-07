@extends('index')

@section('main')

<x-breadscrumb pageName="List of Beneficiaries"/>




<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto ">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-md overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700 ">
              <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                  List of Beneficiary Students
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  
                  Students Receiving Educational Aid and Scholarships
                </p>
              </div>
  
              {{-- <div class="sm:col-span-1">
                <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
                <div class="relative">
                  <input type="text" id="hs-as-table-product-review-search" name="hs-as-table-product-review-search" class="py-2 px-3 ps-11 block w-full border-gray-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search">
                  <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                    <svg class="size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                  </div>
                </div>
              </div> --}}
            </div>
            <!-- End Header -->
  
            <!-- Collapse -->
            <div class="border-b border-gray-200 hover:bg-gray-50 dark:hover:bg-neutral-900 dark:border-neutral-700">
              {{-- <button type="button" class="hs-collapse-toggle py-4 px-6 w-full flex items-center gap-2 font-semibold text-gray-800 dark:text-neutral-200" id="hs-as-table" aria-expanded="false" aria-controls="hs-as-table-label" data-hs-collapse="#hs-as-table-label">
                <svg class="hs-collapse-open:rotate-90 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                Insights
              </button> --}}
              <div id="hs-as-table-label" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-as-table">
                <div class="pb-4 px-6">
                  <div class="flex items-center space-x-2">
                    <span class="size-5 flex justify-center items-center rounded-full bg-blue-600 text-white dark:bg-blue-500">
                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </span>
                    <span class="text-sm text-gray-800 dark:text-neutral-400">
                      There are no insights for this period.
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Collapse -->
  
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
              <thead class="bg-gray-50 dark:bg-neutral-900">
                <tr>
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Sr.no
                      </span>
                      {{-- <div class="hs-tooltip">
                        <div class="hs-tooltip-toggle">
                          <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                          <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                            Invoice number related popup
                          </span>
                        </div>
                      </div> --}}
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Name, address, mobile number of beneficiary student and parent
                      </span>
                      {{-- <div class="hs-tooltip">
                        <div class="hs-tooltip-toggle">
                          <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                          <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                            Invoice number related popup
                          </span>
                        </div>
                      </div> --}}
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Mobile Number
                      </span>
                    </div>
                  </th>

                  
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Name and year of course enrolled
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      
                Name and address of the educational institution
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Assistance amount per annum
                      </span>
                    </div>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                        Financial year
                      </span>
                    </div>
                  </th>
                </tr>
              </thead>
  
              <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
               
                
                @foreach($beneficiary as $beneficiary_data)
                <tr class="bg-white hover:bg-gray-50 dark:bg-neutral-900 dark:hover:bg-neutral-800">
                  <td class="size-px whitespace-nowrap">
                    <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                      <span class="block px-6 py-2">
                        <span class="font-mono text-sm text-slate-600 dark:text-blue-500">{{$beneficiary_data->id}}</span>
                      </span>
                    </button>
                  </td>
                  <td class="size-px whitespace-nowrap w-full max-w-4xl">
                    <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                      <span class="block px-6 py-2">
                        <span class=" text-sm  dark:text-blue-500 text-black ">{{$beneficiary_data->student_name}}
                        {{$beneficiary_data->guardian_name?$beneficiary_data->guardian_name:''}}
                        <br>
                          {{$beneficiary_data->student_address?$beneficiary_data->student_address:''}}<br>
                          {{$beneficiary_data->guardian_mobile?$beneficiary_data->guardian_mobile:''}}
                          </span>
                      </span>
                    </button>
                  </td>
                  <td class="size-px whitespace-nowrap">
                    <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                      <span class="block px-6 py-2">
                        <span class="text-sm text-gray-600 dark:text-neutral-400">  {{$beneficiary_data->student_mobile?$beneficiary_data->student_mobile:'-'}}</span>
                      </span>
                    </button>
                  </td>
                  <td class="size-px whitespace-nowrap">
                    <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                      <span class="block px-6 py-2">
                        {{$beneficiary_data->course_name}}<br>
                        {{$beneficiary_data->current_term?$beneficiary_data->current_term:'-'}}
                      </span>
                    </button>
                  </td>
                  <td class="size-px whitespace-nowrap">
                    <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                      <span class=" px-6 py-2 flex flex-wrap">
                        <span class="text-sm text-gray-600 dark:text-neutral-400 ">  {{$beneficiary_data->college_name_address?$beneficiary_data->college_name_address:'-'}}</span>
                      </span>
                    </button>
                  </td>
                  <td class="size-px whitespace-nowrap">
                    <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                      <span class="block px-6 py-2">
                        <span class="text-sm text-gray-600 dark:text-neutral-400">{{$beneficiary_data->amt_per_annum}}</span>
                      </span>
                    </button>
                  </td>
                  <td class="size-px whitespace-nowrap">
                    <button type="button" class="block" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-ai-invoice-modal" data-hs-overlay="#hs-ai-invoice-modal">
                      <span class="block px-6 py-2">
                        <span class="text-sm text-gray-600 dark:text-neutral-400">{{$beneficiary_data->financial_yr}}</span>
                      </span>
                    </button>
                  </td>
            
            
                </tr>
                @endforeach
            
  
               
  
            
              </tbody>
            </table>
            <!-- End Table -->
  
            <!-- Footer -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
              {{-- <div>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">9</span> results
                </p>
              </div> --}}
  
            
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Table Section -->
  
                <div class="flex flex-row justify-center mb-16 ms-auto">
               {{$beneficiary->links('vendor.pagination.tailwind')}}
              </div>




 



  
@endsection