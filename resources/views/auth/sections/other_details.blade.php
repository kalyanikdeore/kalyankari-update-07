   <!-- Section -->
   <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
    <div class="sm:col-span-12">
      <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200 uppercase leading-relaxed">
       Other Details
      </h2>
    </div>
    <!-- End Col -->


    <div class="sm:col-span-5">
        <label for="af-account-gender-checkbox"
            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
            Is first the dignitaries recommend the applicant? <span style="color:red">*</span>
        </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-7">
        <div class="sm:flex">
            <label for="dignitaries_recommendation_yes"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="dignitaries_recommendation"
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="dignitaries_recommendation_yes" value="yes" wire:model.live="dignitaries_recommendation">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
            </label>

            <label for="dignitaries_recommendation_no"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="dignitaries_recommendation"
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="dignitaries_recommendation_no" value="no" wire:model.live="dignitaries_recommendation">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
            </label>
          

        </div>
        @error('dignitaries_recommendation')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
    </div>
    <!-- End Col -->

    <div class="sm:col-span-5">
        <label for="af-account-gender-checkbox"
            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
            Is Applicant recommended by community organization? <span style="color:red">*</span>
        </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-7">
        <div class="sm:flex">
            <label for="community_recommendation_yes"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="community_recommendation"
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="community_recommendation_yes" value="yes" wire:model.live="community_recommendation">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
            </label>

            <label for="community_recommendation"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="community_recommendation"
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="community_recommendation_no" value="no" wire:model.live="community_recommendation">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
            </label>


        </div>
        @error('community_recommendation')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
    </div>
    <!-- End Col -->


    <div class="sm:col-span-3">
      <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Has anyone else in the family benefited from this? <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <div class="sm:flex">
        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model.live="is_family_benefit">
            <option selected="" value="">Select </option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
       
          </select>
       
   
        <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="if Yes,Specify Name" wire:model="family_benefit_name" @if($is_family_benefit==='no') disabled="" @endif>
    
      </div>
      @error('is_family_benefit')
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
      @enderror
    </div>
    <!-- End Col -->


    <div class="sm:col-span-3">
        <label for="benefited_scheme" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Have you benefited from this scheme before? <span style="color:red">*</span>
        </label>
      </div>
      <!-- End Col -->
  
      <div class="sm:col-span-9">
        <div class="sm:flex">
          <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model.live="benefited_scheme">
              <option selected="" value="">Select </option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
         
            </select>
     
          <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="if Yes,Specify Year" wire:model="benefited_scheme_name" @if($benefited_scheme==='no') disabled="" @endif>
        </div>
        @error('benefited_scheme')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
      </div>
      <!-- End Col -->

  </div>
  <!-- End Section -->