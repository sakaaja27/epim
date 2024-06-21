@extends('components.ComponentDashPeserta.main')
@section('Title', 'Edit Daftar Lomba')
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Edit Peserta</h3>
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
                        <form action="{{ route('Peserta.update',$user->id_user ) }}" class="is-alter form-validate" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="form_nama">Nama Peserta</label>
                                        <div class="form-control-wrap">
                                            <input type="text" value="{{ $user->name }}" class="form-control" id="form_nama" 
                                                name="nama_peserta" data-msg="Masukan Nama Anggota 1"
                                                placeholder="nama Anggota" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="form_email">Email Peserta</label>
                                        <div class="form-control-wrap">
                                            <input type="email" value="{{ $user->email }}" class="form-control" id="form_email" 
                                                name="email_peserta" data-msg="Masukan Email Anggota"
                                                placeholder="Email Anggota 1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Kartu Pelajar</label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file" name="kartu_pelajar"
                                                    class="form-file-input form-control" value="">
                                                <label class="form-file-label" for="customFile">Masukan File /
                                                    Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Foto Formal</label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file"  name="foto_formal"
                                                    class="form-file-input form-control" id="customFile" accept="image/*"
                                                    data-msg="Masukan Gambar">
                                                <label class="form-file-label" for="customFile">Masukan File /
                                                    Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Bukti Follow <a
                                                href="https://www.instagram.com/epim_polije/" target="_blank">IG
                                                EPIM_POLIJE</a></label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file"  name="bukti_follow_ig_epim"
                                                    class="form-file-input form-control" id="customFile" accept="image/*"
                                                    data-msg="Masukan Gambar">
                                                <label class="form-file-label" for="customFile">Masukan File /
                                                    Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Bukti Follow <a
                                                href=" https://www.instagram.com/hmjti_polije/" target="_blank">IG
                                                HMJTI_POLIJE</a></label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file"  name="bukti_follow_ig_hmjti"
                                                    class="form-file-input form-control" id="customFile" accept="image/*"
                                                    data-msg="Masukan Gambar">
                                                <label class="form-file-label" for="customFile">Masukan File /
                                                    Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Bukti Subscribe <a
                                                href="https://www.youtube.com/@hmjtipolije/" target="_blank">YT
                                                HMJTI_POLIJE</a></label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file"  name="bukti_subscribe_hmjti"
                                                    class="form-file-input form-control" id="customFile" accept="image/*"
                                                    data-msg="Masukan Gambar">
                                                <label class="form-file-label" for="customFile">Masukan File /
                                                    Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">Bukti Follow <a
                                                href="https://www.tiktok.com/@hmjti_polije" target="_blank">Tiktok
                                                HMJTI_POLIJE</a></label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file"  name="bukti_follow_tiktok_hmjti"
                                                    class="form-file-input form-control" id="customFile" accept="image/*"
                                                    data-msg="Masukan Gambar">
                                                <label class="form-file-label" for="customFile">Masukan File /
                                                    Gambar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end mt-4">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
