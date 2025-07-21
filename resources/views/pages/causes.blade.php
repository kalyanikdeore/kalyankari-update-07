@extends('index')

@section('main')

<x-breadscrumb pageName="Causes"/>



<!-- Icon Blocks -->
{{-- <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-2xl mx-auto">
      <!-- Grid -->
      <div class="grid gap-12">
        <div>
          <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
            Join Us in Supporting a Worthy Cause
          </h2>
          <p class="mt-3 text-gray-800 dark:text-neutral-400">
            Discover meaningful ways to contribute to our cause and help us create a positive impact in the community.
          </p>
        </div>
  
        <div class="space-y-6 lg:space-y-10">
          <!-- Icon Block -->
          <div class="flex gap-x-5 sm:gap-x-8">
            <svg class="shrink-0 mt-2 size-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>
            <div class="grow">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                Donate generously
              </h3>
              <p class="mt-1 text-gray-600 dark:text-neutral-400">
                You can support the institution by providing a suitable donation to help further its mission.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->
  
          <!-- Icon Block -->
          <div class="flex gap-x-5 sm:gap-x-8">
            <svg class="shrink-0 mt-2 size-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <div class="grow">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                Become a trustee
              </h3>
              <p class="mt-1 text-gray-600 dark:text-neutral-400">
                If you wish to take on a more involved role, you can join as a trustee member and help guide the organization.Encourage others to become members or supporters by sharing information about the institution and its work.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->
  
          <!-- Icon Block -->
          <div class="flex gap-x-5 sm:gap-x-8">
            <svg class="shrink-0 mt-2 size-6 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"/></svg>
            <div class="grow">
              <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                Recommend deserving students
              </h3>
              <p class="mt-1 text-gray-600 dark:text-neutral-400">
                If you know any students in your community or family who are in need of financial assistance, you can refer them to the institution and recommend them for aid.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->
        </div>
      </div>
      <!-- End Grid -->
    </div>
  </div> --}}
  <!-- End Icon Blocks -->



{{-- 
  <section>
    <!-- Container -->
    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
      <!-- Title -->
      <p class="text-center text-sm font-bold uppercase">3 easy steps</p>
      <h2 class="text-center text-3xl font-bold md:text-5xl"> How it works </h2>
      <p class="mx-auto mb-8 mt-4 max-w-lg text-center text-sm text-gray-500 sm:text-base md:mb-12 lg:mb-16"> Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam,purus sit amet luctus magna fringilla urna </p>
      <!-- Content -->
      <div class="grid items-center gap-8 lg:grid-cols-2 lg:gap-12">
        <!-- List -->
        <div class="flex h-full flex-col [grid-area:2/1/3/2] lg:[grid-area:1/2/2/3]">
          <!-- Item -->
          <a class="mb-8 flex max-w-lg justify-center gap-4 rounded-xl border border-solid border-gray-300 px-6 py-5 text-black" href="#w-tabs-0-data-w-pane-0">
            <div class="flex h-10 w-10 flex-none items-center justify-center rounded-full bg-gray-100">
              <p class="text-sm font-bold sm:text-base">1</p>
            </div>
            <div class="ml-4 flex flex-col gap-2">
              <h5 class="text-xl font-bold">Find Component</h5>
              <p class="text-sm text-gray-500"> Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam, purus sit. </p>
            </div>
          </a>
          <!-- Item -->
          <a class="mb-8 flex max-w-lg justify-center gap-4 px-6 py-5 text-black" href="#w-tabs-0-data-w-pane-1">
            <div class="flex h-10 w-10 flex-none items-center justify-center rounded-full bg-gray-100">
              <p class="text-sm font-bold sm:text-base">2</p>
            </div>
            <div class="ml-4 flex flex-col gap-2">
              <h5 class="text-xl font-bold">Copy and Paste</h5>
              <p class="text-sm text-gray-500"> Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam, purus sit. </p>
            </div>
          </a>
          <!-- Item -->
          <a class="mb-8 flex max-w-lg justify-center gap-4 px-6 py-5 text-black" href="#w-tabs-0-data-w-pane-2">
            <div class="flex h-10 w-10 flex-none items-center justify-center rounded-full bg-gray-100">
              <p class="text-sm font-bold sm:text-base">3</p>
            </div>
            <div class="ml-4 flex flex-col gap-2">
              <h5 class="text-xl font-bold">Done</h5>
              <p class="text-sm text-gray-500"> Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam, purus sit. </p>
            </div>
          </a>
        </div>
        <!-- Image -->
        <img alt="" src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" class="block h-full w-full overflow-hidden [grid-area:1/1/2/2] lg:[grid-area:1/1/2/2]" />
      </div>
    </div>
  </section> --}}

  
<!-- Contact Us -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <div class="max-w-2xl lg:max-w-5xl mx-auto">
    <div class="text-center">
      <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
        Join Our Supportive Community and Help Us Grow
      </h1>
      <p class="mt-1 text-gray-600 dark:text-neutral-400">
        Be Part of Our Journey Toward Positive Transformation
      </p>
    </div>

    <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">
      <!-- Card -->
      <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-neutral-700">
        <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-neutral-200">
          Fill in the form
        </h2>

 @livewire('member')
      </div>
      <!-- End Card -->

      <div class="divide-y divide-gray-200 dark:divide-neutral-800">

        @foreach ($causes as $cause)
              <!-- Icon Block -->
        <div class="flex gap-x-7 py-6">
          {{-- <svg class="shrink-0 size-6 mt-1.5 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg> --}}
          <div class="w-16">

            <img src="{{asset('storage/'.$cause->image)}}" width="100" height="100">
          </div>
          <div class="grow">
            <h3 class="font-semibold text-gray-800 dark:text-neutral-200">{{$cause->title}}</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500"> Your involvement directly contributes to empowering individuals and improving lives within the community. Every action you take helps us create lasting change.</p>
            {{-- <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
              Contact support
              <svg class="shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z" fill="currentColor"/>
              </svg>
            </a> --}}
          </div>
        </div>
        <!-- End Icon Block -->
        @endforeach
    


      </div>
    </div>
  </div>
</div>
<!-- End Contact Us -->




















  @include('includes.newsletter')
  
@endsection