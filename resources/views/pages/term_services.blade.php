@extends('index')

@section('main')

<x-breadscrumb pageName="Terms and Conditions"/>


<section>
    <div class="flex flex-col items-center justify-center px-5 md:px-10">
      <!-- Title Container -->
      <div class="flex h-auto min-w-[100vw] flex-col items-center justify-end bg-[#f2f2f7] py-6 md:h-64">
        <div class="flex flex-col items-center gap-y-4 py-5">
          <h1 class="text-3xl font-bold md:text-5xl">TERMS AND CONDITIONS</h1>
          <p class="text-sm text-[#808080] sm:text-base">Guidelines for Educational Assistance</p>
        </div>
      </div>
      <!-- Content Container -->
      <div class="mx-auto w-full max-w-5xl py-12 md:py-16 lg:py-20">
        <!-- Component -->
        <div class="flex flex-col items-center gap-y-14">
          <p class="max-w-3xl text-center text-sm sm:text-base">Terms and conditions of the loan scholarships provided for higher education to students of the Ladshakhiya Wani community by the Kalyankari Pratishthan.</p>
          <div class="flex min-w-full flex-col gap-y-10">
            <div class="flex min-w-full py-4 [border-bottom:1px_solid_rgb(226,_226,_226)]">
              <h6 class="text-base font-bold">GENERAL TERMS &amp; CONDITIONS</h6>
            </div>
            <div class="flex flex-col gap-y-10">
              <div class="flex min-w-full flex-col items-start gap-y-6">
                @foreach ($terms as $term)
                <div class="flex flex-col items-start gap-y-3">
                  <p class="text-sm font-bold">{{$term->title}}</p>

                  @if ($term->subtitle!="0")  
                  <p class="text-sm font-bold">{{$term->subtitle}}</p>
                  @endif

                  @if ($term->description!="0")
                      <p class="text-sm">{{$term->description}}</p>
                  @endif

@if ($term->list)
    <ol class="list-decimal list-outside ms-5">
      @foreach (json_decode($term->list) as $item)
      <li class="my-2 text-justify">{{$item->list_item}}</li>
      @endforeach
    </ol>
@endif


                </div>
             
                @endforeach
              
              
              </div>
              <div class="min-h-[1px] min-w-full bg-[#e2e2e2]"></div>
              <p class="text-sm">By accessing, browsing, or utilizing any design services, communication channels, or materials provided by Flowspark, including but not limited to graphic design, web design, branding, illustration, and user interface design, whether through our website, email, phone, or any other means, you expressly acknowledge, understand, and agree that you have carefully read, comprehended, and fully consent to be legally bound by all the provisions, terms, and conditions set forth in these Terms of Service, including any additional agreements, policies, guidelines, or amendments referenced or incorporated herein.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@include('includes.newsletter')
  
@endsection