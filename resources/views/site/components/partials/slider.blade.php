@foreach($slider as $row)
<section class="section header-bg-img jarallax h-100vh" data-jarallax='{"speed": 0.4}' style="background-image: url({{ asset('uploads/images/slider/'.$row->image) }});">
    <div class="bg-overlay" id="home"></div>
    <div class="header-table">
        <div class="header-table-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-7 justify-content-center">
                        <div class="text-center header-content mx-auto" data-aos="fade-up">
                            <h4 class="text-white first-title mb-4">{{ $row->message }}</h4>
                            <h1 class="header-name text-white text-capitalize mb-0">I'M <span class="simple-text-rotate font-weight-bold">{{ $row->title }}</span></h1>
                            <p class="text-white mx-auto header-desc mt-4">{{ $row->sub_title }}</p>
                            <div class="mt-4 pt-2">
                                <a target="_blank" href="{{ $row->url }}" class="btn btn-outline-custom btn-round">Download Cv</a>
                            </div>
                        </div>
                    </div>
                    {{--                        <div class="col-md-4 col-lg-4"></div>--}}
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
@endforeach
