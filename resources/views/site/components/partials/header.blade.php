
<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
    <div class="container">

        <a class="navbar-brand pt-0 logo" href="{{ route('site.index') }}">
            <img src="{{ asset('assets/site/images/logo/logo2.png') }}" alt="" class="img-fluid logo-light">
            <img src="{{ asset('assets/site/images/logo/logo2.png') }}" alt="" class="img-fluid logo-dark">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mdi mdi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Service's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#client">Client's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Project's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Hire Me</a>
                </li>
            </ul>
        </div>
{{--        <div class="hire-me">--}}
{{--            <a href="#hire" class="btn btn-outline-custom btn-round btn-hire">Hire Me</a>--}}
{{--        </div>--}}
    </div>
</nav>
