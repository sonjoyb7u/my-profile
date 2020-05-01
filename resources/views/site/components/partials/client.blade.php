<section class="section bg-light" id="client">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center" data-aos="fade-up">
                    <h2>My <span class="font-weight-bold">My Client's</span></h2>
                    <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4 pt-4">
            <div class="col-lg-12">
                <div id="owl-demo" class="owl-carousel" data-aos="fade-up">
                    @foreach($clients as $client)
                    <div class="text-center testi_boxes mx-auto">
                        <div class="tam_testi_icon text-custom">
                            <i class="mbri-quote-left"></i>
                        </div>
                        <div class="mt-2">
                            <div>
                                <img style="width: 15%; height: 115px;" src="{{ asset('uploads/images/client/' . $client->image) }}" alt="" class="mx-auto img-thumbnail img-fluid d-block rounded-circle">
                            </div>
                            <p class="client_review font-italic mt-4 text-center text-muted">" {{ $client->comment }}"</p>
                            <p class="client_name text-center mb-0 mt-4">- {{ $client->name }}, <span class="font-weight-bold">Envato Market</span></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
