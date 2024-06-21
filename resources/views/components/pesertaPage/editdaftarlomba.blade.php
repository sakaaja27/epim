@extends('components.ComponentDashPeserta.main')
@section('Title', 'Edit Daftar Lomba')
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Edit Lomba</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <a type="button" class="btn btn-primary" href="{{ route('Lomba.peserta.page') }}"><em
                            class="icon ni ni-back-ios"></em><span>Kembali
                        </span></a>
                </div>
            </div>
        </div>

        <div class="nk-block">
            <div class="card">
                <div class="card-inner-group">
                    <div class="card-inner">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="card shadow p-3">
                                    <div class="modal-lomba p-0 m-0">
                                        @if ($data->id_lomba == 1)
                                            <img class="img-fluid blur" src="{{ asset('img') }}/modal_webpro.webp"
                                                alt="" class="modalImg">
                                            <span class="modalDesc text-center">Web Programming</span>
                                        @elseif($data->id_lomba == 2)
                                            <img class="img-fluid blur" src="{{ asset('img') }}/modal_despac.webp"
                                                alt="" class="modalImg">
                                            <span class="modalDesc text-center">Design Packaging</span>
                                        @elseif($data->id_lomba == 3)
                                            <img class="img-fluid blur" src="{{ asset('img') }}/modalvideo.jpeg"
                                                alt="" class="modalImg">
                                            <span class="modalDesc text-center">Videography</span>
                                        @elseif($data->id_lomba == 4)
                                            <img class="img-fluid blur" src="{{ asset('img') }}/modal_poster.png"
                                                alt="" class="modalImg">
                                            <span class="modalDesc text-center">Design Poster</span>
                                        @endif
                                    </div>
                                    <ul class="mt-3">
                                        <li class="mt-2">
                                            <h6>Bidang Lomba Yang Diikuti : {{ $data->nama_lomba }} <span </h6>
                                        </li>
                                        <li class="mt-2">
                                            <h6>Nama Ketua Tim : {{ $data->nama_ketua }}</h6>
                                        </li>
                                        <li class="mt-2">
                                            <h6>Nama Tim : {{ $data->nama_tim }}</h6>
                                        </li>
                                        <li class="mt-2">
                                            <h6>Nama Guru Pembimbing : {{ $data->guru_pembimbing }}</h6>
                                        </li>
                                        <li class="mt-2">
                                            <h6>Asal Sekolah : {{ $data->asal_sekolah }}</h6>
                                        </li>
                                        <li class="mt-2">
                                            <h6>
                                                @if ($data->id_lomba == 1)
                                                    No Hp Ketua Tim:
                                                @else
                                                    No Hp :
                                                @endif
                                                {{ $data->NoHp }}
                                            </h6>
                                        </li>
                                        <li class="mt-2">
                                            <h6>
                                                @if ($data->id_lomba == 1)
                                                Email Ketua Tim:
                                                @else
                                                   Email :
                                                @endif
                                                {{ $data->email_ketua }}
                                            </h6>
                                           
                                        </li>
                                        <li class="mt-2">
                                            <h6>
                                                @if ($data->id_lomba == 3)
                                                    Video
                                                @elseif($data->id_lomba == 4)
                                                    Poster
                                                @else
                                                    Proposal
                                                    @endif : @if ($data->proposal != null)
                                                        @if ($data->id_lomba == 3 || $data->id_lomba == 4)
                                                            <td><a href="{{ $data->proposal }}" target="_blank"
                                                                    class="btn btn-danger"><em
                                                                        class="icon ni ni-download"></em><em
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
                                            </h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <div class="card p-3 shadow">
                                    <div class="row mb-2">
                                        <div class="col-6">
                                            <h2>Peserta</h2>
                                        </div>
                                        <div class="col-6 text-end mt-2">
                                            @if ($data->id_lomba == 1 && $pengaturan->status_pendaftaran_ditutup != 1)
                                                @if ($datapeserta->count() < 3)
                                                    <a href="{{ route('Peserta.create', Crypt::encrypt($data->id_tim)) }}"
                                                        class="btn btn-primary"><em
                                                            class="icon ni ni-plus"></em><span>Tambah Peserta</span></a>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <table class="datatable-init table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Peserta</th>
                                                <th>email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datapeserta as $peserta)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $peserta->name }}
                                                        @if ($data->id_lomba == 1)
                                                            <b>{{ $peserta->id_user == $data->id_user ? '(Ketua Tim)' : '' }}</b>
                                                        @endif
                                                    </td>
                                                    <td>{{ $peserta->email }}</td>
                                                    <td>
                                                        @if ($pengaturan->status_pendaftaran_ditutup != 1)
                                                            <form
                                                                action="{{ route('Peserta.destroy', Crypt::encrypt($peserta->id_user)) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('Peserta.edit', Crypt::encrypt($peserta->id_user)) }}"
                                                                    class="btn btn-warning"><em
                                                                        class="icon ni ni-edit"></em></a>
                                                                <a href="{{ route('Peserta.show', Crypt::encrypt($peserta->id_user)) }}"
                                                                    class="btn btn-info"><em
                                                                        class="icon ni ni-eye-alt"></em></a>
                                                                @if ($peserta->id_user != $data->id_user)
                                                                    <button class="btn btn-danger"><em
                                                                            class="icon ni ni-trash"></em></button>
                                                                @endif
                                                            </form>
                                                        @else
                                                            <a href="{{ route('Peserta.show', Crypt::encrypt($peserta->id_user)) }}"
                                                                class="btn btn-info"><em
                                                                    class="icon ni ni-eye-alt"></em></a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
