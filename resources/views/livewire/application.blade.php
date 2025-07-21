<form wire:submit.prevent="save" method="post" id="application-form">
@csrf
    {{-- Student Section Start  --}}
    @include('auth.sections.student')

    {{-- Guardian/Parent Details Start  --}}
    @include('auth.sections.guardian')

    {{-- Qualification Details Start --}}

    @include('auth.sections.qualification')
    @include('auth.sections.other_details')
    @include('auth.sections.upload_documents')
    @include('auth.sections.declaration')



 



  

   

    <button type="submit" name="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-orange-600 text-white hover:bg-orange-700 focus:outline-none focus:bg-orange-700 disabled:opacity-50 disabled:pointer-events-none">
      Submit application
    </button>
  </form>
