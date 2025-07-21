


<div class="flex flex-col items-center sm:flex-row sm:justify-between  px-10 py-3 sm:items-center w-full ">
    <div class=" flex flex-col-reverse items-center sm:flex-row gap-3 sm:gap-0">
        <a class="py-2 px-5 inline-flex items-center font-medium text-sm rounded-full bg-orange-600 text-white hover:bg-orange-700 focus:outline-none focus:bg-orange-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-orange-500 dark:hover:bg-orange-600 dark:focus:bg-orange-600 text-center w-20 " href="{{route('donation')}}">
            Donate
            </a>
            <span class="antialiased leading-relaxed text-gray-500 ms-5">
                Education is Every Child’s Right!
                </span>
    </div>
    <div class="">
        
    
           <ul class="flex flex-col items-center sm:flex-row gap-3 mt-3 sm:mt-0">
               <li class="me-5 flex felx-row items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-orange-500 me-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                  </svg>
                  
                +91 {{$contacts->phone}}</li>
            <li class="me-5 flex flex-row items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 text-orange-500 me-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>
              
              {{$contacts->email}}</li>
            <li class="">
                  <div id="google_translate_element" style="display: flex"></div> 
            </li>
        </ul> 
    
    </div>
    
    </div>
    
    @push('LangSwitch')
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,mr'}, 'google_translate_element');
      }
      </script>
    @endpush
