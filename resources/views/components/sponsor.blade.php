<section class="sponsor" id="sponsor">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-delay="150">
            <h2 class="text-black">Sponsor</h2>
            <p>Sponsor Kami</p>
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-center">
            {{-- @foreach ($dataSponsor->slice(0, 3) as $data)
                <img class="p-4" height="150" src="{{ asset('img/sponsor') }}/{{ $data->link }}" alt=""
                    data-aos="zoom-in" data-aos-delay="100">
            @endforeach --}}
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-center">
            {{-- @foreach ($dataSponsor->slice(3, 7) as $data)
                <img class="p-4" height="150" src="{{ asset('img/sponsor') }}/{{ $data->link }}" alt=""
                    data-aos="zoom-in" data-aos-delay="100">
            @endforeach --}}
        </div>
        {{-- <div class="swiper sponsor-swiper" data-aos="zoom-in">
            <div class="swiper-wrapper">
                @foreach ($dataSponsor as $data)
                    <div class="swiper-slide"><img height="150" src="{{ asset('img/sponsor') }}/{{ $data->link }}"
                            alt=""></div>
                @endforeach
            </div>
        </div> --}}
    </div>
</section>
