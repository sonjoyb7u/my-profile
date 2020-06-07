<section class="section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center" data-aos="fade-up">
                    <h2><span class="font-weight-bold">Get In</span> Touch</h2>
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
                        <h5 class="mb-0 contact_detail-title font-weight-bold">Call Me On</h5>
                        @foreach($about as $row)
                        <p class="text-muted">{{ $row->profile->phone }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center" data-aos="fade-up">
                    <div>
                        <i class="mbri-letter text-custom h1"></i>
                    </div>
                    <div class="mt-3">
                        <h5 class="mb-0 contact_detail-title font-weight-bold">Email Me At</h5>
                        <p class="text-muted">{{ $row->email }}</p>
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
                        <p class="text-muted">{{ $row->profile->address }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="form-kerri">
                    <form action="{{ route('site.contact.store') }}" method="POST">
                        @csrf

                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" class="@error('name') is-invalid @enderror" />
                                    @error('name')
                                    <p style="color: #e3342f;">{{ $message . ' *' }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-2">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" class="@error('email') is-invalid @enderror" />
                                    @error('email')
                                    <p style="color: #e3342f;">{{ $message . ' *' }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <input type="text" name="subject" id="subject" class="form-control" id="subject" placeholder="Your Subject*" class="@error('subject') is-invalid @enderror" />
                                    @error('subject')
                                    <p style="color: #e3342f;">{{ $message . ' *' }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <input type="text" name="address" id="address" class="form-control" id="address" placeholder="Your Address*" class="@error('address') is-invalid @enderror" />
                                    @error('address')
                                    <p style="color: #e3342f;">{{ $message . ' *' }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-12">
                                <div class="form-group mt-2">
                                    <textarea name="message" id="message" rows="4" class="form-control" placeholder="Your message..." class="@error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                    <p style="color: #e3342f;">{{ $message . ' *' }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn btn-custom">Send Message</button>
{{--                                <input type="submit" class="btn btn-custom" value="Send Message">--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
