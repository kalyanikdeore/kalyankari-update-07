   <!-- Section -->
   <div
       class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
       <div class="sm:col-span-12">
           <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200 uppercase leading-relaxed">
               Educational Details
           </h2>
       </div>
       <!-- End Col -->

       <div class="sm:col-span-5">
           <label for="af-account-gender-checkbox"
               class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
               Have you completed your secondary education (10th grade)? <span style="color:red">*</span>
           </label>
       </div>
       <!-- End Col -->

       <div class="sm:col-span-7" >
           <div class="sm:flex">
               <label for="af-account-gender-checkbox"
                   class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                   <input type="radio" 
                       class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                       id="af-account-ssc-checkbox" name="is_ssc"   value="yes" wire:model.live="is_ssc">
                   <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
               </label>

               <label for="af-account-gender-checkbox-female"
                   class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                   <input type="radio" 
                       class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                       id="af-account-checkbox-ssc" name="is_ssc"  value="no" wire:model.live="is_ssc">
                   <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
               </label>


           </div>
       </div>
       <!-- End Col -->
    
    
       @if($is_ssc==='yes')
       <div class="sm:col-span-3 "  >
           <label for="af-submit-application-full-name"
               class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
               Obtain Marks
           </label>
       </div>
       <!-- End Col -->

       <div class="sm:col-span-9"  >
           <div class="sm:flex">
               <input id="af-submit-application-full-name" type="text"
                   class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                   placeholder="Your Marks" wire:model="obtain_mark_ssc" >
                   
                   
               <input type="text"
                   class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                   placeholder="Total Marks" wire:model="total_mark_ssc" >
                   <br>
        

           </div>
       </div>




       <div class="sm:col-span-3">
           <label for="ssc_percentage"
               class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
               Percentage
           </label>
       </div>
       <!-- End Col -->

       <div class="sm:col-span-9">
           <div class="sm:flex">
               <input wire:poll='ssc_percentage' id="ssc_percentage" type="text"
                   class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                   placeholder="Percentage %" value="{{$this->ssc_percentage}}" >


           </div>
       </div>
@else

    {{-- if ssc isn't passed start  --}}
    <div class="sm:col-span-3">
        <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
          Currently Studying <span style="color:red">*</span>
        </label>
      </div>
      <!-- End Col -->
    
      <div class="sm:col-span-9">
        <div class="sm:flex">
            <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="current_std_below_ssc">
                <option selected="">Select Your Course</option>
                <option>6th</option>
                <option>7th</option>
                <option>8th</option>
                <option>9th</option>
         
           
              </select>
              <input id="medium" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Specify Medium" wire:model="specify_medium_ssc">
    
        </div>
      </div>

    
    
      <div class="sm:col-span-3">
        <label for="af-submit-application-full-name"
            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Currently Year Fee Structre <span style="color:red">*</span>
        </label>
    </div>
    <!-- End Col -->
    
    <div class="sm:col-span-9">
        <div class="sm:flex">
            <input id="af-submit-application-full-name" type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Fee" wire:model="current_std_fee_structure_below_ssc">
    
    
        </div>
    </div>
    
    
    <!-- End Col -->
    
    
    {{-- if ssc isn't passed end --}}
       @endif
       <!-- End Col -->





       @if($is_ssc!=='no')

       {{-- 12 grade start  --}}
       
       <div class="sm:col-span-5">
        <label for="af-account-gender-checkbox"
            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
            Have you completed your 12th-grade education or obtained a diploma?
        </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-7">
        <div class="sm:flex">
            <label for="af-account-gender-checkbox"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" 
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="af-account-hsc-checkbox" name="is_hsc"   value="yes" wire:model.live="is_hsc" >
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
            </label>

            <label for="af-account-gender-checkbox-female"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" 
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="af-account-gender-checkbox-hsc" name="is_hsc"   value="no" wire:model.live="is_hsc">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
            </label>


        </div>
    </div>
    <!-- End Col -->

    @if($is_hsc==='yes')
    <div class="sm:col-span-3">
        <label for="af-submit-application-full-name"
            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Obtain Marks
        </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
        <div class="sm:flex">
            <input id="af-submit-application-full-name" type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Your Marks" wire:model="obtain_mark_hsc">
            <input type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Total Marks"  wire:model="total_mark_hsc">

        </div>
    </div>

    <div class="sm:col-span-3">
        <label for="af-submit-application-full-name"
            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Percentage
        </label>
    </div>
    <!-- End Col -->
    <div class="sm:col-span-9">
        <div class="sm:flex">
            <input wire:poll  id="hsc_percentage" type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Percentage %" value="{{$this->hsc_percentage}}" >


        </div>
    </div>

    
@else

{{-- if 12th isn't passed start  --}}
<div class="sm:col-span-3">
    <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
      Currently Studying
    </label>
  </div>
  <!-- End Col -->

  <div class="sm:col-span-9">
    <div class="sm:flex">
        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="current_std_hsc_course">
            <option selected="">Select Your Course</option>
            <option>11th/12th</option>
            <option>Diploma</option>
       
          </select>
          <input id="hsc_field_mention" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Specify Your Field" wire:model="specify_hsc_course_name">

    </div>
  </div>


  <div class="sm:col-span-3">
    <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
      Currently Studying Year
    </label>
  </div>
  <!-- End Col -->

  <div class="sm:col-span-9">
    <div class="sm:flex">
        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="current_hsc_term">
            <option selected="">Current Year</option>
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
            <option>Other</option>
       
          </select>
       

    </div>
  </div>


  <div class="sm:col-span-3">
    <label for="af-submit-application-full-name"
        class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Currently Year Fee Structre
    </label>
</div>
<!-- End Col -->

<div class="sm:col-span-9">
    <div class="sm:flex">
        <input id="af-submit-application-full-name" type="text"
            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            placeholder="Fee" wire:model="current_hsc_term_fee_structure">


    </div>
</div>


<!-- End Col -->


{{-- if 12th isn't passed end --}}
    
@endif






    <!-- End Col -->









  @if($is_hsc!=='no')


    {{-- Graduation start  --}}

    <div class="sm:col-span-5">
        <label for="af-account-gender-checkbox"
            class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
            Have you completed your graduation?
        </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-7">
        <div class="sm:flex">
            <label for="af-account-gender-checkbox"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="af-account-gender-checkbox"
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="af-account-graduate-checkbox" name="is_graduate"   value="yes" wire:model.live="is_graduate">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
            </label>

            <label for="af-account-gender-checkbox-female"
                class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <input type="radio" name="af-account-gender-checkbox"
                    class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="af-account-checkbox-graduate" name="is_graduate"   value="no" wire:model.live="is_graduate">
                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
            </label>


        </div>
    </div>
    <!-- End Col -->

    @if ($is_graduate==='yes')

    <div class="sm:col-span-3">
        <label for="af-submit-application-full-name"
            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Obtain Marks
        </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
        <div class="sm:flex">
            <input wire:model="obtain_mark_graduate" id="af-submit-application-full-name" type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Your Marks">
            <input type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Total Marks" wire:model="total_mark_graduate">

        </div>
    </div>

    <div class="sm:col-span-3">
        <label for="af-submit-application-full-name"
            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
            Percentage
        </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
        <div class="sm:flex">
            <input wire:poll  id="graduate_percentage" type="text"
                class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                placeholder="Percentage %" value="{{$this->graduate_percentage}}">


        </div>
    </div>
        
    @else

    {{-- if graduation isn't passed start  --}}
<div class="sm:col-span-3">
    <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
      Currently Studying
    </label>
  </div>
  <!-- End Col -->

  <div class="sm:col-span-9">
    <div class="sm:flex">
        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="graduation_stream">
            <option selected="">Select Your Course</option>
            <option value="be">B.E.</option>
            <option value="btech">B.Tech.</option>
            <option value="bsc">B.Sc.</option>
            <option value="bcom">B.Com.</option>
            <option value="ba">B.A.</option>
            <option value="llb">LL.B.</option>
            <option value="bpharm">B.Pharm.</option>
            <option value="bba">B.B.A.</option>
            <option value="bca">B.C.A.</option>
            <option value="bdes">B.Des.</option>
            <option value="barch">B.Arch.</option>
            <option value="bms">B.M.S.</option>
            <option value="bhm">B.H.M.</option>
            <option value="bed">B.Ed.</option>
            <option value="bfa">B.F.A.</option>
            <option value="other">Other</option>
       
          </select>
          <input id="af-submit-application-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Specify Your Field/Subject" wire:model="specify_graduate_field_subject">

    </div>
  </div>


  <div class="sm:col-span-3">
    <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
      Currently Studying Year
    </label>
  </div>
  <!-- End Col -->

  <div class="sm:col-span-9">
    <div class="sm:flex">
        <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" wire:model="current_graduate_term">
            <option selected="">Current Year</option>
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
            <option>Other</option>
       
          </select>
       

    </div>
  </div>


  <div class="sm:col-span-3">
    <label for="af-submit-application-full-name"
        class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Currently Year Fee Structre
    </label>
</div>
<!-- End Col -->

<div class="sm:col-span-9">
    <div class="sm:flex">
        <input id="af-submit-application-full-name" type="text"
            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            placeholder="Fee" wire:model="current_graduate_term_fee_structure">


    </div>
</div>


<!-- End Col -->


{{-- if graduation isn't passed end --}}
        
    @endif

   


    <!-- End Col -->



@if($is_graduate!=='no')


{{-- post graduat start  --}}
  

  <div class="sm:col-span-5">
    <label for="af-account-gender-checkbox"
        class="inline-block text-sm text-gray-800 mt-2.5 dark:text-neutral-200">
        Have you completed your post-graduation?
    </label>
</div>
<!-- End Col -->

<div class="sm:col-span-7">
    <div class="sm:flex">
        <label for="af-account-gender-checkbox"
            class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            <input type="radio" 
                class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                id="af-account-post_graduate-checkbox" name="is_post_graduate"   value="yes" wire:model.live="is_post_graduate">
            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Yes</span>
        </label>

        <label for="af-account-gender-checkbox-female"
            class="flex py-2 px-3 w-full border border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            <input type="radio"
                class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                id="af-account-checkbox-post_graduate" name="is_post_graduate"   value="no" wire:model.live="is_post_graduate">
            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">No</span>
        </label>


    </div>
</div>
<!-- End Col -->

{{-- <div class="sm:col-span-3">
    <label for="af-submit-application-full-name"
        class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Obtain Marks
    </label>
</div>
<!-- End Col -->

<div class="sm:col-span-9">
    <div class="sm:flex">
        <input id="af-submit-application-full-name" type="text"
            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            placeholder="Your Marks">
        <input type="text"
            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            placeholder="Total Marks">

    </div>
</div>

<div class="sm:col-span-3">
    <label for="af-submit-application-full-name"
        class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
        Percentage
    </label>
</div>
<!-- End Col -->

<div class="sm:col-span-9">
    <div class="sm:flex">
        <input  id="post-graduate_percentage" type="text"
            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            placeholder="Percentage %" >


    </div>
</div> --}}


<!-- End Col -->

@if($is_post_graduate!=='yes')
{{-- if post-graduate isn't passed start  --}}
<div class="sm:col-span-3">
<label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
  Currently Studying
</label>
</div>
<!-- End Col -->

<div class="sm:col-span-9">
<div class="sm:flex">
    <select wire:model="post_graduation_stream" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        <option selected="">Select Your Course</option>
        <option value="me">M.E.</option>
        <option value="mtech">M.Tech.</option>
        <option value="msc">M.Sc.</option>
        <option value="mcom">M.Com.</option>
        <option value="ma">M.A.</option>
        <option value="llm">LL.M.</option>
        <option value="mpharm">M.Pharm.</option>
        <option value="mba">M.B.A.</option>
        <option value="mca">M.C.A.</option>
        <option value="mdes">M.Des.</option>
        <option value="march">M.Arch.</option>
        <option value="mphil">M.Phil.</option>
        <option value="mfa">M.F.A.</option>
        <option value="mph">M.P.H.</option>
        <option value="msw">M.S.W.</option>
        <option value="msw">Other</option>
   
      </select>
      <input id="af-submit-application-full-name" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Specify Your Field" wire:model="specify_post_graduate_field_subject">

</div>
</div>


<div class="sm:col-span-3">
<label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
  Currently Studying Year
</label>
</div>
<!-- End Col -->

<div class="sm:col-span-9">
<div class="sm:flex">
    <select wire:model="current_post_graduate_term" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
        <option selected="">Current Year</option>
        <option>1st</option>
        <option>2nd</option>
        <option>3rd</option>
        <option>4th</option>
        <option>Other</option>
   
      </select>
   

</div>
</div>


<div class="sm:col-span-3">
<label for="af-submit-application-full-name"
    class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
    Currently Year Fee Structre
</label>
</div>
<!-- End Col -->

<div class="sm:col-span-9">
<div class="sm:flex">
    <input id="af-submit-application-full-name" type="text"
        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
        placeholder="Fee" wire:model="current_post_graduate_term_fee_structure">


</div>
</div>


<!-- End Col -->


{{-- if post-graduate isn't passed end --}}

@else
<div>You are not eligible for educational loan!</div>

@endif



{{-- post graduat end  --}}
@endif
@endif
@endif

       <!-- End Col -->
   </div>
   <!-- End Section -->
