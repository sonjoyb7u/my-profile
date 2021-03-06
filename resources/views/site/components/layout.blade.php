<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HOME || MY PROFILE')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="SRBThemes" />
    <link rel="shortcut icon" sizes="250x250" href="{{ asset('assets/site/images/logo//logo1.png') }}">
    <!--Bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/bootstrap/bootstrap.min.css') }}" />
    <!-- Materialdesign icons Css -->
    <link href="{{ asset('assets/site/vendors/materialdesignicon-css/materialdesignicons.min.css') }}" rel="stylesheet">
    <!-- Mobirise icons Css -->
    <link href="{{ asset('assets/site/vendors/mobirise-icon/mobiriseicons.css') }}" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/magnific-popup/css/magnific-popup.css') }}">
    <!-- Animation Css -->
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/animate-scroll/css/aos.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/animate-css/animate.min.css') }}">
    <!-- OWL SLIDER -->
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/owl-carousel/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/owl-carousel/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/owl-carousel/css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/animated-circle/css/animated-circle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site/vendors/toastr/css/toastr.min.css') }}">
    <!-- Custom style Css -->
    <link href="{{ asset('assets/site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/green.css') }}" rel="stylesheet" id="option-color">
</head>

<body>

<!-- Loader -->
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>


<!-- Start Navbar -->
@includeIf('site.components.partials.header')
<!-- End Navbar -->

<!-- START BANNER/SLIDER -->
{{----}}
@yield('slider')
<!-- END BANNER/SLIDER -->

<!-- START ABOUT -->
{{----}}
@yield('about')
<!-- END ABOUT -->

<!-- Start Skill Section -->
{{----}}
@yield('skill')
<!-- End Skill Section -->

<!-- START SERVICES -->
{{----}}
@yield('service')
<!-- END SERVICES -->

<!-- START HIRE -->
{{----}}
@yield('hire')
<!-- END HIRE -->

<!-- START CLIENT -->
{{----}}
@yield('client')
<!-- END CLIENT -->

<!--START WORK -->
{{----}}
@yield('project')
@yield('cat-wise-project')
<!--END WORK -->

<!-- START BLOG -->
{{----}}
@yield('blog')
<!-- END BLOG -->

<!-- START CONTACT -->
{{----}}
@yield('contact')
<!-- END CONTACT -->

<!--START FOOTER-->
@includeIf('site.components.partials.footer')
<!--END FOOTER-->


<!-- JAVASCRIPTS -->
<script src="{{ asset('assets/site/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/site/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/site/js/bootstrap-js/bootstrap.min.js') }}"></script>
<!--EASING JS-->
<script src="{{ asset('assets/site/vendors/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/site/vendors/scrollspy.min.js') }}"></script>
<!--PORTFOLIO FILTER JS-->
<script src="{{ asset('assets/site/vendors/isotope.js') }}"></script>
<!-- Magnific Popup Js -->
<script src="{{ asset('assets/site/vendors/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
<!--TEXT ROTETE-->
<script src="{{ asset('assets/site/vendors/jquery-simple-text-rotator/js/jquery.simple-text-rotator.js') }}"></script>
<!-- OWL CAROUSEL -->
<script src="{{ asset('assets/site/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<!--PARTICLES ANIMATE JS-->
<script src="{{ asset('assets/site/vendors/particle-js/js/particles.js') }}"></script>
<script src="{{ asset('assets/site/vendors/particle-js/js/particles.app.js') }}"></script>
<!-- PARALLAX JS -->
<script src="{{ asset('assets/site/vendors/parallax/js/parallax.js') }}"></script>
<!-- switcher js -->
<script src="{{ asset('assets/site/vendors/switcher/js/switcher.js') }}"></script>
<!-- AOS JS -->
<script src="{{ asset('assets/site/vendors/animate-scroll/js/aos.js') }}"></script>
<!-- ANIMATED-CIRCLE JS -->
<script src="{{ asset('assets/site/vendors/animated-circle/js/animated-circle.js') }}"></script>
<!--MAIN JS-->
<script src="{{ asset('assets/site/js/main.js') }}"></script>
<!--CUSTOM JS-->
<script src="{{ asset('assets/site/js/custom.js') }}"></script>
<!-- TOASTR JS -->
<script src="{{ asset('assets/site/vendors/toastr/js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
<script>
    // Toastr Message generate js...
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error', {
        closeButton: true,
        progressBar: true,
    });
    @endforeach
    @endif
</script>
<script>
    $(".simple-text-rotate").textrotator({
        animation: "fade",
        speed: 3500
    });
    AOS.init({
        easing: 'ease-in-out-sine',
        duration: 1000
    });
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ede8cad9e5f6944229027cb/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>
</html>


