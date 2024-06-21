@extends('components.ComponentDashPeserta.main')
@section('Title', 'Profile')
@section('content')
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-between d-flex justify-content-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Informasi Personal</h4>
                                                <div class="nk-block-des">
                                                    <p>Disini Kamu bisa mengubah Profil Kamu.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-center">
                                                <div class="nk-tab-actions me-n1">
                                                    <a class="btn btn-icon btn-trigger" data-bs-toggle="modal"
                                                        href="#profile-edit"><em class="icon ni ni-edit"></em></a>
                                                </div>
                                                <div class="nk-block-head-content align-self-start d-lg-none">
                                                    <a href="#" class="toggle btn btn-icon btn-trigger"
                                                        data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->

                                    <div class="nk-block">

                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title">Basic Informasi.</h6>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Nama Account</span>
                                                    <span class="data-value">{{ auth()->user()->name }}</span>
                                                </div>
                                            </div><!-- data-item -->
                                            <!-- data-item -->
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Email</span>
                                                    <span class="data-value">{{ auth()->user()->email }}</span>
                                                </div>
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                @foreach ($data as $tim)
                                                    <div class="data-col">
                                                        <span class="data-label">No Hp Ketua / Perwakilan</span>
                                                        <span class="data-value text-soft"> {{ $tim->NoHp }}</span>
                                                    </div>
                                                @endforeach

                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                @foreach ($data as $tim)
                                                    <div class="data-col">
                                                        <span class="data-label">Nama Tim</span>
                                                        <span class="data-value text-soft"> {{ $tim->nama_tim }}</span>
                                                    </div>
                                                @endforeach
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                @foreach ($data as $tim)
                                                    <div class="data-col">
                                                        <span class="data-label">Nama Guru Pembimbing</span>
                                                        <span class="data-value text-soft">
                                                            {{ $tim->guru_pembimbing }}</span>
                                                    </div>
                                                @endforeach
                                            </div><!-- data-item -->
                                            <div class="data-item">
                                                @foreach ($data as $tim)
                                                    <div class="data-col">
                                                        <span class="data-label">Nama Sekolah</span>
                                                        <span class="data-value text-soft"> {{ $tim->asal_sekolah }}</span>
                                                    </div>
                                                @endforeach
                                            </div><!-- data-item -->
                                        </div><!-- data-list -->

                                    </div><!-- .nk-block -->
                                </div>

                            </div><!-- .card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <!-- footer @s
        -->

        <!-- footer @e -->
        </div>
        <!-- wrap @e -->
        </div>
        <!-- main @e -->
        </div>
        <!-- app-root @e -->
        <!-- select region modal -->
        <!-- .modal -->
        <!-- @@ Profile Edit Modal @e -->
        <div class="modal fade" role="dialog" id="profile-edit">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">
                        <h5 class="title">Update Profile</h5>
                        <ul class="nk-nav nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                            </li>
                            {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                        </li> --}}
                        </ul><!-- .nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="personal">
                                <div class="row gy-4">
                                    <form action="{{ route('profile.update', Crypt::encrypt($user->id_user)) }}"
                                        class="is-alter form-validate" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Nama Ketua Tim</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" value="{{ $user->name }}" class="form-control"
                                                            id="nama_peserta" name="nama_peserta"
                                                            data-msg="Masukan Nama Anggota 1" placeholder="nama Anggota">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Email Ketua Tim</label>
                                                    <div class="form-control-wrap">
                                                        <input type="email" value="{{ $user->email }}" class="form-control"
                                                            id="email_peserta" name="email_peserta"
                                                            data-msg="Masukan Email Anggota 1" placeholder="email Anggota">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">No.Hp Ketua Tim</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" value="{{ $data->first()->NoHp }}"
                                                            class="form-control" id="NoHp_peserta" name="NoHp_peserta"
                                                            required oninput="checkNoHpLength()">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Nama Tim</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" value="{{ $data->first()->nama_tim }}"
                                                            class="form-control" id="nama_tim" name="nama_tim" required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Nama Guru Pembimbing</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" value="{{ $data->first()->guru_pembimbing }}"
                                                            class="form-control" id="guru_pembimbing" name="guru_pembimbing"
                                                            required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name">Nama Sekolah</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" value="{{ $data->first()->asal_sekolah }}"
                                                            class="form-control" id="asal_sekolah" name="asal_sekolah"
                                                            required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <p></p>
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <script>
            function checkNoHpLength() {
                var noHp = document.getElementById("NoHp_peserta").value;
                if (noHp.length > 13) {
                    alert("NoHp tidak boleh lebih dari 13 karakter!");
                    document.getElementById("NoHp_peserta").value = noHp.substring(0, 13);
                }
            }
        </script>
        <script src="./assets/js/bundle.js?ver=3.2.2"></script>
        <script src="./assets/js/scripts.js?ver=3.2.2"></script>
    @endsection
