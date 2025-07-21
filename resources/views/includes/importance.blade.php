
{{-- about start  --}}
<section class="py-10 bg-gray-100 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="grid items-center grid-cols-1 gap-y-8 lg:grid-cols-2 gap-x-16 xl:gap-x-24">
            <div class="relative mb-12">
                <img class="w-full rounded-md" src="{{asset('assets/images/importance.jpg')}}" alt="" />

                {{-- <div class="absolute w-full max-w-xs px-4 -translate-x-1/2 sm:px-0 sm:max-w-sm left-1/2 -bottom-12">
                    <div class="overflow-hidden bg-white rounded">
                        <div class="px-10 py-6">
                            <div class="flex items-center justify-center">
                                <p class="flex-shrink-0 text-3xl font-bold text-orange-600 sm:text-4xl">37%</p>
                                <p class="pl-6 text-md font-medium text-black sm:text-2xl text-center">Change Lives <br />With Education.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div>
                <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full">
                    <svg class="w-8 h-8 text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="mt-10 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight"> Importance of Education</h2>
                <p class="mt-6 text-lg leading-relaxed text-gray-600 text-justify">Education is not just a right, it is a powerful tool that transforms lives. At Kalyankari Pratishthan, we focus on making education accessible to those who need it the most. We believe that with the right education, every child can achieve their dreams and become a contributing member of society. Our educational programs are designed to give underprivileged children the same opportunities as their peers, enabling them to break free from the cycle of poverty.</p>
                <a href="{{route('about')}}" title="" class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 rounded-md mt-9 bg-orange-500  hover:opacity-80 focus:opacity-80" role="button"> Explore more </a>
            </div>
        </div>
    </div>
</section>


{{-- about end --}}