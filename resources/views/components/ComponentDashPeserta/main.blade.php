<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('') }}/favicon.ico">
    <!-- Page Title  -->
    <title>@yield('Title')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('dashboard_asset/css/dashlite.css?ver=3.2.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('dashboard_asset/css/theme.css?ver=3.2.2') }}">
    <link rel="stylesheet" href="{{ asset('css') }}/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .blur {
            filter: blur(5px);
        }
    </style>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @include('components.ComponentDashPeserta.sidebar')
            <!-- wrap @s -->
            <div class="nk-wrap ">
                @include('components.ComponentDashPeserta.header')
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                @include('components.ComponentDashPeserta.footer')
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('dashboard_asset/js/bundle.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('dashboard_asset/js/scripts.js?ver=3.2.2') }}"></script>
    @stack('script')
</body>
{{-- <div class="js-preloader">    <div class="loading-animation tri-ring"></div></div>
<script>
    window.onload = function() {
    setTimeout(function() {
        document.querySelector('.js-preloader').style.display = 'none';
    }, 1500); // Adjust timeout (in milliseconds)
};
</script> --}}
<script>
    var hasData =
        @if (DB::table('v_tim_lomba')->where('id_user', Auth::user()->id_user)->exists())
            true
        @else
            false
        @endif ;

    function checkData() {
        hasData ? window.location.href = "/profile" : alert(
            "Anda belum mendaftarkan tim. Silakan daftarkan tim terlebih dahulu untuk melihat profil.");
    }
</script>

</html>
