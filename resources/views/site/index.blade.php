<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Profile :: Home')</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="SRBThemes" />
    <link rel="shortcut icon" href="{{ asset('assets/site/images/logo//logo1.png') }}">
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
    <!-- Custom style Css -->
    <link href="{{ asset('assets/site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/green.css') }}" rel="stylesheet" id="option-color">
</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">

            <a class="navbar-brand pt-0 logo" href="#">
                <img src="{{ asset('assets/site/images/logo/logo2.png') }}" alt="" class="img-fluid logo-light">
                <img src="{{ asset('assets/site/images/logo/logo2.png') }}" alt="" class="img-fluid logo-dark">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="hire-me">
                <a href="#" class="btn btn-outline-custom btn-round">Hire Me</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- START HOME -->
    <section class="section header-bg-img jarallax h-100vh" data-jarallax='{"speed": 0.4}' style="background-image: url({{ asset('assets/site/images/banner/slider-1.png') }});" id="home">
        <div class="bg-overlay"></div>
        <div class="header-table">
            <div class="header-table-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="text-center header-content mx-auto" data-aos="fade-up">
                                <h4 class="text-white first-title mb-4">Welcome</h4>
                                <h1 class="header-name text-white text-capitalize mb-0">I'M <span class="simple-text-rotate font-weight-bold">Sonjoy Barua.,A Web Designer.,A Developer.</span></h1>
                                <p class="text-white mx-auto header-desc mt-4">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                                <div class="mt-4 pt-2">
                                    <a href="#" class="btn btn-outline-custom btn-round">Download Cv</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_down">
            <a href="#about" class="scroll">
                <i class="text-white"></i>
            </a>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START ABOUT -->
    <section class="section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mt-3" data-aos="fade-up">
                        <img src="http://theme.srbthemes.com/kerri/light/images/about.jpg" alt="" class="img-fluid mx-auto d-block img-thumbnail">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3" data-aos="fade-up">
                        <h2><span class="font-weight-bold">About</span> Me</h2>
                        <h4 class="mt-4">Hello! <span class="text-custom font-weight-bold">I'M Kerri Deo.</span></h4>
                        <p class="text-muted mt-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                        <p class="text-muted mt-2">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <p class="text-muted mt-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        <div>
                            <ul class="mb-0 about-social list-inline mt-4">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- START SERVICES -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up">
                        <h2>Our <span class="font-weight-bold">Services</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center services-boxes rounded p-4 mt-4" data-aos="fade-up">
                        <div class="services-boxes-icon">
                            <i class="mbri-growing-chart text-custom display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Graphic Design</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center services-boxes rounded p-4 mt-4" data-aos="fade-up">
                        <div class="services-boxes-icon">
                            <i class="mbri-hot-cup text-custom display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Unlimited Color</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center services-boxes rounded p-4 mt-4" data-aos="fade-up">
                        <div class="services-boxes-icon">
                            <i class="mbri-upload text-custom display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Media Marketing</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-center services-boxes rounded p-4 mt-4" data-aos="fade-up">
                        <div class="services-boxes-icon">
                            <i class="mbri-layers text-custom display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Unlimited Wifi</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center services-boxes rounded p-4 mt-4" data-aos="fade-up">
                        <div class="services-boxes-icon">
                            <i class="mbri-website-theme text-custom display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Responsive Design</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center services-boxes rounded p-4 mt-4" data-aos="fade-up">
                        <div class="services-boxes-icon">
                            <i class="mbri-edit text-custom display-4"></i>
                        </div>
                        <div class="mt-4">
                            <h5 class="mb-0">Easy to customize</h5>
                            <div class="services-title-border"></div>
                            <p class="text-muted mt-3">There are many variations of passages of but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START CTA -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up">
                        <h2>I Am Available For Freelancer.</h2>
                    </div>
                    <div class="text-center mt-4" data-aos="fade-up">
                        <a href="#" class="btn btn-custom">Hire Me!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- START CLIENT -->
    <section class="section bg-light" id="client">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up">
                        <h2>Our <span class="font-weight-bold">Client</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-12">
                    <div id="owl-demo" class="owl-carousel" data-aos="fade-up">
                        <div class="text-center testi_boxes mx-auto">
                            <div class="tam_testi_icon text-custom">
                                <i class="mbri-quote-left"></i>
                            </div>
                            <div class="mt-2">
                                <div>
                                    <img src="http://theme.srbthemes.com/kerri/light/images/testi/testi-1.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                </div>
                                <p class="client_review font-italic mt-4 text-center text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here."</p>
                                <p class="client_name text-center mb-0 mt-4">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
                            </div>
                        </div>
                        <div class="text-center testi_boxes mx-auto">
                            <div class="tam_testi_icon text-custom">
                                <i class="mbri-quote-left"></i>
                            </div>
                            <div class="mt-2">
                                <div>
                                    <img src="http://theme.srbthemes.com/kerri/light/images/testi/testi-2.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                </div>
                                <p class="client_review font-italic mt-4 text-center text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here."</p>
                                <p class="client_name text-center mb-0 mt-4">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
                            </div>
                        </div>
                        <div class="text-center testi_boxes mx-auto">
                            <div class="tam_testi_icon text-custom">
                                <i class="mbri-quote-left"></i>
                            </div>
                            <div class="mt-2">
                                <div>
                                    <img src="http://theme.srbthemes.com/kerri/light/images/testi/testi-3.jpg" alt="" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                                </div>
                                <p class="client_review font-italic mt-4 text-center text-muted">" The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here."</p>
                                <p class="client_name text-center mb-0 mt-4">- Ebony verty, <span class="font-weight-bold">Envato</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT -->

    <!--START WORK -->
    <section class="section text-center" id="work">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up">
                        <h2>Our <span class="font-weight-bold">Works</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 ">
                <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter" data-aos="fade-up">
                    <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".seo">Seo</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".webdesign">Webdesign</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".WORK">WORK</a></li>
                    <li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4 work-filter">
                <div class="col-lg-4 work_item webdesign wordpress" data-aos="fade-up">
                    <a href="http://theme.srbthemes.com/kerri/light/images/works/1.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img src="http://theme.srbthemes.com/kerri/light/images/works/1.jpg" class="img-fluid mx-auto d-block rounded" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item WORK webdesign seo" data-aos="fade-up">
                    <a href="http://theme.srbthemes.com/kerri/light/images/works/2.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img src="http://theme.srbthemes.com/kerri/light/images/works/2.jpg" class="img-fluid mx-auto d-block rounded" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item seo wordpress" data-aos="fade-up">
                    <a href="http://theme.srbthemes.com/kerri/light/images/works/3.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img src="http://theme.srbthemes.com/kerri/light/images/works/3.jpg" class="img-fluid mx-auto d-block rounded" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item wordpress WORK webdesign" data-aos="fade-up">
                    <a href="http://theme.srbthemes.com/kerri/light/images/works/4.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img src="http://theme.srbthemes.com/kerri/light/images/works/4.jpg" class="img-fluid mx-auto d-block rounded" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item seo webdesign" data-aos="fade-up">
                    <a href="http://theme.srbthemes.com/kerri/light/images/works/5.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img src="http://theme.srbthemes.com/kerri/light/images/works/5.jpg" class="img-fluid mx-auto d-block rounded" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 work_item devlopment webdesign" data-aos="fade-up">
                    <a href="http://theme.srbthemes.com/kerri/light/images/works/6.jpg" class="img-zoom">
                        <div class="work_box">
                            <div class="work_img">
                                <img src="http://theme.srbthemes.com/kerri/light/images/works/6.jpg" class="img-fluid mx-auto d-block rounded" alt="work-img">
                            </div>
                            <div class="work_detail">
                                <p class="mb-2">Category</p>
                                <h4 class="mb-0">Project Title</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--END WORK -->

    <!-- START BLOG -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up">
                        <h2>Our <span class="font-weight-bold">Blog</span></h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mt-3">
                    <div class="rounded bg-white p-2" data-aos="fade-up">
                        <div class="img_blog">
                            <img src="http://theme.srbthemes.com/kerri/light/images/blog/blog-1.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                        </div>
                        <div class="content_blog pt-3 pb-3">
                            <div>
                                <h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">There are many variations</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="h6 text-muted date_blog mb-0">11 March 2018 <a href="#" class="text-custom font-weight-bold">By Kerri</a></p>
                                <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="rounded bg-white p-2" data-aos="fade-up">
                        <div class="img_blog">
                            <img src="http://theme.srbthemes.com/kerri/light/images/blog/blog-2.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                        </div>
                        <div class="content_blog pt-3 pb-3">
                            <div>
                                <h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">Contrary to popular belief</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="h6 text-muted date_blog mb-0">18 March 2018 <a href="#" class="text-custom font-weight-bold">By Kerri</a></p>
                                <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="rounded bg-white p-2" data-aos="fade-up">
                        <div class="img_blog">
                            <img src="http://theme.srbthemes.com/kerri/light/images/blog/blog-3.jpg" alt="" class="img-fluid rounded mx-auto d-block">
                        </div>
                        <div class="content_blog pt-3 pb-3">
                            <div>
                                <h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">Lorem Ipsum is not simply</a></h5>
                            </div>
                            <div class="mt-3">
                                <p class="h6 text-muted date_blog mb-0">22 March 2018 <a href="#" class="text-custom font-weight-bold">By Kerri</a></p>
                                <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>
                                <p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up">
                        <h2><span class="font-weight-bold">Contact</span> Us</h2>
                        <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center" data-aos="fade-up">
                        <div>
                            <i class="mbri-mobile2 text-custom h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title font-weight-bold">Call Us On</h5>
                            <p class="text-muted">+985 123 7856</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center" data-aos="fade-up">
                        <div>
                            <i class="mbri-letter text-custom h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title font-weight-bold">Email Us At</h5>
                            <p class="text-muted">Website.Kerri@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center" data-aos="fade-up">
                        <div>
                            <i class="mbri-pin text-custom h1"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 contact_detail-title font-weight-bold">Visit Office</h5>
                            <p class="text-muted">202, Grasselli Street , Conway.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="form-kerri">
                        <form>
                            <div class="row" data-aos="fade-up">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject" placeholder="Your Subject.." required=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up">
                                <div class="col-lg-12 text-right">
                                    <input type="submit" class="btn btn-custom" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!--START FOOTER-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-12">
                    <div class="text-center text-white footer-alt">
                        <ul class="list-unstyled list-inline mb-3">
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook text-muted"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin text-muted"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-pinterest text-muted"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter text-muted"></i></a></li>
                        </ul>
                        <p class="text-muted mb-0"> 2018 - 2020 &copy; Kerri. Design by SRBThemes.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->

    <!-- Style switcher -->
    <div id="color-switcher" style="left: 0px;">
        <div>
            <h3>Select your color</h3>
            <ul class="pattern">
                <li>
                    <a class="color1" href="#"></a>
                </li>
                <li>
                    <a class="color2" href="#"></a>
                </li>
                <li>
                    <a class="color3" href="#"></a>
                </li>
                <li>
                    <a class="color4" href="#"></a>
                </li>
                <li>
                    <a class="color5" href="#"></a>
                </li>
                <li>
                    <a class="color6" href="#"></a>
                </li>
            </ul>
        </div>
        <div class="bottom">
            <a href="#" class="settings rounded-right">
            <i class="mdi mdi-cog mdi-spin"></i>
            </a>
        </div>
    </div>
    <!-- end Style switcher -->

    <!-- Back To Top -->
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

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
    <!--CUSTOM JS-->
    <script src="{{ asset('assets/site/js/custom.js') }}"></script>
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

    </body>
</html>
