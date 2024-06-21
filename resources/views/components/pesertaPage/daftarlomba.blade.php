@extends('components.ComponentDashPeserta.main')
@section('Title', 'Daftar Lomba')
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Daftar Lomba</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    @if (
                        \App\Models\Pendaftar::where('id_user', Auth::user()->id_user)->count() < 1 &&
                            $pengaturan->status_pendaftaran_ditutup != 1)
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#test"><em
                                class="icon ni ni-plus"></em><span>Daftar
                                Lomba</span></button>
                    @elseif(
                        \App\Models\Pendaftar::where('id_user', Auth::user()->id_user)->count() < 1 &&
                            $pengaturan->status_upload_postervideo_ditutup != 1)
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#test"><em
                                class="icon ni ni-plus"></em><span>Daftar
                                Lomba</span></button>
                    @endif
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <table class="datatable-init table table-bordered" style="font-size: 12px" data-searching="false"
                            data-length-change="false">
                            @if ($pengaturan->status_pendaftaran_ditutup == 1)
                                @if (!empty($datas[0]))
                                    @if ($datas[0]->id_lomba == 1)
                                        Upload Proposal Sudah Ditutup
                                    @elseif($datas[0]->id_lomba == 2)
                                        Upload Proposal Sudah Ditutup
                                    @endif
                                @endif
                            @endif
                            @if ($pengaturan->status_upload_postervideo_ditutup == 1)
                                @if (!empty($datas[0]))
                                    @if ($datas[0]->id_lomba == 3)
                                        Upload Video Sudah Ditutup
                                    @elseif($datas[0]->id_lomba == 4)
                                        Upload Poster Sudah Ditutup
                                    @endif
                                @endif
                            @endif
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bidang Lomba</th>
                                    <th>Nama Tim</th>
                                    {{-- <th>Nama Guru Pembimbing</th> --}}
                                    {{-- <th>Asal Sekolah</th> --}}
                                    <th>Nama Ketua</th>
                                    <th>
                                        @if (!empty($datas[0]))
                                            @if ($datas[0]->id_lomba == 3)
                                                Upload Video
                                            @elseif($datas[0]->id_lomba == 4)
                                                Upload Poster
                                            @else
                                                Upload Proposal
                                            @endif
                                        @endif
                                    </th>
                                    <th>
                                        @if (!empty($datas[0]))
                                            @if ($datas[0]->id_lomba == 3)
                                                Download Video
                                            @elseif($datas[0]->id_lomba == 4)
                                                Download Poster
                                            @else
                                                Download Proposal
                                            @endif
                                        @endif
                                    </th>
                                    {{-- <th>Dirubah Jam</th> --}}
                                    <th>Action</th>
                                    {{-- @dd() --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_lomba }}</td>
                                        <td>{{ $data->nama_tim }}</td>
                                        {{-- <td>{{ $data->guru_pembimbing }}</td> --}}
                                        {{-- <td>{{ $data->asal_sekolah }}</td> --}}
                                        <td>{{ $data->nama_ketua }}</td>
                                        <td>
                                            @if ($pengaturan->status_pendaftaran_ditutup == 1)
                                                @if (!empty($datas[0]))
                                                    @if ($datas[0]->id_lomba == 1)
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="alert('Upload Proposal sudah ditutup')">
                                                            <em class="icon ni ni-upload-cloud"></em>
                                                        </button>
                                                    @elseif($datas[0]->id_lomba == 2)
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="alert('Upload Proposal sudah ditutup')">
                                                            <em class="icon ni ni-upload-cloud"></em>
                                                        </button>
                                                    @else
                                                        @if ($pengaturan->status_upload_postervideo_ditutup != 1)
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#uploadproposal" class="btn btn-danger">
                                                                <em class="icon ni ni-upload-cloud"></em>
                                                            </button>
                                                        @endif
                                                    @endif
                                                @else
                                                    @if ($pengaturan->status_upload_postervideo_ditutup != 1)
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#uploadproposal" class="btn btn-danger">
                                                            <em class="icon ni ni-upload-cloud"></em>
                                                        </button>
                                                    @endif
                                                @endif
                                            @endif

                                            @if ($pengaturan->status_upload_postervideo_ditutup == 1)
                                                @if (!empty($datas[0]))
                                                    @if ($datas[0]->id_lomba == 3)
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="alert('Upload video sudah ditutup')">
                                                            <em class="icon ni ni-upload-cloud"></em>
                                                        </button>
                                                    @elseif($datas[0]->id_lomba == 4)
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="alert('Upload poster sudah ditutup')">
                                                            <em class="icon ni ni-upload-cloud"></em>
                                                        </button>
                                                    @else
                                                        @if ($pengaturan->status_pendaftaran_ditutup != 1)
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#uploadproposal" class="btn btn-danger">
                                                                <em class="icon ni ni-upload-cloud"></em>
                                                            </button>
                                                        @endif
                                                    @endif
                                                @else
                                                    @if ($pengaturan->status_pendaftaran_ditutup != 1)
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#uploadproposal" class="btn btn-danger">
                                                            <em class="icon ni ni-upload-cloud"></em>
                                                        </button>
                                                    @endif
                                                @endif
                                            @endif

                                            @if (!($pengaturan->status_pendaftaran_ditutup == 1 || $pengaturan->status_upload_postervideo_ditutup == 1))
                                                @if (!empty($datas[0]))
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#uploadproposal" class="btn btn-danger">
                                                        <em class="icon ni ni-upload-cloud"></em>
                                                    </button>
                                                @else
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#uploadproposal" class="btn btn-danger">
                                                        <em class="icon ni ni-upload-cloud"></em>
                                                    </button>
                                                @endif
                                            @endif
                                        </td>
                                        @if ($data->proposal != null)
                                            @if ($data->id_lomba == 3 || $data->id_lomba == 4)
                                                <td><a href="{{ $data->proposal }}" target="_blank"
                                                        class="btn btn-danger"><em class="icon ni ni-download"></em><em
                                                            class="icon ni ni-file-pdf"></em></a></td>
                                            @else
                                                <td><a href="{{ route('proposal.download', $data->proposal) }}"
                                                        target="_blank" class="btn btn-danger"><em
                                                            class="icon ni ni-download"></em><em
                                                            class="icon ni ni-file-pdf"></em></a></td>
                                            @endif
                                        @else
                                            <td></td>
                                        @endif
                                        {{-- <td>{{ \Carbon\Carbon::parse($data->updated_at)->format('d-M-y H:i') }}</td> --}}
                                        <td>
                                            @if ($pengaturan->status_pendaftaran_ditutup != 1)
                                                <form
                                                    action="{{ route('Lomba.peserta.destroy', Crypt::encrypt($data->id_pendaftar)) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('Lomba.peserta.edit', Crypt::encrypt($data->id_pendaftar)) }}"
                                                        class="btn btn-warning "><em class="icon ni ni-edit"></em></a>

                                                    <button class="btn btn-danger "
                                                        onclick="return confirm('Yakin ingin menghapus ?');"><em
                                                            class="icon ni ni-trash"></em></button>

                                                </form>
                                            @else
                                                <a href="{{ route('Lomba.peserta.edit', Crypt::encrypt($data->id_pendaftar)) }}"
                                                    class="btn btn-warning"><em class="icon ni ni-edit"></em></a>
                                            @endif
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="uploadproposal">
                                        <div class="modal-dialog modal-dialog-top" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">
                                                        @if (!empty($datas[0]))
                                                            @if ($datas[0]->id_lomba == 3)
                                                                Upload Video
                                                            @elseif($datas[0]->id_lomba == 4)
                                                                Upload Poster
                                                            @else
                                                                Upload Proposal
                                                            @endif
                                                        @endif
                                                    </h5>
                                                    <a href="#" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <em class="icon ni ni-cross"></em>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ route('Lomba.peserta.tambahproposal', $data->id_user) }}"
                                                        class="is-alter form-validate" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFileLabel">
                                                                    @if (!empty($datas[0]))
                                                                        @if ($datas[0]->id_lomba == 3)
                                                                            Upload Video
                                                                        @elseif($datas[0]->id_lomba == 4)
                                                                            Upload Poster
                                                                        @else
                                                                            Upload Proposal
                                                                        @endif
                                                                    @endif
                                                                </label>
                                                                <div class="form-control-wrap">
                                                                    @if ($data->id_lomba == 3 || $data->id_lomba == 4)
                                                                        <input type="text" class="form-control"
                                                                            name="linkvideo"
                                                                            data-msg="Masukan Link postingan Poster/Video"
                                                                            placeholder="Masukan Link postingan Poster/Video"
                                                                            required>
                                                                        <div class="form-file mt-2">
                                                                            <input type="file"
                                                                                name="upload_bukti_submit_ig"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Upload Bukti Poster/Video">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File
                                                                                Bukti
                                                                                Upload Poster/Video</label>
                                                                        </div>
                                                                    @else
                                                                        <div class="form-file">
                                                                            <input type="file" name="proposal"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept=".pdf" required
                                                                                data-msg="Masukan Proposal">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File
                                                                                Proposal</label>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <div class="text-end">
                                                                <button class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if ($pengaturan->status_pendaftaran_ditutup != 1)
                <div class="modal fade" id="test">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pilih Kategori Lomba</h5>
                                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                            </div>
                            <div class="modal-body">
                                <div
                                    class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
                                    <div class="wide-xs-fix">
                                        <form class="nk-stepper stepper-init is-alter form-validate"
                                            action="{{ route('Lomba.peserta.store') }}" id="stepper-survey-v1"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="nk-stepper-content">
                                                <div class="nk-stepper-progress stepper-progress mb-4">
                                                    <div class="stepper-progress-count mb-2"></div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar stepper-progress-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="nk-stepper-steps stepper-steps">
                                                    <div class="nk-stepper-step">
                                                        <div class="card-preview">
                                                            <div class="row g-3">
                                                                <div class="col-6">
                                                                    <h6>Web Programming</h6>
                                                                    <div class="preview-block">
                                                                        <div
                                                                            class="custom-control custom-radio image-control">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="imageRadio1" value="1"
                                                                                name="kategorilomba" required>
                                                                            <label class="custom-control-label"
                                                                                for="imageRadio1"><img class="img-fluid"
                                                                                    src="{{ asset('img') }}/modal_webpro.webp"
                                                                                    alt=""></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>Design Packaging</h6>
                                                                    <div class="preview-block">
                                                                        <div
                                                                            class="custom-control custom-radio image-control">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="imageRadio2" value="2"
                                                                                name="kategorilomba" required>
                                                                            <label class="custom-control-label"
                                                                                for="imageRadio2"><img class="img-fluid"
                                                                                    src="{{ asset('img') }}/modal_despac.webp"
                                                                                    alt=""></label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>Videography</h6>
                                                                    <div class="preview-block">
                                                                        <div
                                                                            class="custom-control custom-radio image-control">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="imageRadio3" value="3"
                                                                                name="kategorilomba" required>
                                                                            <label class="custom-control-label"
                                                                                for="imageRadio3"><img class="img-fluid"
                                                                                    src="{{ asset('img') }}/modalvideo.jpeg"
                                                                                    alt=""></label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>Design Poster</h6>
                                                                    <div class="preview-block">
                                                                        <div
                                                                            class="custom-control custom-radio image-control">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="imageRadio4" value="4"
                                                                                name="kategorilomba" required>
                                                                            <label class="custom-control-label"
                                                                                for="imageRadio4"><img class="img-fluid"
                                                                                    src="{{ asset('img') }}/modal_poster.png"
                                                                                    alt=""></label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">Data Ketua</h5>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_nama">Nama
                                                                        TIM</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_nama" name="nama_tim"
                                                                            data-msg="Masukan Nama Tim"
                                                                            placeholder="Masukan Nama Tim" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="guru_pembimbing">Nama
                                                                        Guru
                                                                        Pembimbing
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="guru_pembimbing" name="guru_pembimbing"
                                                                            data-msg="Masukan Nama Guru Pembimbing"
                                                                            placeholder="Nama Guru Pembimbing" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_nama">Nama
                                                                        Ketua</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_nama" name="nama_peserta[]"
                                                                            value="{{ Auth::user()->name }}"
                                                                            data-msg="Masukan Nama Ketua"
                                                                            placeholder="nama Ketua" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_email">Email
                                                                        Ketua</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_email" name="email_peserta[]"
                                                                            value="{{ Auth::user()->email }}"
                                                                            data-msg="Masukan Email Ketua"
                                                                            placeholder="Email Ketua" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_asalsekolah">Asal
                                                                        Sekolah</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_asalsekolah" name="asal_sekolah"
                                                                            data-msg="Masukan Asal Sekolah"
                                                                            placeholder="Asal Sekolah" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_nohp">No. Hp /
                                                                        WA</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" class="form-control"
                                                                            id="form_nohp" name="NoHp_peserta"
                                                                            data-msg="Masukan No. Hp"
                                                                            placeholder="No. Hp / WA" required
                                                                            oninput="checkNoHpLength()">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Kartu
                                                                        Pelajar</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" name="kartu_pelajar[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Kartu Pelajar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Foto
                                                                        Formal</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" name="foto_formal[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Follow <br><a
                                                                            href="https://www.instagram.com/epim_polije/"
                                                                            target="_blank">IG
                                                                            EPIM_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_follow_ig_epim[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Follow <a
                                                                            href="https://www.instagram.com/hmjti_polije/"
                                                                            target="_blank">IG
                                                                            HMJTI_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_follow_ig_hmjti[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Subscribe <a
                                                                            href="https://www.youtube.com/@hmjtipolije/"
                                                                            target="_blank">YT
                                                                            HMJTI_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_subscribe_hmjti[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Follow <a
                                                                            href="https://www.tiktok.com/@hmjti_polije"
                                                                            target="_blank">Tiktok HMJTI_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_follow_tiktok_hmjti[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">Bukti Pembayaran</h5>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h6 class="card-title">Pembayaran bisa melalui</h6>
                                                                        <ul class="list-unstyled">
                                                                            <li>BRI : 0056 0108 7807 509</li>
                                                                            <li>Nadhifatus Aulia Enggarsya</li>
                                                                            <li>CP Terkait Pembayaran: 0857 9889 4869</li>
                                                                        </ul>
                                                                        <hr>
                                                                        <label class="form-label" for="form_nama">Masukan
                                                                            Bukti Pembayaran</label>
                                                                        <br>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-file">
                                                                                <input type="file" name="upload_bayar"
                                                                                    class="form-file-input form-control"
                                                                                    id="customFile" accept="image/*"
                                                                                    required
                                                                                    data-msg="Masukan Bukti Pembayaran">
                                                                                <label class="form-file-label"
                                                                                    for="customFile">Masukan File /
                                                                                    Gambar</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="nk-stepper-step">
                                                    <h5 class="title mb-3">Data Anggota 2</h5>
                                                    <div class="row g-3">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="form_nama">Nama Anggota
                                                                    2</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="form_nama" name="nama_peserta[]"
                                                                        data-msg="Masukan Nama Anggota 2"
                                                                        placeholder="nama Anggota 2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="form_email">Email Anggota
                                                                    2</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="email" class="form-control"
                                                                        id="form_email" name="email_peserta[]"
                                                                        data-msg="Masukan Email Anggota 2"
                                                                        placeholder="Email Anggota 2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFileLabel">Kartu
                                                                    Pelajar</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" name="kartu_pelajar[]"
                                                                            class="form-file-input form-control"
                                                                            id="customFile" accept="image/*"
                                                                            data-msg="Masukan Kartu Pelajar">
                                                                        <label class="form-file-label"
                                                                            for="customFile">Masukan File /
                                                                            Gambar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFileLabel">Foto
                                                                    Formal</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file" name="foto_formal[]"
                                                                            class="form-file-input form-control"
                                                                            id="customFile" accept="image/*"
                                                                            data-msg="Masukan Gambar">
                                                                        <label class="form-file-label"
                                                                            for="customFile">Masukan File /
                                                                            Gambar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFileLabel">Bukti
                                                                    Follow <br><a
                                                                        href="https://www.instagram.com/epim_polije/"
                                                                        target="_blank">IG
                                                                        EPIM_POLIJE</a></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file"
                                                                            name="bukti_follow_ig_epim[]"
                                                                            class="form-file-input form-control"
                                                                            id="customFile" accept="image/*"
                                                                            data-msg="Masukan Gambar">
                                                                        <label class="form-file-label"
                                                                            for="customFile">Masukan File /
                                                                            Gambar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFileLabel">Bukti
                                                                    Follow <a
                                                                        href=" https://www.instagram.com/hmjti_polije/"
                                                                        target="_blank">IG
                                                                        HMJTI_POLIJE</a></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file"
                                                                            name="bukti_follow_ig_hmjti[]"
                                                                            class="form-file-input form-control"
                                                                            id="customFile" accept="image/*"
                                                                            data-msg="Masukan Gambar">
                                                                        <label class="form-file-label"
                                                                            for="customFile">Masukan File /
                                                                            Gambar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFileLabel">Bukti
                                                                    Subscribe <a
                                                                        href="https://www.youtube.com/@hmjtipolije/"
                                                                        target="_blank">YT
                                                                        HMJTI_POLIJE</a></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file"
                                                                            name="bukti_subscribe_hmjti[]"
                                                                            class="form-file-input form-control"
                                                                            id="customFile" accept="image/*"
                                                                            data-msg="Masukan Gambar">
                                                                        <label class="form-file-label"
                                                                            for="customFile">Masukan File /
                                                                            Gambar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFileLabel">Bukti
                                                                    Follow <a href="https://www.tiktok.com/@hmjti_polije"
                                                                        target="_blank">Tiktok
                                                                        HMJTI_POLIJE</a></label>
                                                                <div class="form-control-wrap">
                                                                    <div class="form-file">
                                                                        <input type="file"
                                                                            name="bukti_follow_tiktok_hmjti[]"
                                                                            class="form-file-input form-control"
                                                                            id="customFile" accept="image/*"
                                                                            data-msg="Masukan Gambar">
                                                                        <label class="form-file-label"
                                                                            for="customFile">Masukan File /
                                                                            Gambar</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                    <div class="nk-stepper-step ">
                                                        <div class="pt-4 pb-2">
                                                            <em
                                                                class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>
                                                            <p>Terimakasih Telah Mendaftar Lomba HMJTI</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul
                                                    class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination justify-content-end ">
                                                    <li class="step-prev"><button type="button"
                                                            class="btn btn-dim btn-primary">Back</button></li>
                                                    <li class="step-next"><button type="button"
                                                            class="btn btn-primary">Continue</button>
                                                    </li>
                                                    <li class="step-submit"><button onclick="submit()" type="submit"
                                                            class="btn btn-primary">Submit</button></li>

                                                </ul>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($pengaturan->status_upload_postervideo_ditutup != 1)
                <!-- only show lomba with id_lomba = 3 and 4 -->
                <div class="modal fade" id="test">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Pilih Kategori Lomba</h5>
                                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <em class="icon ni ni-cross"></em>
                                </a>
                            </div>
                            <div class="modal-body">
                                <div
                                    class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
                                    <div class="wide-xs-fix">
                                        <form class="nk-stepper stepper-init is-alter form-validate"
                                            action="{{ route('Lomba.peserta.store') }}" id="stepper-survey-v1"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            <div class="nk-stepper-content">
                                                <div class="nk-stepper-progress stepper-progress mb-4">
                                                    <div class="stepper-progress-count mb-2"></div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar stepper-progress-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="nk-stepper-steps stepper-steps">
                                                    <div class="nk-stepper-step">
                                                        <div class="card-preview">
                                                            <div class="row g-3">
                                                                <div class="col-6">
                                                                    <h6>Videography</h6>
                                                                    <div class="preview-block">
                                                                        <div
                                                                            class="custom-control custom-radio image-control">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="imageRadio3" value="3"
                                                                                name="kategorilomba" required>
                                                                            <label class="custom-control-label"
                                                                                for="imageRadio3"><img class="img-fluid"
                                                                                    src="{{ asset('img') }}/modalvideo.jpeg"
                                                                                    alt=""></label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h6>Design Poster</h6>
                                                                    <div class="preview-block">
                                                                        <div
                                                                            class="custom-control custom-radio image-control">
                                                                            <input type="radio"
                                                                                class="custom-control-input"
                                                                                id="imageRadio4" value="4"
                                                                                name="kategorilomba" required>
                                                                            <label class="custom-control-label"
                                                                                for="imageRadio4"><img class="img-fluid"
                                                                                    src="{{ asset('img') }}/modal_poster.png"
                                                                                    alt=""></label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">Data Ketua</h5>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_nama">Nama
                                                                        TIM</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_nama" name="nama_tim"
                                                                            data-msg="Masukan Nama Tim"
                                                                            placeholder="Masukan Nama Tim" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="guru_pembimbing">Nama
                                                                        Guru
                                                                        Pembimbing
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="guru_pembimbing" name="guru_pembimbing"
                                                                            data-msg="Masukan Nama Guru Pembimbing"
                                                                            placeholder="Nama Guru Pembimbing" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_nama">Nama
                                                                        Ketua</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_nama" name="nama_peserta[]"
                                                                            value="{{ Auth::user()->name }}"
                                                                            data-msg="Masukan Nama Ketua"
                                                                            placeholder="nama Ketua" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_email">Email
                                                                        Ketua</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_email" name="email_peserta[]"
                                                                            value="{{ Auth::user()->email }}"
                                                                            data-msg="Masukan Email Ketua"
                                                                            placeholder="Email Ketua" readonly required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_asalsekolah">Asal
                                                                        Sekolah</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="form_asalsekolah" name="asal_sekolah"
                                                                            data-msg="Masukan Asal Sekolah"
                                                                            placeholder="Asal Sekolah" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="form_nohp">No. Hp /
                                                                        WA</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" class="form-control"
                                                                            id="form_nohp" name="NoHp_peserta"
                                                                            data-msg="Masukan No. Hp"
                                                                            placeholder="No. Hp / WA" required
                                                                            oninput="checkNoHpLength()">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Kartu
                                                                        Pelajar</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" name="kartu_pelajar[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Kartu Pelajar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Foto
                                                                        Formal</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" name="foto_formal[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Follow <br><a
                                                                            href="https://www.instagram.com/epim_polije/"
                                                                            target="_blank">IG
                                                                            EPIM_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_follow_ig_epim[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Follow <a
                                                                            href="https://www.instagram.com/hmjti_polije/"
                                                                            target="_blank">IG
                                                                            HMJTI_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_follow_ig_hmjti[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Subscribe <a
                                                                            href="https://www.youtube.com/@hmjtipolije/"
                                                                            target="_blank">YT
                                                                            HMJTI_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_subscribe_hmjti[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="customFileLabel">Bukti
                                                                        Follow <a
                                                                            href="https://www.tiktok.com/@hmjti_polije"
                                                                            target="_blank">Tiktok HMJTI_POLIJE</a></label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file"
                                                                                name="bukti_follow_tiktok_hmjti[]"
                                                                                class="form-file-input form-control"
                                                                                id="customFile" accept="image/*" required
                                                                                data-msg="Masukan Gambar">
                                                                            <label class="form-file-label"
                                                                                for="customFile">Masukan File /
                                                                                Gambar</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">Bukti Pembayaran</h5>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h6 class="card-title">Pembayaran bisa melalui</h6>
                                                                        <ul class="list-unstyled">
                                                                            <li>BRI : 0056 0108 7807 509</li>
                                                                            <li>Nadhifatus Aulia Enggarsya</li>
                                                                            <li>CP Terkait Pembayaran: 0857 9889 4869</li>
                                                                        </ul>
                                                                        <hr>
                                                                        <label class="form-label" for="form_nama">Masukan
                                                                            Bukti Pembayaran</label>
                                                                        <br>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-file">
                                                                                <input type="file" name="upload_bayar"
                                                                                    class="form-file-input form-control"
                                                                                    id="customFile" accept="image/*"
                                                                                    required
                                                                                    data-msg="Masukan Bukti Pembayaran">
                                                                                <label class="form-file-label"
                                                                                    for="customFile">Masukan File /
                                                                                    Gambar</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="nk-stepper-step ">
                                                        <div class="pt-4 pb-2">
                                                            <em
                                                                class="icon icon-circle icon-circle-xxl mb-4 ni ni-check bg-primary-dim"></em>
                                                            <p>Terimakasih Telah Mendaftar Lomba HMJTI</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul
                                                    class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination justify-content-end ">
                                                    <li class="step-prev"><button type="button"
                                                            class="btn btn-dim btn-primary">Back</button></li>
                                                    <li class="step-next"><button type="button"
                                                            class="btn btn-primary">Continue</button>
                                                    </li>
                                                    <li class="step-submit"><button onclick="submit()" type="submit"
                                                            class="btn btn-primary">Submit</button></li>

                                                </ul>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                {{-- <!-- show alert message -->
                <script>
                    alert("Maaf pendaftaran lomba sudah ditutup");
                </script> --}}
            @endif


        </div>
    </div>

    <script>
        function checkNoHpLength() {
            var noHp = document.getElementById("form_nohp").value;
            if (noHp.length > 13) {
                alert("NoHp tidak boleh lebih dari 13 karakter!");
                document.getElementById("form_nohp").value = noHp.substring(0, 13);
            }
        }
    </script>
    <script>
        @if (session('whatsapp_url'))
            window.open('{{ session('whatsapp_url') }}', '_blank');
        @endif
    </script>
@endsection
