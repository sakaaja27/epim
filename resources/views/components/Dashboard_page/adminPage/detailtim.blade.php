@extends('components.Dashboard_component.main')
@section('Title', 'Edit Daftar Lomba')
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Detail Peserta</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <a type="button" class="btn btn-primary" onclick="history.back()"><em
                            class="icon ni ni-back-ios"></em><span>Kembali
                        </span></a>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card">
                <div class="card-inner-group">
                    <div class="card-inner">
                        {{-- <div class="modal-lomba p-0 m-0">
                            <img class="img-fluid" src="{{ asset('img') }}/modal_webpro.webp" alt=""
                                class="modalImg">
                            <span class="modalDesc text-center">Web Programming</span>
                        </div> --}}
                        <div class="card">
                            <div class="card-body">
                                <h6>Nama Peserta : {{ $user->name }}</h6>
                                <h6>Email Peserta : {{ $user->email }}</h6>
                                <h6>Asal Sekolah : {{ $user->asal_sekolah }}</h6>
                                <h6>Tim : {{ $user->Nama_tim }}</h6>
                               
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3>Dokumen Peserta</h4>
                                <div class="row mt-3">
                                    <div class="col-md-4 col-sm-6 col-12 mb-3">
                                        <div class="shadow" style="width: 250px; height: 450px;">
                                            <a class="gallery-image popup-image" href="{{ url('storage/data_pendaftar/' . $user->kartu_pelajar) }}">
                                                <img class="w-100 img-container rounded-top" src="{{ url('storage/data_pendaftar/' . $user->kartu_pelajar) }}" alt="">
                                            </a>
                                            <div class="gallery-body card-inner text-center">
                                                <h4>Kartu Pelajar</h4>
                                                @php
                                                    $fileExtension = pathinfo($user->kartu_pelajar, PATHINFO_EXTENSION);
                                                @endphp
                                                @if($fileExtension == 'pdf')
                                                    <a href="{{ url('/storage/data_pendaftar/'. $user->kartu_pelajar) }}" target="_blank">
                                                        <button class="btn btn-primary">Lihat PDF</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-3">
                                        <div class="shadow" style="width: 250px; height: 450px;">
                                            <a class="gallery-image popup-image" href="{{ url('storage/data_pendaftar/' . $user->foto_formal) }}">
                                                <img class="w-100 img-container rounded-top" src="{{ url('storage/data_pendaftar/' . $user->foto_formal) }}" alt="">
                                            </a>
                                            <div class="gallery-body card-inner text-center">
                                                <h4>Foto Formal</h4>
                                                @php
                                                    $fileExtension = pathinfo($user->foto_formal, PATHINFO_EXTENSION);
                                                @endphp
                                                @if($fileExtension == 'pdf')
                                                    <a href="{{ url('/storage/data_pendaftar/'. $user->foto_formal) }}" target="_blank">
                                                        <button class="btn btn-primary">Lihat PDF</button>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-3">
                                        <div class="shadow" style="width: 250px; height: 450px;">
                                            <a class="gallery-image popup-image" href="{{ url('storage/data_pendaftar/' . $user->follow_ig_hmj) }}">
                                                <img class="w-100 img-container rounded-top" src="{{ url('storage/data_pendaftar/' . $user->follow_ig_hmj) }}" alt="">
                                            </a>
                                            <div class="gallery-body card-inner text-center">
                                                <h4>Foto Follow IG HMJTI</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-3">
                                        <div class="shadow" style="width: 250px; height: 450px;">
                                            <a class="gallery-image popup-image" href="{{ url('storage/data_pendaftar/' . $user->follow_ig_epim) }}">
                                                <img class="w-100 img-container rounded-top" src="{{ url('storage/data_pendaftar/' . $user->follow_ig_epim) }}" alt="">
                                            </a>
                                            <div class="gallery-body card-inner text-center">
                                                <h4>Foto Follow IG EPIM</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-3">
                                        <div class="shadow" style="width: 250px; height: 450px;">
                                            <a class="gallery-image popup-image" href="{{ url('storage/data_pendaftar/' . $user->follow_tiktok) }}">
                                                <img class="w-100 img-container rounded-top" src="{{ url('storage/data_pendaftar/' . $user->follow_tiktok) }}" alt="">
                                            </a>
                                            <div class="gallery-body card-inner text-center">
                                                <h4>Foto TIKTOK HMJTI</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-3">
                                        <div class="shadow" style="width: 250px; height: 450px;">
                                            <a class="gallery-image popup-image" href="{{ url('storage/data_pendaftar/' . $user->subscribe) }}">
                                                <img class="w-100 img-container rounded-top" src="{{ url('storage/data_pendaftar/' . $user->subscribe) }}" alt="">
                                            </a>
                                            <div class="gallery-body card-inner text-center">
                                                <h4>Foto Subscribe HMJTI</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
