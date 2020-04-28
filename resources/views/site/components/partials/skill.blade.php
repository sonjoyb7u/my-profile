
<section class="section skill-section" id="skill">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center" data-aos="fade-up">
                <h2>I Got <span class="font-weight-bold">Skills</span></h2>
                <p class="text-muted mx-auto section-subtitle mt-3">I Specialize In Building Web Design & Development & IT System Support</p>
            </div>
        </div>
        <div class="row align-items-center" data-aos="fade-up">
            @foreach($skills as $row)
            <div class="col span_1_of_4 box">
                <svg class="radial-progress {{ $row->skill_color_code }}" data-percentage="{{ $row->skill_percent }}" viewBox="0 0 80 80">
                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                    <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">{{ $row->skill_percent }} %</text>
                </svg>
                <h3>{{ $row->skill_name }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>
