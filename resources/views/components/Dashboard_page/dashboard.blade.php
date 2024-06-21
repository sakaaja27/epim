@extends('components.Dashboard_component.main')
@section('Title', 'dashboard')
@section('content')

    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Dashboard</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">

                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-xxl-3 col-sm-4">
                    <a href="">
                        <div class="card center">
                            <div class="nk-ecwg nk-ecwg6">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Total Tim Pendaftar</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group center">

                                            <div class="amount">{{ $hitungtotaltim }}</div>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .nk-ecwg -->
                        </div>
                    </a>
                    <!-- .card -->
                </div><!-- .col -->
                {{-- <div class="col-xxl-3 col-sm-4">
                <div class="card center">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Tim Sudah Upload Proposal</h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group center">
                                    <div class="amount">{{$timsudahuploadproposal}}</div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
                {{-- <div class="col-xxl-3 col-sm-4">
                <div class="card center">
                    <div class="nk-ecwg nk-ecwg6">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Total Perwakilan </h6>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group center">
                                    <div class="amount">{{ $ketuatiaptim }}</div>
                                    
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
                <div class="col-xxl-3 col-sm-4">
                    <div class="card center">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Total Semua Peserta </h6>
                                    </div>
                                </div>
                                <div class="data center">
                                    <div class="data-group">
                                        <div class="amount">{{ $peserta }}</div>
                                        {{-- <div class="nk-ecwg6-ck">
                                        <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                    </div> --}}
                                    </div>
                                    {{-- <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div> --}}
                                </div>
                            </div><!-- .card-inner -->
                        </div><!-- .nk-ecwg -->
                    </div><!-- .card -->
                </div>

                <div class="col-xxl-3 col-sm-4">
                    <div class="card center">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Tim Lomba Design Packaging</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group center">
                                        <div class="amount">{{ $timdesign }}</div>

                                    </div>
                                    {{-- <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div> --}}
                                </div>
                            </div><!-- .card-inner -->
                        </div><!-- .nk-ecwg -->
                    </div><!-- .card -->
                </div>

                <div class="col-xxl-3 col-sm-4">
                    <div class="card center">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Tim Lomba Web </h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group center">
                                        <div class="amount">{{ $timweb }}</div>

                                    </div>

                                </div>
                            </div><!-- .card-inner -->
                        </div><!-- .nk-ecwg -->
                    </div><!-- .card -->
                </div>
                <div class="col-xxl-3 col-sm-4">
                    <div class="card center">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Tim Lomba Design Poster</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group center">
                                        <div class="amount">{{ $timposter }}</div>

                                    </div>

                                </div>
                            </div><!-- .card-inner -->
                        </div><!-- .nk-ecwg -->
                    </div><!-- .card -->
                </div>
                <div class="col-xxl-3 col-sm-4">
                    <div class="card center">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Tim Lomba Videography</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group center">
                                        <div class="amount">{{ $timvideo }}</div>

                                    </div>

                                </div>
                            </div><!-- .card-inner -->
                        </div><!-- .nk-ecwg -->
                    </div><!-- .card -->
                </div>
            </div><!-- .row -->
        </div><!-- .nk-block -->
    </div>
@endsection
