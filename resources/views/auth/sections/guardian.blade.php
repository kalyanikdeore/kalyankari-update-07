   <!-- Section -->
   <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
    <div class="sm:col-span-12">
      <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200 uppercase leading-relaxed">
        Guardian Details
      </h2> 
    </div>
    <!-- End Col -->

    <div class="sm:col-span-3">
      <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Guardian Full Name <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <div class="sm:flex">
        <input id="parent_firstname" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="First Name" wire:model="parent_firstname">
        <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Middle Name" wire:model="parent_middlename">
        <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Last Name" wire:model="parent_lastname" >
      </div>
      @if ($errors->has('parent_firstname') || $errors->has('parent_middlename') || $errors->has('parent_lastname'))
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
          {{ $errors->first('parent_firstname') ?: ($errors->first('parent_middlename') ?: $errors->first('parent_lastname')) }}
      </p>
  @endif
    </div>
    <!-- End Col -->

    <div class="sm:col-span-5">
      <label for="af-account-gender-checkbox"
          class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
         if address is same as above <span style="color:red">*</span>
      </label>
  </div>
  <!-- End Col -->
  
  <div class="sm:col-span-7">
      <div class="sm:flex">
          <label for="af-account-gender-checkbox"
              class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <input type="radio" 
                  class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  id="af-account-post_graduate-checkbox" name="is_address_same"   value="yes" wire:model.live="is_address_same">
              <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
          </label>
  
          <label for="is_address_same"
              class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <input type="radio"
                  class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  id="is_address_same" name="is_address_same"   value="no" wire:model.live="is_address_same">
              <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
          </label>
  
  
      </div>
  </div>
  <!-- End Col -->






@if($is_address_same==='no')

    <div class="sm:col-span-3">
      <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
       Select Country/State/City <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <div class="sm:flex">
        <select wire:model.live="countryId_guardian" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
          <option selected="">Select Country</option>
          @foreach ($this->countries as $country)
          <option value="{{ $country->id }}">{{ $country->name }}</option>
      @endforeach
     
        </select>
        <select wire:model.live="stateId_guardian" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
          <option selected="">Select State</option>
          @foreach ($this->states as $state)
          <option value="{{ $state->id }}">{{ $state->name }}</option>
      @endforeach
     
        </select>
        <select wire:model.live="cityId_guardian" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
          <option selected="">Select City</option>
          @foreach ($this->cities as $city)
          <option value="{{ $city->id }}">{{ $city->name }}</option>
      @endforeach
     
        </select>
      </div>
      @if ($errors->has('countryId_guardian') || $errors->has('stateId_guardian') || $errors->has('cityId_guardian'))
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
          {{ $errors->first('countryId_guardian') ?: ($errors->first('stateId_guardian') ?: $errors->first('cityId_guardian')) }}
      </p>
  @endif
    </div>
    <div class="sm:col-span-3">
      <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Guardian Address <span style="color:red">*</span>
      </label>
    </div>
    <div class="sm:col-span-9">
      <textarea id="af-submit-application-bio" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Add a cover letter or anything else you want to share." wire:model="parent_address"></textarea>
      @error('parent_address')
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
      @enderror
    </div>
    <!-- End Col -->

 




    <div class="sm:col-span-3">
      <div class="inline-block">
        <label for="af-submit-application-phone" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
          Zip Code <span style="color:red">*</span>
        </label>
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <input id="af-submit-application-phone" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="parent_zip">
      @error('parent_zip')
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
      @enderror

@endif
    </div>
    <!-- End Col -->
    <div class="sm:col-span-3">
      <div class="inline-block">
        <label for="parent_mobile" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
          Phone <span style="color:red">*</span>
        </label>
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <input id="parent_mobile" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="parent_mobile">

      @error('parent_mobile')
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
      @enderror
    </div>
    <!-- End Col -->
    <div class="sm:col-span-3">
      <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Source of Income <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="source_income">
        <option selected="" value="">Select Source of Income</option>
        <option value="farmer">Farmer</option>
        <option value="private sector">Private Job Sector</option>
        <option value="government sector">Government Job Sector</option>
        <option value="business">Business</option>
   
      </select>
      @error('source_income')
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
      @enderror
    </div>
    <!-- End Col -->




    <div class="sm:col-span-3">
      <div class="inline-block">
        <label for="af-submit-application-current-company" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
         Annual Income <span style="color:red">*</span>
        </label> 
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <input id="af-submit-application-current-company" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="income">
      @error('income')
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
      @enderror
    </div>
    <!-- End Col -->
  </div>
  <!-- End Section -->