@section('title', 'ALL PROJECTS || MY PROFILE')

<section class="section text-center" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center" data-aos="fade-up">
                    <h2>My <span class="font-weight-bold">Projects</span></h2>
                    <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 ">
            <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="menu-filter" data-aos="fade-up">
                <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                @foreach($categories as $category)
                <li class="list-inline-item">
                    <a href="{{ route('site.project', $category->slug) }}" name="cat-wise-projects" class="" id="cat-wise-post" data-id="{{ $category->slug }}"  data-filter=".project">
                        {{ $category->name }}
                    </a>

                </li>
                @endforeach
{{--                <li class="list-inline-item"><a class="" data-filter=".webdesign">UI/UX</a></li>--}}
{{--                <li class="list-inline-item"><a class="" data-filter=".work">Web Development</a></li>--}}
{{--                <li class="list-inline-item"><a class="" data-filter=".wordpress">IT</a></li>--}}
            </ul>
        </div>
    </div>
        <div class="container">
            <div class="row mt-4 work-filter">
                @if( route('site.index') )
{{--                    @includeIf('site.components.partials.all-projects')--}}
                    @foreach($projects as $project)
                        <div class="col-lg-4 mt-3 project" data-aos="fade-up">
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
{{--                @elseif( route('site.project', $category->id) )--}}
{{--                    @includeIf('site.components.partials.cat-wise-projects')--}}
                @endif
            </div>
        </div>



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

{{--            <div class="col-lg-4 work_item wordpress work webdesign" data-aos="fade-up">--}}
{{--                <a href="{{ asset('assets/site/images/client/work/4.jpg') }}" class="img-zoom">--}}
{{--                    <div class="work_box">--}}
{{--                        <div class="work_img">--}}
{{--                            <img src="{{ asset('assets/site/images/work/4.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">--}}
{{--                        </div>--}}
{{--                        <div class="work_detail">--}}
{{--                            <p class="mb-2">Category</p>--}}
{{--                            <h4 class="mb-0">Project Title</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 work_item psd webdesign" data-aos="fade-up">--}}
{{--                <a href="{{ asset('assets/site/images/client/work/5.jpg') }}" class="img-zoom">--}}
{{--                    <div class="work_box">--}}
{{--                        <div class="work_img">--}}
{{--                            <img src="{{ asset('assets/site/images/work/5.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">--}}
{{--                        </div>--}}
{{--                        <div class="work_detail">--}}
{{--                            <p class="mb-2">Category</p>--}}
{{--                            <h4 class="mb-0">Project Title</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 work_item devlopment webdesign" data-aos="fade-up">--}}
{{--                <a href="{{ asset('assets/site/images/work/6.jpg') }}" class="img-zoom">--}}
{{--                    <div class="work_box">--}}
{{--                        <div class="work_img">--}}
{{--                            <img src="{{ asset('assets/site/images/work/6.jpg') }}" class="img-fluid mx-auto d-block rounded" alt="work-img">--}}
{{--                        </div>--}}
{{--                        <div class="work_detail">--}}
{{--                            <p class="mb-2">Category</p>--}}
{{--                            <h4 class="mb-0">Project Title</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}


</section>
