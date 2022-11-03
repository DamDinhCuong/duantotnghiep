<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- <link rel="icon" type="image/png" href="..\images\favicon2.png"> -->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/owl.carousel.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/magnific-popup.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/animate.css')}}">
    <!-- mean menu css -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/meanmenu.min.css')}}">
    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/main.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('web/css/responsive.css')}}">
    @yield('styles')
</head>

<body>
    <main id="app">
        @yield('content')
        @include('_partials.footer')
    </main>
</body>

<!-- end copyright -->
<!-- jquery -->
<script src="{{asset('web/js/jquery-1.11.3.min.js')}}"></script>
<!-- jquery -->
<script src="{{asset('web/js/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- count down -->
<script src="{{asset('web/js/jquery.countdown.js')}}"></script>
<!-- isotope -->
<script src="{{asset('web/js/jquery.isotope-3.0.6.min.js')}}"></script>
<!-- waypoints -->
<script src="{{asset('web/js/waypoints.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
<!-- mean menu -->
<script src="{{asset('web/js/jquery.meanmenu.min.js')}}"></script>
<!-- sticker js -->
<script src="{{asset('web/js/sticker.js')}}"></script>
<!-- main js -->
<script src="{{asset('web/js/main.js')}}"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
@yield('script')
@yield('vue')
</html>
