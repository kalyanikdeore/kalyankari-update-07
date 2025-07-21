   <!-- Section -->
   <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
    <div class="sm:col-span-12">
      <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200 uppercase leading-relaxed">
        Upload Documents
      </h2>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-3">
      <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Student Passport Photo <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
      <input type="file" name="photo" id="photo" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="photo">
        @error('photo')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
    </div>
    <!-- End Col -->


    <div class="sm:col-span-3">
      <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Student Sign <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="sign" class="sr-only">Choose file</label>
      <input type="file" name="sign" id="sign" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="sign">
        @error('sign')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
    </div>
    <!-- End Col -->



    <div class="sm:col-span-3">
      <label for="aadhar_card" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
       Aadhar Document <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="aadhar_card" class="sr-only">Choose file</label>
      <input type="file" name="aadhar_card" id="af-submit-application-resume-cv" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="adhar_card">
        @error('adhar_card')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
      </div>
    <!-- End Col -->


    <div class="sm:col-span-3">
      <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
       Previous Year Education Certificate <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
      <input type="file" name="af-submit-application-resume-cv" id="af-submit-application-resume-cv" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="prev_yr_marksheet">
        @error('prev_yr_marksheet')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
    </div>
    <!-- End Col -->



    <div class="sm:col-span-3">
      <label for="ssc_cert" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        10th Marksheet <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="ssc_cert" class="sr-only">Choose file</label>
      <input type="file" name="ssc_cert" id="af-submit-application-resume-cv" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="ssc_cert">
    </div>
    <!-- End Col -->



    <div class="sm:col-span-3">
      <label for="hsc_cert" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        12th Marksheet (if applicable) <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="hsc_cert" class="sr-only">Choose file</label>
      <input type="file" name="hsc_cert" id="hsc_cert" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="hsc_cert">
    </div>
    <!-- End Col -->



    <div class="sm:col-span-3">
      <label for="graduate_cert" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Graduation Marksheet (if applicable) <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="graduate_cert" class="sr-only">Choose file</label>
      <input type="file" name="graduate_cert" id="graduate_cert" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="graduate_cert">
    </div>
    <!-- End Col -->


    <div class="sm:col-span-3">
      <label for="community_cert" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        A dignified person in the community of the village/town where the student/parent resides and the local Shri. Or attach a letter of recommendation from the community. <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="community_cert" class="sr-only">Choose file</label>
      <input type="file" name="community_cert" id="community_cert" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="community_cert">
        @error('community_cert')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
    </div>
    <!-- End Col -->


    <div class="sm:col-span-3">
      <label for="income_cert" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
       Annual Income Certificate <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="income_cert" class="sr-only">Choose file</label>
      <input type="file" name="income_cert" id="income_cert" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="income_cert">
        @error('income_cert')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
      </div>
    <!-- End Col -->



    <div class="sm:col-span-3">
      <label for="institute_cert" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        It is necessary to attach the certificate of the college/institute where you are studying along with the fee <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="institute_cert" class="sr-only">Choose file</label>
      <input type="file" name="institute_cert" id="institute_cert" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="institute_cert">
        @error('institute_cert')
        <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
        @enderror
    </div>
    <!-- End Col -->

    <div class="sm:col-span-3">
      <label for="supporting_docs" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Other supporting documents <span style="color:red">*</span>
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <label for="supporting_docs" class="sr-only">Choose file</label>
      <input type="file" name="supporting_docs" id="af-submit-application-resume-cv" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
        file:bg-gray-50 file:border-0
         file:me-4
        file:py-2 file:px-4
        dark:file:bg-neutral-700 dark:file:text-neutral-400" wire:model="supporting_docs">
    </div>
    <!-- End Col -->



    <div class="sm:col-span-3">
      <div class="inline-block">
        <label for="amount" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
          How much rupee assistance has the student/parent sought? <span style="color:red">*</span>
        </label>
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <input id="amount" type="number" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="loan_amt_need">
      @error('loan_amt_need')
      <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
      @enderror

    </div>
   
    <!-- End Col -->
 
    <!-- End Col -->
  </div>
  <!-- End Section -->