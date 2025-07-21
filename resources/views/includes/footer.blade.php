<!-- ========== FOOTER ========== -->
<footer class="mt-auto bg-gray-900 w-full dark:bg-neutral-950">
    <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
      <!-- Grid -->
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6">
        <div class="col-span-full lg:col-span-1">
          <a class="flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
            <img src="{{ asset('assets/images/logo.png') }}" width="50%"/>
          </a>
          <small class="text-gray-300 antialiased text-justify">123 Main Street, Mumbai, Maharashtra 400001</small>
          <br>
          <small class="text-gray-300 antialiased text-justify">Contact : +91 9876543210</small>

          <div class="my-5">
            <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="https://facebook.com/kalyankaripratishtan">
              <i class='bx bxl-facebook text-2xl'></i>
            </a>
            <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="https://instagram.com/kalyankaripratishtan">
              <i class='bx bxl-instagram text-2xl'></i>
            </a>
            <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="mailto:contact@kalyankaripratishtan.org">
              <i class='bx bxl-gmail text-2xl'></i>
            </a>
            <a class="size-10 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-white/10 focus:outline-none focus:bg-white/10 disabled:opacity-50 disabled:pointer-events-none" href="https://wa.me/919876543210">
              <i class='bx bxl-whatsapp text-2xl'></i>
            </a>
          </div>
        </div>
        <!-- End Col -->
  
        <div class="col-span-1">
          <h4 class="font-semibold text-gray-100">Main Links</h4>
  
          <div class="mt-3 grid space-y-3">
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('eligibility')}}">Eligiblity Criteria</a></p>
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('beneficiary_student')}}">List of Beneficiaries</a></p>
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('application')}}">Application</a></p>
          </div>
        </div>
        <!-- End Col -->
  
        <div class="col-span-1">
          <h4 class="font-semibold text-gray-100">Company</h4>
  
          <div class="mt-3 grid space-y-3">
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('about')}}">About us</a></p>
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('blog')}}">Blog</a></p>
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('all_stories')}}">Success Stories</a> <span class="inline-block ms-1 text-xs bg-orange-700 text-white py-1 px-2 rounded-lg">Latest </span></p>
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('donation')}}">Why Donate</a></p>
            <p><a class="inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:outline-none focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="{{route('terms')}}">Terms and Conditions</a></p>
          </div>
        </div>
        <!-- End Col -->
  
        <div class="col-span-2">
          <h4 class="font-semibold text-gray-100">Stay up to date</h4>
          @livewire('newsletter')
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
  
      <div class="mt-5 sm:mt-12 grid gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
        <div class="flex justify-between items-center">
          <p class="text-sm text-gray-400 dark:text-neutral-400">
            <span>&#169;{{ date('Y') }} </span>Kalyankari Prathistan. All right reserved.
          </p>
        </div>
        <!-- End Col -->
  
        <!-- Social Brands -->
        <div>
          <p class="text-sm text-gray-400 dark:text-neutral-400">Design & Developed By : <a href="https://www.richsol.com/" class="text-decoration-none text-orange-500 hover:text-white ">Rich System Solution's Pvt Ltd</a></p>
        </div>
        <!-- End Social Brands -->
      </div>
    </div>
</footer>
<!-- ========== END FOOTER ========== -->

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919876543210?text=Hi%20I%20am%20interested%20in%20your%20services" class="whatsapp-float">
  <svg xmlns="http://www.w3.org/2000/svg" fill="white" width="28" height="28" viewBox="0 0 16 16">
    <path d="M13.601 2.326a7.876 7.876 0 0 0-11.201 0c-2.776 2.777-2.844 7.266-.15 10.112L.001 16l3.634-.949a7.935 7.935 0 0 0 3.936 1.026 7.877 7.877 0 0 0 5.556-13.751Zm-5.59 12.426a6.63 6.63 0 0 1-3.385-.936l-.243-.143-2.419.63.645-2.36-.167-.27a6.628 6.628 0 1 1 11.078-5.507 6.622 6.622 0 0 1-5.509 8.586ZM11.05 9.717c-.19-.095-1.123-.554-1.296-.618-.173-.065-.3-.095-.426.095-.127.19-.49.618-.6.747-.11.127-.22.143-.41.048-.19-.095-.797-.293-1.517-.934-.56-.499-.938-1.114-1.048-1.304-.11-.19-.012-.292.082-.387.084-.084.19-.22.286-.33.095-.11.127-.19.19-.318.063-.127.032-.238-.016-.333-.047-.095-.426-1.03-.582-1.408-.153-.368-.31-.317-.426-.323a6.73 6.73 0 0 0-.366-.007.705.705 0 0 0-.511.239c-.176.193-.667.658-.667 1.605 0 .947.683 1.86.778 1.987.095.127 1.349 2.13 3.27 2.986.457.196.813.313 1.09.399.457.146.872.126 1.201.077.367-.054 1.129-.462 1.29-.908.16-.446.16-.83.112-.91-.048-.079-.175-.127-.364-.222Z"/>
  </svg>
</a>

<style>
  .whatsapp-float {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    background-color: #25d366;
    color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    animation: pulse-animation 2s infinite;
    box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.4);
    transition: transform 0.3s ease-in-out;
  }

  .whatsapp-float:hover {
    transform: scale(1.1);
  }

  @keyframes pulse-animation {
    0% {
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.4);
    }
    70% {
      box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
    }
    100% {
      box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
    }
  }
</style>  