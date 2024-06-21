<section class="gallery" id="gallery">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-delay="150">
            <h2>Gallery</h2>
            <p>Gallery Lomba</p>
        </div>
        <div class="swiper gallery-swiper" data-aos="zoom-in">
            <div class="swiper-wrapper">
                @foreach ($dataDokumentasi as $data)
                    <div class="swiper-slide"><img class="gallery-lightbox" height="358"
                            src="{{ asset('img/dokumentasi') }}/{{ $data->link }}" alt=""></div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
