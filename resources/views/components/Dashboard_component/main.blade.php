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
    
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @include('components.Dashboard_component.sidebar')
            <!-- wrap @s -->
            <div class="nk-wrap ">
                @include('components.Dashboard_component.header')
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                @include('components.Dashboard_component.footer')
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
     <!-- JavaScript -->
     <script src="{{ asset('dashboard_asset/js/bundle.js?ver=3.2.2') }}"></script>
     <script src="{{ asset('dashboard_asset/js/scripts.js?ver=3.2.2') }}"></script>
     @stack('script')
   
    {{-- <script src="dashboard_asset/js/charts/chart-ecommerce.js?ver=3.2.2"></script> --}}
</body>

</html>