@extends('components.Dashboard_component.main')
@section('Title', 'dashboard')
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Settings</h3>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block nk-block-lg">
            <div class="card">
                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em
                                class="icon ni ni-laptop"></em><span>Web store settings</span></a>
                    </li>
                    {{-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem8"><em class="icon ni ni-color-palette-fill"></em><span>Theme setting </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem9"><em class="icon ni ni-mail-fill"></em><span>Email settings </span>
                    </a>
                </li> --}}
                </ul>
                <div class="card-inner">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabItem5">
                            <h4 class="title nk-block-title">Web setting</h4>
                            <p>Here is your basic store setting of your website.</p>
                            <div class="row g-3 align-center">
                                <form action="{{ route('Pengaturan.store') }}" method="POST">
                                    @csrf
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="site-off">Tutup Pendaftaran Web dan Package </label>
                                            <span class="form-note">Aktifkan Maka Akan Menutup Pendaftaran dan Upload Proposal Web dan Design Package</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch ">
                                                <input type="checkbox"
                                                    {{ $data->status_pendaftaran_ditutup == 1 ? 'checked' : '' }}
                                                    onclick="submit()" class="custom-control-input" name="tutup_pendaftaran"
                                                    id="site-off">
                                                <label class="custom-control-label" for="site-off">Offline</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 mt-2">
                                        <div class="form-group">
                                            <label class="form-label" for="site-off1">Tutup Pendaftaran Poster dan Videography</label>
                                            <span class="form-note">Aktifkan Maka Akan Menutup Pendaftaran dan Upload Link Poster dan Video</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 ">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch ">
                                                <input type="checkbox"
                                                    {{ $data->status_upload_postervideo_ditutup == 1 ? 'checked' : '' }}
                                                    onclick="submit()" class="custom-control-input"
                                                    name="status_upload_postervideo_ditutup" id="site-off1">
                                                <label class="custom-control-label" for="site-off1">Offline</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!--tab pan -->
                    </div>
                </div>
            </div><!--card inner-->
        </div><!--card-->
    </div><!--nk-block-->
    </div>
@endsection
