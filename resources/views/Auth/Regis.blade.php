<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('') }}/favicon.ico">
    <!-- Page Title  -->
    <title>Forgot Password</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="dashboard_asset/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="dashboard_asset/css/theme.css?ver=3.2.2">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="html/index.html" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg" src="{{ asset('img') }}/Logo-epim.png" srcset="{{ asset('img') }}/Logo-epim.png" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg" src="{{ asset('img') }}/Logo-epim.png" srcset="{{ asset('img') }}/Logo-epim.png" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-up</h5>
                                        
                                    </div>
                                </div><!-- .nk-block-head -->

                                {{-- @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif --}}

                                {{-- @if(session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif --}}

                                <form action="/Register" method="POST" class="form-validate is-alter" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="name">Nama Perwakilan</label>
                                            {{-- <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a> --}}
                                        </div>

                                        <div class="form-control-wrap">
                                            <input autocomplete="off" type="name" name="name" class="form-control form-control-lg" required id="name" placeholder="Masukkan nama lengkap ketua tim">
                                        </div>

                                        <div class="form-label-group mt-3">
                                            <label class="form-label" for="email-address">Email</label>
                                            {{-- <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a> --}}
                                        </div>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" required id="email-address" placeholder="Enter your email">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            {{-- <a class="link link-primary link-sm" tabindex="-1" href="html/pages/auths/auth-reset.html">Forgot Code?</a> --}}
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input autocomplete="new-password" type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required id="password" placeholder="Enter a password of at least 8 characters">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Save</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 pt-2 center">
                                    <p>Do you already have an account ? <a href="/Login">Please Sign-In </a></p>
                                </div>
                                <!-- form -->
                                
                                
                                
                            </div><!-- .nk-block -->
                            
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                            data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg"
                            data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto text-center">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img text-center">
                                                <img class="round mx-auto d-block" src="{{ asset('img') }}/thumbnail.webp"
                                                    srcset="{{ asset('img') }}/thumbnail.webp" alt="">
                                            </div>
                                            {{-- <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>EPIM</h4>

                                            </div> --}}
                                        </div>
                                    </div><!--.slider-item -->
                                    
                                </div><!--.slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!--.slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="dashboard_asset/js/bundle.js?ver=3.2.2"></script>
    <script src="dashboard_asset/js/scripts.js?ver=3.2.2"></script>
</html>