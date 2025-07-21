    <!-- Section -->
    <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
        <div class="sm:col-span-12">
          <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200 uppercase leading-relaxed">
            Student Details 
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Full name <span style="color:red">*</span>
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="sm:flex">
            <input id="af-submit-application-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="First Name" wire:model="student_firstname">
            
         
            <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Middle Name" wire:model="student_middlename">
            <input type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Last Name" wire:model="student_lastname">
          </div>
          @if ($errors->has('student_firstname') || $errors->has('student_middlename') || $errors->has('student_lastname'))
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
              {{ $errors->first('student_firstname') ?: ($errors->first('student_middlename') ?: $errors->first('student_lastname')) }}
          </p>
      @endif
      
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Date Of Birth <span style="color:red">*</span>
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-email" type="date" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="dob">
          @error('dob')
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
          @enderror
        </div>
        <!-- End Col -->

        <div class="sm:col-span-3">
          <label for="af-account-gender-checkbox" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
            Gender <span style="color:red">*</span>
          </label> 
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <div class="sm:flex">
            <label for="af-account-gender-checkbox" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox" value="male" wire:model="gender">
              <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Male</span>
            </label>

            <label for="af-account-gender-checkbox-female" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-female" value="female" wire:model="gender">
              <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Female</span>
            </label>

            <label for="af-account-gender-checkbox-other" class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox-other" value="transgender" wire:model="gender">
              <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Transgender</span>
            </label>
          </div>
          @error('gender')
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
          @enderror
        </div>
        <!-- End Col -->




        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="af-submit-application-phone" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
              Phone <span style="color:red">*</span>
            </label>
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-phone" type="tel" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="student_mobile">

          @error('student_mobile')
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
          @enderror
        </div>
        <!-- End Col -->
        <div class="sm:col-span-3">
          <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Email <span style="color:red">*</span>
          </label>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="af-submit-application-email" type="email" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="email">
          @error('email')
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
          @enderror
        </div>
        <!-- End Col -->




        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="aadhar" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
              Aadhar Number <span style="color:red">*</span>
            </label>
          </div>
        </div>
        <!-- End Col -->

        <div class="sm:col-span-9">
          <input id="aadhar" type="tel" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="aadhar">
          @error('aadhar')
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
          @enderror
        </div>

        <div class="sm:col-span-3">
          <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
           Select Country/State/City <span style="color:red">*</span>
          </label>
        </div>
        <!-- End Col -->
    
        <div class="sm:col-span-9">
          <div class="sm:flex">
            <select wire:model.live="countryId" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <option selected="" value="">Select Country</option>
              @foreach ($this->countries as $country)
              <option value="{{ $country->id }}">{{ $country->name }}</option>
          @endforeach
         
            </select>
            <select wire:model.live="stateId" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <option selected="" value="">Select State</option>
              @foreach ($this->states as $state)
              <option value="{{ $state->id }}">{{ $state->name }}</option>
          @endforeach
         
            </select>
            <select wire:model.live="cityId" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <option selected="" value="">Select City</option>
              @foreach ($this->cities as $city)
              <option value="{{ $city->id }}">{{ $city->name }}</option>
          @endforeach
         
            </select>
          </div>
          @if ($errors->has('countryId') || $errors->has('stateId') || $errors->has('cityId'))
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
              {{ $errors->first('countryId') ?: ($errors->first('stateId') ?: $errors->first('cityId')) }}
          </p>
      @endif
        </div>
        <div class="sm:col-span-3">
          <label for="student_address" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Student Address <span style="color:red">*</span>
          </label>
        </div>
        <div class="sm:col-span-9">
          <textarea id="student_address" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="Add a cover letter or anything else you want to share." wire:model="student_address"></textarea>
          @error('student_address')
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
          @enderror
        </div>
        <!-- End Col -->
    
     
    
    
    
    
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="student_zip" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
              Zip Code <span style="color:red">*</span>
            </label>
          </div>
        </div>
        <!-- End Col -->
    
        <div class="sm:col-span-9">
          <input id="student_zip" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="student_zip">

          @error('student_zip')
          <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
          @enderror
    
    
        </div>
       
        <!-- End Col -->
      </div>
      <!-- End Section -->