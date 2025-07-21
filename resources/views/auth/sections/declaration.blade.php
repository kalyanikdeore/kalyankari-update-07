 <!-- Section -->
 <div class="py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200 uppercase leading-relaxed">
      Submit application
    </h2>
    <p class="mt-3 text-sm text-gray-600 dark:text-neutral-400">
      In order to contact you with future jobs that you may be interested in, we need to store your personal data.
    </p>
    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
      If you are happy for us to do so please click the checkbox below.
    </p>

    <div class="mt-5 flex">
      <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-submit-application-privacy-check" wire:model="declaration">
      <label for="af-submit-application-privacy-check" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">  I hereby declare that the information provided is complete, true, and accurate to the best of my knowledge. I understand that any discrepancies, falsehoods, or misrepresentation of facts may lead to legal consequences or other appropriate actions being taken against me.</label>
   
    </div>

    @error('declaration')
    <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
    @enderror

    <div class="mt-5 flex">
      <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-submit-application-privacy-check" wire:model="consent">
      <label for="af-submit-application-privacy-check" class="text-sm text-gray-500 ms-2 dark:text-neutral-400">I consent to the collection, storage, and processing of my personal information in accordance with applicable laws and regulations.</label>
   
    </div>

    @error('consent')
    <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{$message}}</p>
    @enderror
  </div>
  <!-- End Section -->

