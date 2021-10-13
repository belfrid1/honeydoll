<!DOCTYPE html>
<html lang="en">
<head>
  	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-E547D326CC"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-E547D326CC');
	</script>
    <meta charset="utf-8">
    <title>XDOLLKISS: SEX-DOLL | @yield('title')</title>
    @yield('description')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="author" content="">

{{--    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/front/images/favicon.ico') }}" />--}}
{{--    <link href="{{ asset('public/assets/front/css/vendor/bootstrap.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('public/assets/front/css/vendor/vendor.min.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('public/assets/front/css/style.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('public/assets/front/fonts/icomoon/icons.css') }}" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- CSS new template
 ============================================ -->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('stylesheets')
</head>
<body class="has-smround-btns has-loader-bg equal-height" onclick="openWind()">
 <!--Header section-->
@include('front.layouts.header')

<!--Content section -&#45;&#45; content place in app for each view that extend app-->
@yield('content')

 <!--Footer section-->
@include('front.layouts.footer')
 <!-- All JS is here
============================================ -->

 <script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
 <script src="{{asset('assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
 <script src="{{asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
 <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
 <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
 <script src="{{asset('assets/js/plugins.js')}}"></script>
 <!-- Ajax Mail -->
 <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
 <!-- Main JS -->
 <script src="{{asset('assets/js/main.js')}}"></script>

{{--<script src="{{ asset('public/assets/front/js/vendor-special/lazysizes.min.js') }}"></script>--}}
{{--<script src="{{ asset('public/assets/front/js/vendor-special/ls.bgset.min.js') }}"></script>--}}
{{--<script src="{{ asset('public/assets/front/js/vendor-special/ls.aspectratio.min.js') }}"></script>--}}
{{--<script src="{{ asset('public/assets/front/js/vendor-special/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('public/assets/front/js/vendor-special/jquery.ez-plus.js') }}"></script>--}}
{{--<script src="{{ asset('public/assets/front/js/vendor/vendor.min.js') }}"></script>--}}
{{--<script src="{{ asset('public/assets/front/js/app-html.js') }}"></script>--}}
@yield('javascripts')

</body>
</html>
