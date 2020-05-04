
<section class="section text-center" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>My <span class="font-weight-bold">Projects</span></h2>
                    <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 ">
            <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter">
                <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                @foreach($categories as $category)
                <li class="list-inline-item">
                    <a data-filter=".{{ $category->slug }}">
                        {{ $category->name }}
                    </a>

                </li>
                @endforeach
{{--                <li class="list-inline-item"><a class="" data-filter=".webdesign">UI/UX</a></li>--}}
            </ul>
        </div>
    </div>
        <div class="container">
            <div class="row mt-4 work-filter">
                    @foreach($projects as $project)
                        <div class="col-lg-4 mt-3 work_item {{ $project->category->slug }}">
                            <a href="{{ asset('uploads/images/project/'.$project->image) }}" class="img-zoom">
                                <div class="work_box">
                                    <div class="work_img">
                                        <img src="{{ asset('uploads/images/project/'.$project->image) }}" class="img-fluid mx-auto d-block rounded" alt="work-img">
                                    </div>
                                    <div class="work_detail">
                                        <p class="mb-2">{{ $project->category->name }}</p>
                                        <h4 class="mb-0">{{ $project->name }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

{{--            <div class="col-lg-4 work_item psd wordpress" data-aos="fade-up">--}}
{{--                <a href="{{ asset('assets/site/images/work/3.jpg') }}" class="img-zoom">--}}
{{--                    <div class="work_box">--}}
{{--                        <div class="work_img">--}}
{{--                            <img src="{{ asset('assets/site/images/work/3.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">--}}
{{--                        </div>--}}
{{--                        <div class="work_detail">--}}
{{--                            <p class="mb-2">Category</p>--}}
{{--                            <h4 class="mb-0">Project Title</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

            </div>
        </div>

</section>
