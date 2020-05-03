@extends('site.components.layout')

@section('title', 'CAT-WISE PROJECT || MY PROFILE')

@section('slider')
    @includeIf('site.components.partials.slider')
@endsection

@section('about')
    @includeIf('site.components.partials.about')
@endsection

@section('skill')
    @includeIf('site.components.partials.skill')
@endsection

@section('service')
    @includeIf('site.components.partials.service')
@endsection

@section('hire')
    @includeIf('site.components.partials.hire')
@endsection

@section('client')
    @includeIf('site.components.partials.client')
@endsection

@section('cat-wise-project')
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
                @foreach($cat_projects as $project)
                    <div id="project-content" class="col-lg-4 mt-3 project" data-aos="fade-up">
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
            </div>
        </div>
    </section>
@endsection


@section('blog')
    @includeIf('site.components.partials.blog')
@endsection

@section('contact')
    @includeIf('site.components.partials.contact')
@endsection


