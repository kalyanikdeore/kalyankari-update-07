<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="description" content="Discover Kalyankari Prathishtan, an NGO in India dedicated to empowering communities through educational support. We provide resources, scholarships, and programs aimed at enhancing access to quality education for underprivileged children and promoting lifelong learning opportunities.">

<meta property="og:title" content="Kalyankari Prathishtan - NGO in India focused on educational support" />
<meta property="og:type" content="website" />

<meta property="og:description" content="Discover Kalyankari Prathishtan, an NGO in India dedicated to empowering communities through educational support. We provide resources, scholarships, and programs aimed at enhancing access to quality education for underprivileged children and promoting lifelong learning opportunities" />
    <title>Kalyankari Prathishtan - @yield('title',"NGO in India focused on educational support")</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}">


      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.green.min.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<style>

    .goog-te-gadget > span,.goog-te-gadget + span{
        display: none;
    }
</style>

<body>

    @include('includes.header')
    <div id="app">
        @yield('root')
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
<script   src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

@stack('bannerScript')
@stack('owlTestimonials')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
      </script>
  


 @stack('LangSwitch')


 @livewireScripts
</body>

</html>
