<section class="section bg-light" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center" data-aos="fade-up">
                    <h2>My <span class="font-weight-bold">My Blog</span></h2>
                    <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($blog_posts as $post)
            <div class="col-lg-4 mt-3">
                <div class="rounded bg-white p-2" data-aos="fade-up">
                    <div class="img_blog">
                        <img src="{{ asset('uploads/images/blog-post/' . $post->image) }}" alt="" class="img-fluid rounded mx-auto d-block">
                    </div>
                    <div class="content_blog pt-3 pb-3">
                        <div>
                            <h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">{{ $post->title }}</a></h5>
                        </div>
                        <div class="mt-3">
                            <p class="h6 text-muted date_blog mb-0">{{ date('d M Y', strtotime($post->created_at)) }}&nbsp;&nbsp;<a href="#" class="text-custom font-weight-bold">By {{ $post->user->full_name }}</a></p>
                            <p class="mt-3 desc_blog text-muted">{{ $post->desc }}</p>
                            <p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
{{--            <div class="col-lg-4 mt-3">--}}
{{--                <div class="rounded bg-white p-2" data-aos="fade-up">--}}
{{--                    <div class="img_blog">--}}
{{--                        <img src="{{ asset('assets/site/images/blog/blog-2.jpg') }}" alt="" class="img-fluid rounded mx-auto d-block">--}}
{{--                    </div>--}}
{{--                    <div class="content_blog pt-3 pb-3">--}}
{{--                        <div>--}}
{{--                            <h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">Contrary to popular belief</a></h5>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3">--}}
{{--                            <p class="h6 text-muted date_blog mb-0">28 March 2019 <a href="#" class="text-custom font-weight-bold">By Client-2</a></p>--}}
{{--                            <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>--}}
{{--                            <p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 mt-3">--}}
{{--                <div class="rounded bg-white p-2" data-aos="fade-up">--}}
{{--                    <div class="img_blog">--}}
{{--                        <img src="{{ asset('assets/site/images/blog/blog-3.jpg') }}" alt="" class="img-fluid rounded mx-auto d-block">--}}
{{--                    </div>--}}
{{--                    <div class="content_blog pt-3 pb-3">--}}
{{--                        <div>--}}
{{--                            <h5 class="font-weight-bold mb-0"><a href="#" class="text-dark">Lorem Ipsum is not simply</a></h5>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3">--}}
{{--                            <p class="h6 text-muted date_blog mb-0">15 February 2020 <a href="#" class="text-custom font-weight-bold">By Client-3</a></p>--}}
{{--                            <p class="mt-3 desc_blog text-muted">Sit sagittis vulputate laoreet sodales tortor nulla lobortis bibendum netus primis fames. Lobortis ultricies.</p>--}}
{{--                            <p class="h6 mb-0"><a href="#" class="text-muted font-weight-bold">Read More...</a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
        <div class="d-flex justify-content-center blog-post-nav">
            {{ $blog_posts->links() }}
        </div>
    </div>
</section>
