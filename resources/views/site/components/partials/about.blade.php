@foreach($about as $row)
<section class="section bg-light" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mt-3" data-aos="fade-up">
                    <img src="{{ asset('uploads/images/profile/'.$row->profile->image) }}" alt="" class="img-fluid mx-auto d-block img-thumbnail">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-3" data-aos="fade-up">
                    <h2><span class="font-weight-bold">About</span> Me</h2>
                    <h4 class="mt-4">Hello! <span class="text-custom font-weight-bold">I'M {{ $row->full_name }}</span></h4>
                    <p class="text-muted mt-4">{{ substr($row->profile->bio, 0, 74) }}</p>
                    <p class="text-muted mt-2">{{ substr($row->profile->bio, 75, 326) }}</p>
                    <p class="text-muted mt-2">{{ substr($row->profile->bio, 400, 596) }}</p>
                    <div>
                        <ul class="mb-0 about-social list-inline mt-4">
                            <li class="list-inline-item"><a target="_blank" href="https://www.github.com/sonjoyb7u"><i class="mdi mdi-github"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/sonjoy.john"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="www.linkedin.com/in/sonjoyb7u"><i class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.twitter.com/sonjoy_john"><i class="mdi mdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
