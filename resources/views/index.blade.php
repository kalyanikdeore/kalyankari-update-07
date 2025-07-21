


@extends('layouts.app')




@section('root')
<div id="navbar" class="">

  @include('includes.navbar')
</div>


<!-- ========== MAIN CONTENT ========== -->



<!-- ========== END MAIN CONTENT ========== -->

<div id="main">
@yield('main')
</div>

<!-- ========== FOOTER ========== -->
<div class="">
  @include('includes.footer')
</div>
<!-- ========== END FOOTER ========== -->
@endsection

