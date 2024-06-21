<section class="infoDaftar" id="infoDaftar">
    <div class="container">
        <div class="section-title text-center" data-aos="fade-up" data-aos-delay="150">
            <h2>Pendaftaran</h2>
            <p class="text-white">Pendaftaran Lomba</p>
        </div>
        <div class="swiper infoDaftar-swiper" data-aos="zoom-in">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col order-1 desc-lomba align-self-center">
                            <h3 class="text-white">Web Programming</h3>
                            <br>
                            <br>
                            <p class="text-white">
                                Front-end web programming adalah proses pengembangan antarmuka dari sebuah situs web
                                yang melibatkan desain dan pengkodean elemen-elemen antarmuka pengguna yang terlihat dan
                                berinteraksi dengan pengguna langsung. Front-end web programming fokus pada pembuatan
                                tampilan yang menarik, responsif, dan fungsional untuk situs web.
                            </p>
                            <br>
                            <div class="row">
                                <div class="col-lg-4"><a href="{{ asset('GUIDE BOOK EPIM 2023.pdf') }}"
                                        download="GuideBook EPIM 2023">
                                        <button class="btn btn-guidebook">Guidebook <i
                                                class="fas fa-download ms-2"></i></button></a></div>
                                <div class="col-lg">
                                    @if (Auth::check())
                                        <button class="btn btn-register" data-bs-toggle="modal"
                                            data-bs-target="#modalDaftarWebpro">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    @else
                                        <a class="btn btn-register" href="{{ route('Login') }}">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col order-md-1 img-lomba">
                            <img class="img" src="{{ asset('img') }}/webpro.webp" alt="img-lomba">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col order-1 desc-lomba align-self-center">
                            <h3 class="text-white">Design Packaging</h3>
                            <br><br>
                            <p class="text-white">
                                Desain kemasan (packaging design) merujuk pada proses merancang tampilan visual dan
                                struktur fisik suatu kemasan produk. Desain kemasan sangat penting dalam mempengaruhi
                                persepsi konsumen, menarik perhatian mereka, dan membedakan produk dari pesaing di rak
                                toko
                            </p>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="{{ asset('GUIDE BOOK EPIM 2023.pdf') }}"
                                        download="GuideBook EPIM 2023"><button class="btn btn-guidebook"
                                            id="btn-guidebook">Guidebook <i
                                                class="fas fa-download ms-2"></i></button></a>
                                </div>
                                <div class="col-lg">
                                    @if (Auth::check())
                                        <button class="btn btn-register" data-bs-toggle="modal"
                                            data-bs-target="#modalDaftarDespac">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    @else
                                        <a class="btn btn-register" href="{{ route('Login') }}">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col order-md-1 img-lomba">
                            <img class="img" src="{{ asset('img') }}/despac.webp" alt="img-lomba">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col order-1 desc-lomba align-self-center">
                            <h3 class="text-white">Design Poster</h3>
                            <br><br>
                            <p class="text-white">
                                Lomba Design Poster merupakan perlombaan atau kompetisi mendesain poster dengan tema
                                Artificial Intelligence (AI) yang dilaksanakan sebagai wadah siswa siswi SMA/SMK/MA
                                sederajat untuk menyalurkan bakatnya dalam desain. Kegiatan ini diselenggarakan oleh
                                Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJTI) Politeknik Negeri Jember, dimana
                                kegiatan ini merupakan salah satu kegiatan dalam serangkaian acara EPIM. Perlombaan ini
                                dilaksanakan dengan 1 tahap yaitu seleksi secara online.

                            </p>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="{{ asset('GUIDE BOOK EPIM 2023.pdf') }}"
                                        download="GuideBook EPIM 2023"><button class="btn btn-guidebook"
                                            id="btn-guidebook">Guidebook <i
                                                class="fas fa-download ms-2"></i></button></a>
                                </div>
                                <div class="col-lg">
                                    @if (Auth::check())
                                        <button class="btn btn-register" data-bs-toggle="modal"
                                            data-bs-target="#modalDaftarDespac">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    @else
                                        <a class="btn btn-register" href="{{ route('Login') }}">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col order-md-1 img-lomba">
                            <img class="img" src="{{ asset('img') }}/poster_ai.png" alt="img-lomba">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col order-1 desc-lomba align-self-center">
                            <h3 class="text-white">Videography</h3>
                            <br><br>
                            <p class="text-white">
                                Lomba Videography merupakan perlombaan atau kompetisi pembuatan video singkat dengan durasi minimal 1 menit dan maksimal 3 menit dengan tema Bisnis Digital yang dilaksanakan sebagai wadah siswa siswi SMA/SMK/MA sederajat untuk menyalurkan bakatnya dalam bidang videografi. Kegiatan ini diselenggarakan oleh Himpunan Mahasiswa Jurusan Teknologi Informasi (HMJTI) Politeknik Negeri Jember, dimana kegiatan ini merupakan salah satu kegiatan dalam serangkaian acara EPIM. Perlombaan ini dilaksanakan dengan 1 tahap yaitu seleksi secara online.
                            </p>
                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="{{ asset('GUIDE BOOK EPIM 2023.pdf') }}"
                                        download="GuideBook EPIM 2023"><button class="btn btn-guidebook"
                                            id="btn-guidebook">Guidebook <i
                                                class="fas fa-download ms-2"></i></button></a>
                                </div>
                                <div class="col-lg">
                                    @if (Auth::check())
                                        <button class="btn btn-register" data-bs-toggle="modal"
                                            data-bs-target="#modalDaftarDespac">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    @else
                                        <a class="btn btn-register" href="{{ route('Login') }}">Daftar Sekarang <i
                                                class="fas fa-arrow-right ms-2"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="col order-md-1 img-lomba">
                            <img class="img" src="{{ asset('img') }}/videografi.jpeg" alt="img-lomba">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!-- Modal Pendaftaran -->
    <div class="modal fade" id="modalDaftarWebpro">
        <div class="modal-dialog  modal-lg
                    modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Pendaftaran Lomba</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="modal-lomba p-0 m-0">
                        <img class="img-fluid" src="{{ asset('img') }}/modal_webpro.webp" alt=""
                            class="modalImg">
                        <span class="modalDesc text-center">Web Programming</span>
                    </div>

                    <div class="p-3">
                        <form class="row g-3" action="/" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="lomba" value="webpro">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nama Ketua</label>
                                <input name="nama" type="text" class="form-control" required>
                            </div>
                            {{-- <div class="col-md-6">
                                <label class="form-label">Nama Anggota  1 </label>
                                <input name="nama" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nama Anggota  2 </label>
                                <input name="nama" type="text" class="form-control" required>
                            </div> --}}
                            <div class="col-md-6">
                                <label class="form-label">Asal Sekolah</label>
                                <input name="asalSekolah" type="text" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">No. Hp / WA</label>
                                <input name="nope" type="number" class="form-control" oninput="limitnope(this)"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Kartu Pelajar (Surat aktif siswa,dijadikan 1 file) <span
                                        style="color: red"> *pdf</span></label>
                                <input name="kartuPelajar" type="file" accept=".pdf"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Upload Proposal Karya (Format : EPIM2023_Asal Sekolah_Nama
                                    Peserta) <span style="color: red"> *pdf</span></label>
                                <input name="proposal" type="file" accept=".pdf" onchange="validationFile(this)"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Foto Formal</label>
                                <input name="fotoFormal" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Follow <a
                                        href="https://www.instagram.com/epim_polije/" target="_blank">IG
                                        EPIM_POLIJE</a></label>
                                <input name="followIgEpim" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Follow <a
                                        href=" https://www.instagram.com/hmjti_polije/" target="_blank">IG
                                        HMJTI_POLIJE</a></label>
                                <input name="followIgHmjti" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Subscribe <a
                                        href="https://www.youtube.com/@hmjtipolije/" target="_blank">YT
                                        HMJTI_POLIJE</a></label>
                                <input name="subscribe" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Follow <a href="https://www.tiktok.com/@hmjti_polije"
                                        target="_blank">Tiktok HMJTI_POLIJE</a></label>
                                <input name="followTiktok" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="">Next</button>
                    {{-- <button type="submit" class="btn btn-primary" onclick="confirmation(event)">Daftar</button> --}}
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDaftarDespac">
        <div class="modal-dialog  modal-lg
                    modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Pendaftaran Lomba</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="modal-lomba p-0 m-0">
                        <img class="img-fluid" src="{{ asset('img') }}/modal_despac.webp" alt=""
                            class="modalImg">
                        <span class="modalDesc text-center">Design Packaging</span>
                    </div>

                    <div class="p-3">
                        <form class="row g-3" action="/" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="lomba" value="despac">
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Asal Sekolah</label>
                                <input name="asalSekolah" type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">No. Hp / WA</label>
                                <input name="nope" type="number" class="form-control" oninput="limitnope(this)"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Kartu Pelajar (Surat aktif siswa) <span style="color: red">
                                        *pdf</span></label>
                                <input name="kartuPelajar" type="file" accept=".pdf"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Foto Formal</label>
                                <input name="fotoFormal" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Follow <a
                                        href="https://www.instagram.com/epim_polije/" target="_blank">IG
                                        EPIM_POLIJE</a></label>
                                <input name="followIgEpim" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Follow <a
                                        href=" https://www.instagram.com/hmjti_polije/" onchange="validationFile()"
                                        target="_blank">IG
                                        HMJTI_POLIJE</a></label>
                                <input name="followIgHmjti" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Subscribe <a
                                        href="https://www.youtube.com/@hmjtipolije/" target="_blank">YT
                                        HMJTI_POLIJE</a></label>
                                <input name="subscribe" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Bukti Follow <a href="https://www.tiktok.com/@hmjti_polije"
                                        target="_blank">Tiktok
                                        HMJTI_POLIJE</a></label>
                                <input name="followTiktok" type="file" accept="image/*"
                                    onchange="validationFile(this)" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Upload Proposal Karya (Format : EPIM2023_Asal Sekolah_Nama
                                    Peserta) <span style="color: red"> *pdf</span></label>
                                <input name="proposal" type="file" accept=".pdf" onchange="validationFile(this)"
                                    required>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="confirmation(event)">Daftar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal pendaftaran ditutup -->
    <div class="modal fade" id="modalTutup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pendaftaran Telah Ditutup</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Mohon maaf pendaftaran EPIM 2023 telah kami tutup <br>Terima Kasih atas antusiasnya :)</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</section>
