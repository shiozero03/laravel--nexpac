<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nexpac Aseptik Indonesia | @yield('tittle')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/iziToast/iziToast.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}" />
	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/newstyle.min.css') }}">

	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/iziToast/iziToast.min.js') }}"></script>
	<!-- <script src="{{asset('assets/js/platform.min.js')}}" data-use-service-core defer></script> -->
	<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  	<script src="{{asset('assets/js/aos.min.js')}}"></script>
</head>
<body>

	@include('pages.theme.header')

	@yield('content')
	
	@include('pages.theme.footer')

	<script type="text/javascript" src="{{ asset('assets/js/myScript.js') }}"></script>
</body>
</html>