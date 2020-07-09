<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas" />
    <meta name="description" content="Bootstrap 4 Landing Page Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Miracle Clothing</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{secure_asset('frontend/images/favicon.ico')}}" />

    <!-- inject css start -->

    <link href="{{secure_asset('frontend/css/theme-plugin.css')}}" rel="stylesheet" />
    <link href="{{secure_asset('frontend/css/theme.min.css')}}" rel="stylesheet" />

    <!-- inject css end -->

</head>

<body>

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader">
                <img class="img-fluid" src="{{secure_asset('frontend/images/loader.gif')}}" alt="">
            </div>
        </div>

        <!-- preloader end -->

        @include('frontend.partials.header')

        @yield('slider')

        <!--body content start-->

        <div class="page-content">
            @yield('content')
        </div>

        <!--body content end-->

        @include('frontend.partials.footer')

    </div>

    <!-- page wrapper end -->


    <!--back-to-top start-->

    <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

    <!--back-to-top end-->

    <!-- inject js start -->

    <script src="{{secure_asset('frontend/js/theme-plugin.js')}}"></script>
    <script src="{{secure_asset('frontend/js/theme-script.js')}}"></script>

    <!-- inject js end -->

</body>

</html>